<?$this->load->view('../../static/views/cabecalhoPublicoView')?>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<div class="container">
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>
                <a class="brand" style="margin-top: 3px; font-size: 25px" href="<?=BASE_URL.'/peopleGrid/'?>"><?=lang('peopleGridPeopleGrid')?></a>
                <div class="nav-collapse">
                    <ul class="nav">
                        <li class="active"><a href="#home"><?=lang('peopleGridHome')?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section id="home">
        <div class="row" style="margin-top: 10px">
            <div class="span12">
                <div class="page-header">
                    <h1><?=lang('peopleGridPeopleGrid')?> <small><?=lang('peopleGridMundoDiferenteJaguarao')?></small></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Área de login Usuário-->
    <section id="usuarioLogin">
        <div class="row">
            <?
                if(@$userOn != ''){
                    ?>
                        <div class="span12">
                            <div class="hero-unit">
                                <p>
                                    <div style="float:left; margin:2px; width:60px; height: 60px;background-repeat: no-repeat;background-size: auto;background-image: url('http://graph.facebook.com/<?=@$userOn->fb_id?>/picture')"></div>
                                    <h2>
                                        <?=@$userOn->nome?><small><?=lang('peopleGridBomTever')?></small>
                                    </h2>  
                                </p>
                                    <?=lang('peopleGridAntesDe1').$totalDePergunts.lang('peopleGridAntesDe2')?>
                                <p>

                                </p>
                            </div>
                        </div>
                        <div class="span12">
                            <button class="btn btn-success pull-right" href="#" onClick="exibirPeopleGrid()"><?=lang('peopleGridAvancar')?></button>
                        </div>
                    <?
                    
                }else{
                    ?>  
                        <div class='span12'>
                            <p>
                                <?=lang('peopleGridUsuarioPraComecar')?>
                            </p>
                            <div class='row'>
                                <div class='span6'>
                                    <div style="margin-left: 35%;margin-top:35%">
                                        <button onClick="logarComFacebookId()" class="btn btn-primary btn-large"><?=lang('horizonteJaSouMembro')?></button>
                                    </div>
                                </div>
                                <div class="span6">
                                    <div id="fb-root"></div>
                                    <script src="//connect.facebook.net/en_US/all.js"></script>
                                    <p>
                                        <iframe src="https://www.facebook.com/plugins/registration?
                                                     client_id=<?=$this->config->item('app_fb_id')?>&
                                                     redirect_uri=http%3A%2F%2Fglaucomunsberg.com%2Fhorizonte0000%2Fenjoy%2FcadatroPessoa&
                                                     fields=name,birthday,gender,location,email,captcha"
                                                scrolling="auto"
                                                frameborder="no"
                                                style="border:none"
                                                allowTransparency="true"
                                                width="100%"
                                                height="395">
                                        </iframe>
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?
                }
            ?>
        </div>
    </section>
    <!-- Informações gerais do usuário -->
    <section id="questionGrid" style="display: none">
        <div class="row">
            <div class="span5">
                <h3><?=lang('peopleGridQuestao1')?></h3>
                <p>
                    <?=lang('peopleGridQuestao1Def')?>
                </p>
                <dl class="dl-horizontal">
                    <dt><?=lang('peopleGridModeladores')?></dt>
                        <dd>
                            <div class="control-group">
                                <label class="control radio">
                                    <input type="radio" name="radio" onClick="pincel(1)" checked>
                                    <span class="radio-label"> <?=lang('peopleGridPincel')?></span>
                                </label>
                                <label class="control radio" onClick="borracha(1)">
                                    <input type="radio" name="radio">
                                    <span class="radio-label"><?=lang('peopleGridBorracha')?></span>
                                </label>
                            </div>
                        </dd>
                        <dt><?=lang('peopleGridOutrasOpcoes')?></dt>
                        <dd>
                            <button class="btn btn-danger" href="#" onClick="limparGrid()"><?=lang('peopleGridLimparGrid')?></button>
                        </dd>
                </dl>
            </div>
            <div class="span7">
              <?=form_getGrid('peopleGridPai1','peopleGrid1',30,2,'black')?> 
            </div>
            <div class='span12'>
                <p>
                    <button class="btn btn-success pull-right" href="#" onClick="proxQuestao()"><?=lang('peopleGridProximaQuestao')?></button> 
                </p>
            </div>
        </div>
    </section>
    
    
</div>
<script>
       $questaoInicial = 1;
       /**
        * 
        * Limpa a grid,ou seja, remove qualquer cor
        *  que haja nela
        */
        function limparGrid(){
            $('#peopleGrid1 div').css('background-color','');
        }
        
        /**
         * Função de borracha, limpa um pixel
         *  qualquer; para isso torna o pincel
         *  transparente
         * @returns {undefined}
         */
        function borracha(){
            $('#peopleGrid1').css('cursor','url(<?=BASE_URL?>static/img/eraser.png)');
            $corAnteriorpeopleGrid1 = $corpeopleGrid1;
            $corpeopleGrid1 = '';      
        }
        
        /**
         * A função coloca o pincel com o ponteiro de pincel
         * e coloca a cor novamente no lugar
         * @returns {undefined}
         */
        function pincel(){
            $("#peopleGrid1").css('cursor','url(<?=BASE_URL?>static/img/pen.cur)');
            $corpeopleGrid1 = $corBasepeopleGrid1;
        }
        
        /**
         *  Começa as perguntas
         */
        function diretoComecoQuestao(){
            $('#information').hide();
            $('#usuarioLogin').show();
        }
        
        function exibirPeopleGrid(){
            $('#usuarioLogin').hide();
            $('#questionGrid').show();
        }
        /**
         * Pega a pergunta e leva 
         * @returns {undefined}
         */
        function trazerProximaQuestao(){
            var data={
             questaoId:$questaoInicial
            };
            $.ajax({
                    method: "get",
                    data:data,
                    url: BASE_URL+"/peopleGrid/getPerguntaJaguarrao/",
                    beforeSend: function(){
                        
                    },
                    complete: function(){
                        //$("#carregando").hide("slow");
                    },
                    error: function(){
                        
                    },
                    success: function(data){
                       // var resposta = JSON.parse(data);
                        alert(data);
                        //$questaoInicial++;
                    }
                });
        }
        
        function enviarResposta(){
        
        }
        FB.init({
            appId      : '<?=$this->config->item('app_fb_id')?>',                        // App ID from the app dashboard
            status : true, // check login status
            cookie : true, // enable cookies to allow the server to access the session
            xfbml  : true  // parse XFBML
        });
        function logarComFacebookId(){
            FB.api('/me', function(response) {
              location.href = '<?=BASE_URL?>peopleGrid/jaguarao/'+response.id;
            });
        }
</script>
<?$this->load->view('../../static/views/rodapeView')?>