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
                <a class="brand" href="<?=BASE_URL.'/peopleGrid/'?>">PeopleGrid</a>
                <div class="nav-collapse">
                    <ul class="nav">
                        <li class="active"><a href="#home">Home</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div>
        </div><!-- /navbar-inner -->
    </div>
    
    <section id="home">
        <div class="row" style="margin-top: 10px">
            <div class="span12">
                <div class="page-header">
                    <h1><?=lang('peopleGridPeopleGrid')?> <small><?=lang('peopleGridMundoDiferente')?></small></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Apresentação-->
    <section id="information">
        <div class="row" >
            <div class="span4">
                <a  class="thumbnail">
                    <img src="<?=BASE_URL?>static/img/jaguaraoEmGrid.png" alt="" style="width: 200px; height: auto">
                </a>
            </div>
            <div class="span8">
                <div class="hero-unit">
                    <p>
                        <?=lang('peopleGridIntroducao')?>
                    </p>
                    <p>
                        <a id="comecar" class="btn btn-success btn-large"><?= lang('peopleGridVamosComecar') ?></a>
                    </p>
                    
                </div>
                <p>
                    <span class="label label-info"><?=lang('peopleGridLembreSe') ?></span> <?=lang('peopleGridLembreSeInfo') ?>
                </p>
            </div>
        </div>
    </section>
    <!-- Usuário-->
    <section id="usuarioLogin" style="display: none">
        <div class="row">
            <?
                if(@$userOn != ''){
                    ?>
                        <div class="span12">
                            <p>
                                <div style="float:left; margin:2px; width:60px; height: 60px;background-repeat: no-repeat;background-size: auto;background-image: url('http://graph.facebook.com/<?=@$userOn->fb_id?>/picture')"></div>
                                <h2>
                                    <?=@$userOn->nome?><small><?=lang('peopleGridBomTever')?></small>
                                </h2>  
                            </p>
                                <?=lang('peopleGridAntesDe')?>
                            <p>

                            </p>
                        </div>
                        <div class="span12">
                            <button class="btn btn-success pull-right" href="#" onClick="proxQuestao(1)"><?=lang('peopleGridAvancar')?></button>
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
                                                     redirect_uri=http%3A%2F%2Fglaucomunsberg.com%2Fhorizonte0000%2FpeopleGrid%2FcadatroPessoa&
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
    <!-- Questão 1-->
    <section id="question1" style="display: none">
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
                            <button class="btn btn-danger" href="#" onClick="cleanGrid(1)"><?=lang('peopleGridLimparGrid')?></button>
                        </dd>
                </dl>
            </div>
            <div class="span7">
              <?=form_getGrid('peopleGridPai1','peopleGrid1',30,2,'black')?> 
            </div>
            <div class='span12'>
                <p>
                    <button class="btn btn-success pull-right" href="#" onClick="proxQuestao(2)"><?=lang('peopleGridProximaQuestao')?></button> 
                </p>
            </div>
        </div>
    </section>
    <!-- Questão 2-->
    <section id="question2" style="display: none">
        <div class="row">
            <div class="span5">
                <h3><?=lang('peopleGridQuestao2')?></h3>
                <p>
                    <?=lang('peopleGridQuestao2Def')?>
                </p>
                <dl class="dl-horizontal">
                    <dt><?=lang('peopleGridModeladores')?></dt>
                        <dd>
                            <div class="control-group">
                                <label class="control radio">
                                    <input type="radio" name="radio" onClick="pincel(2)" checked>
                                    <span class="radio-label"> <?=lang('peopleGridPincel')?></span>
                                </label>
                                <label class="control radio" onClick="borracha(2)">
                                    <input type="radio" name="radio">
                                    <span class="radio-label"><?=lang('peopleGridBorracha')?></span>
                                </label>
                            </div>
                        </dd>
                        <dt><?=lang('peopleGridOutrasOpcoes')?></dt>
                        <dd>
                            <button class="btn btn-danger" href="#" onClick="cleanGrid(2)"><?=lang('peopleGridLimparGrid')?></button>
                        </dd>
                </dl>
            </div>
            <div class="span7">
              <?=form_getGrid('peopleGridPai2','peopleGrid2',30,2,'green')?> 
            </div>
            <div class='span12'>
                <p>
                    <button class="btn btn-success pull-right" href="#" onClick="proxQuestao(3)"><?=lang('peopleGridProximaQuestao')?></button> 
                </p>
            </div>
        </div>
    </section>
    <!-- Questão 3-->
    <section id="question3" style="display: none">
        <div class="row">
            <div class="span5">
                <h3><?=lang('peopleGridQuestao3')?></h3>
                <p>
                    <?=lang('peopleGridQuestao3Def')?>
                </p>
                <dl class="dl-horizontal">
                    <dt><?=lang('peopleGridModeladores')?></dt>
                        <dd>
                            <div class="control-group">
                                <label class="control radio">
                                    <input type="radio" name="radio" onClick="pincel(3)" checked>
                                    <span class="radio-label"> <?=lang('peopleGridPincel')?></span>
                                </label>
                                <label class="control radio" onClick="borracha(3)">
                                    <input type="radio" name="radio">
                                    <span class="radio-label"><?=lang('peopleGridBorracha')?></span>
                                </label>
                            </div>
                        </dd>
                        <dt><?=lang('peopleGridOutrasOpcoes')?></dt>
                        <dd>
                            <button class="btn btn-danger" href="#" onClick="cleanGrid(3)"><?=lang('peopleGridLimparGrid')?></button>
                        </dd>
                </dl>
            </div>
            <div class="span7">
              <?=form_getGrid('peopleGridPai3','peopleGrid3',30,2,'red')?> 
            </div>
            <div class='span12'>
                <p>
                    <button class="btn btn-success pull-right" href="#" onClick="proxQuestao(4)"><?=lang('peopleGridProximaQuestao')?></button> 
                </p>
            </div>
        </div>
    </section>
    <!-- Questão 4-->
    <section id="question4" style="display: none">
        <div class="row">
            <div class="span5">
                <h3><?=lang('peopleGridQuestao4')?></h3>
                <p>
                    <?=lang('peopleGridQuestao4Def')?>
                </p>
                <dl class="dl-horizontal">
                    <dt><?=lang('peopleGridModeladores')?></dt>
                        <dd>
                            <div class="control-group">
                                <label class="control radio">
                                    <input type="radio" name="radio" onClick="pincel(4)" checked>
                                    <span class="radio-label"> <?=lang('peopleGridPincel')?></span>
                                </label>
                                <label class="control radio" onClick="borracha(4)">
                                    <input type="radio" name="radio">
                                    <span class="radio-label"><?=lang('peopleGridBorracha')?></span>
                                </label>
                            </div>
                        </dd>
                        <dt><?=lang('peopleGridOutrasOpcoes')?></dt>
                        <dd>
                            <button class="btn btn-danger" href="#" onClick="cleanGrid(4)"><?=lang('peopleGridLimparGrid')?></button>
                        </dd>
                </dl>
            </div>
            <div class="span7">
              <?=form_getGrid('peopleGridPai4','peopleGrid4',30,2, 'black')?> 
            </div>
            <div class='span12'>
                <p>
                    <button class="btn btn-success pull-right" href="#" onClick="proxQuestao(5)"><?=lang('peopleGridProximaQuestao')?></button> 
                </p>
            </div>
        </div>
    </section>
   <script>  
        

        function cleanGrid($questao){
            switch($questao){
                case 1:
                      $('#peopleGrid1 div').css('background-color','');
                      break;
                default:
                        console.log('nenhuma grid para limpar');
            }
            
        }
        function borracha($questao){
            switch($questao){
                case 1:
                    $('#peopleGrid1').css('cursor','url(<?=BASE_URL?>static/img/eraser.png)');
                    $corAnterior = $cor;
                    $cor = '';
                    break;
                default:
                        console.log('nenhuma borracha');
            }
            
        }
        function pincel($questao){
            switch($questao){
                case 1:
                    $("#peopleGrid1").css('cursor','url(<?=BASE_URL?>static/img/pen.cur)');
                    $cor = $corBase;
                    break;
                default:
                    console.log('nenhuma pincel');
            }
            
        }
        
        /**
         *  Manipulação e criações
         */
        function diretoComecoQuestao(){
            $('#information').hide();
            $('#usuarioLogin').show();
        }
        $("#comecar").click(function(){
            $('#information').hide();
            $('#usuarioLogin').show();
        });
        
        function proxQuestao($questao){
            switch($questao){
                case 1:
                    $('#usuarioLogin').hide();
                    $('#question1').show();
                    break;
                case 2:
                    $('#question1').hide();
                    $('#question2').show();
                    break;
                case 3:
                    $('#question2').hide();
                    $('#question3').show();
                    break;
            }
             
             
        }
        
        /**
         * Auxiliares
         */
        FB.init({
                appId      : '<?=$this->config->item('app_fb_id')?>',                        // App ID from the app dashboard
                status : true, // check login status
                cookie : true, // enable cookies to allow the server to access the session
                xfbml  : true  // parse XFBML
            });
        function logarComFacebookId(){
            FB.api('/me', function(response) {
              location.href = '<?=BASE_URL?>peopleGrid/index/'+response.id;
            });
        }
        <?if(@$userOn != ''){
            echo 'diretoComecoQuestao()';
        }?>
    </script>
<?$this->load->view('../../static/views/rodapeView')?>