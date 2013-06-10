<?$this->load->view('../../static/views/cabecalhoPublicoView')?>

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
    <!-- Informações gerais do usuário -->
    <section id="questionGrid" style="margin-top: 40px">
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
                <hr>
                <button class="btn btn-success pull-right" href="#" onClick="trazerProximaQuestao()"><?=lang('peopleGridProximaQuestao')?></button>
                
            </div>
            <div class="span7">
              <?=form_getGrid('peopleGridPai1','peopleGrid1',34,2,'black')?> 
            </div>
            <div class="span12">
                
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
                    method: "post",
                    data:data,
                    url: BASE_URL+"peopleGrid/getPerguntaJaguarao/",
                    beforeSend: function(){
                        
                    },
                    complete: function(){
                        //$("#carregando").hide("slow");
                    },
                    error: function(){
                        
                    },
                    success: function(resultado){
                       // var resposta = JSON.parse(data);
                        console.log(resultado);
                        $questaoInicial++;
                    }
                });
        }
        
        function enviarResposta(){
        
        }
        
</script>
<?$this->load->view('../../static/views/rodapeView')?>