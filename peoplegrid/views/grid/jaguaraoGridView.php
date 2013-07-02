<? $this->load->view('../../static/views/cabecalhoPublicoView') ?>

<link rel="stylesheet" href="<?=CSS?>/bootstrap-datetimepicker.min.css">
<script type="text/javascript" src="<?=JS?>/bootstrap-datetimepicker.min.js"></script>

<div class="container">
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" style="margin-top: 3px; font-size: 25px" href="<?=BASE_URL?>"><?=lang('peopleGridHome')?></a>
                <div class="nav-collapse">
                    <ul class="nav">
                        <li class="active"><a href="<?=BASE_URL.'peopleGrid/'?>"><?=lang('peopleGridPeopleGrid')?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Informações gerais do usuário -->
    <section id="questionGrid" style="margin-top: 40px">
        <div class="row">
            <div class="span5">
                <br>
                <h3><div id="questao_area"></div></h3>
                <div id="questao_def" style="min-height: 60px"></div>
                <br>
                <div id="row"><button class="btn btn-success pull-right" href="#" onClick="trazerProximaQuestao()"><?= lang('peopleGridProximaQuestao') ?></button></div>
                <br>
                <br>
                <hr>
                <dl class="dl-horizontal">
                    <dt><?= lang('peopleGridModeladores') ?></dt>
                    <br>
                    <dd>
                        <div class="control-group">
                            <label class="control radio">
                                <input type="radio" name="radio" onClick="pincel(1)" checked>
                                <span class="radio-label"> <?= lang('peopleGridPincel') ?></span>
                            </label>
                            <label class="control radio" onClick="borracha(1)">
                                <input type="radio" name="radio">
                                <span class="radio-label"><?= lang('peopleGridBorracha') ?></span>
                            </label>
                        </div>
                    </dd>
                    <dd>
                        <button class="btn btn-danger" href="#" onClick="limparGrid()"><?= lang('peopleGridLimparGrid') ?></button>
                    </dd>
                </dl>
            </div>
            <div class="span7">
                <?= form_getGrid('peopleGridPai1', 'peopleGrid1', 34, 2, 'black') ?> 
            </div>
        </div>
    </section>
    <section id="formPerguntas" style="margin-top: 40px; display:none"> 
        <br>
        <br>
        <div class="row">
            <h3>Perguntas Objetivas</h3>
            
            <div class='span6'>
                <form class="form-horizontal well" novalidate="novalidate1">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="input007"><?=lang('peopleGridQuestao22Def')?></label>
                            <div class="controls">
                              <textarea type="text" class="input-xlarge"  rows="5" id="txtProblemasCidadeAtual" placeholder="Digite o que você pensa sobre isso"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input008"><?=lang('peopleGridQuestao23Def')?></label>
                            <div class="controls">
                              <textarea type="text" class="input-xlarge"  rows="5" id="txtPrioridadesFuturo" placeholder="Digite o que você pensa sobre isso"></textarea>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            
            <div class="span6">
                <form class="form-horizontal well" novalidate="novalidate1">
                    <fieldset>
                        <div class="control-group">
                            <label class="radio-label"><?= lang('formPensouComo') ?></label>
                            <div class="controls">
                                <label class="radio">
                                    <input type="radio" name="pensouComo" id="pensouComo" value="<?= lang('formPensouComoOpt1')?>"><?= lang('formPensouComoOpt1')?>
                                </label>
                                <label class="radio">
                                    <input type="radio" name="pensouComo" id="pensouComo" value="<?= lang('formPensouComoOpt2')?>"><?= lang('formPensouComoOpt2')?>
                                </label>        
                                <label class="radio">
                                    <input type="radio" name="pensouComo" id="pensouComo" value="<?= lang('formPensouComoOpt3')?>"><?= lang('formPensouComoOpt3')?>
                                </label>         
                                <label class="radio">
                                    <input type="radio" name="pensouComo" id="pensouComo" value="<?= lang('formPensouComoOpt4')?>"><?= lang('formPensouComoOpt4')?>
                                </label>  
                                <label class="radio">
                                    <input type="radio" name="pensouComo" id="pensouComo" value="<?= lang('formPensouComoOpt5')?>"><?= lang('formPensouComoOpt5')?>
                                </label>
                                <label class="radio">
                                    <input type="radio" name="pensouComo" id="pensouComo" value="<?= lang('formPensouComoOpt6')?>"><?= lang('formPensouComoOpt6')?>
                                </label>
                            </div>
                        </div>
                </form> 
              </fieldset>
            </div>

            <button class="btn btn-success pull-right" onClick="trazerProximaQuestao()">Próxima Questão</button>
        </div>
    </section>
    <section id="formIdentifiquese" style="margin-top: 40px; display:none">      
        <div class="row">
            <br>
            <h3><?= lang('formIdentifiquese') ?></h3>
            <div class="span6">
                <form class="form-horizontal well" novalidate="novalidate">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="input01"><?=lang('formNome')?></label>
                            <div class="controls">
                              <input type="text" class="span3" id="txtNome" placeholder="Digite seu nome">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input02"><?=lang('formEmail')?></label>
                            <div class="controls">
                              <input type="text" class="span3" id="txtEmail" placeholder="Digite sua cidade">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="select03"><?=lang('formGenero')?></label>
                            <div class="controls">
                              <select id="genero" class="valid">
                                <option></option>  
                                <option><?=lang('formMasculino')?></option>
                                <option><?=lang('formFeminino')?></option>
                              </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input04"><?=lang('formDtNascimento')?></label>
                            <div class="controls">
                                <div id="datetimepicker1" class="input-append date">
                                      <input data-format="dd/MM/yyyy" type="text" id="data"></input>
                                      <span class="add-on">
                                        <img width='15px' height='15px' style="margin-top:5px" src="<?=IMG.'/calendar.png'?>"/>
                                      </span>
                                    </div>
                            </div>
                              <script type="text/javascript">
                                $(function() {
                                  $('#datetimepicker1').datetimepicker({
                                    language: 'pt-BR'
                                  });
                                });
                              </script>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input05"><?=lang('formCidade')?></label>
                            <div class="controls">
                              <input type="text" class="span3" id="txtCidade" placeholder="Digite sua cidade">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class='span6'>
                <form class="form-horizontal well" novalidate="novalidate1">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label"><?=lang('formNivelEscolaridade')?></label>
                            <div class='controls'>
                                <label class="radio">
                                    <input type="radio" name="nivelEscolaridade" id="nivelEscolaridade" value="<?=lang('formNivelEscolaridadeOpt1')?>"><?=lang('formNivelEscolaridadeOpt1') ?>
                                </label>
                                <label class="radio">
                                    <input type="radio" name="nivelEscolaridade" id="nivelEscolaridade" value="<?=lang('formNivelEscolaridadeOpt2')?>"><?=lang('formNivelEscolaridadeOpt2') ?>
                                </label>        
                                <label class="radio">
                                    <input type="radio" name="nivelEscolaridade" id="nivelEscolaridade" value="<?=lang('formNivelEscolaridadeOpt3')?>"><?=lang('formNivelEscolaridadeOpt3') ?>
                                </label>         
                                <label class="radio">
                                    <input type="radio" name="nivelEscolaridade" id="nivelEscolaridade" value="<?=lang('formNivelEscolaridadeOpt4')?>"><?=lang('formNivelEscolaridadeOpt4') ?>
                                </label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"><?= lang('formRendaFamiliar') ?></label>
                            <div class='controls'>
                                <label class="radio">
                                    <input type="radio" name="rendaFamiliar" id="rendaFamiliar" value="<?=lang('formRendaFamiliarOpt1')?>"><?= lang('formRendaFamiliarOpt1') ?>
                                </label>
                                <label class="radio">
                                    <input type="radio" name="rendaFamiliar" id="rendaFamiliar" value="<?=lang('formRendaFamiliarOpt2')?>"><?= lang('formRendaFamiliarOpt2') ?>
                                </label>        
                                <label class="radio">
                                    <input type="radio" name="rendaFamiliar" id="rendaFamiliar" value="<?=lang('formRendaFamiliarOpt3')?>"><?= lang('formRendaFamiliarOpt3') ?>
                                </label>         
                                <label class="radio">
                                    <input type="radio" name="rendaFamiliar" id="rendaFamiliar" value="<?=lang('formRendaFamiliarOpt4')?>"><?= lang('formRendaFamiliarOpt4') ?>
                                </label>

                            </div> 
                        </div>
                    </fieldset>    
                </form>
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-success pull-right btn-large" onClick="enviar();">Enviar</button>
    </section>
    <section id='sucesso' style="margin-top: 40px; display:none">
        <div class='row'>
            <div class='span12'>
                <div class='hero-unit' style="background-color:#DDEDAB">
                    <h1><img src="<?=BASE_URL?>static/img/success.png">
                    <?=lang('administrarSalvo')?></h1>
                    <p><?=lang('administrarSalvoMensagem')?></p>
                    <p><a href="<?=BASE_URL?>site/site_desenv/#news" class="btn btn-primary pull-right btn-large" >Voltar ao Início</a></p>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <section id='falha' style="margin-top: 40px; display:none">
        <div class='row'>
            <div class='span12'>
                <div class='hero-unit' style="background-color:#FCC0C0">
                    <h1><img src="<?=BASE_URL?>static/img/fail2.png">
                    <?=lang('administrarFalha')?></h1>
                    <p><?=lang('administrarFalhaMensagem')?></p>
                    <p><a href="<?=BASE_URL?>/peopleGrid" class="btn btn-primary pull-right btn-large" >Voltar ao Início</a></p>
                    <br>
                </div>
            </div>
        </div>
    </section>
    
</div>

<script>
    var cont = 0;
    var contQuestao = 1;
    var questoesGrid = new Array();
    //var questoesObjetivas = new Array();
    //var questoesIdentifiquese = new Array();
    var perguntas = <?php echo json_encode($perguntas); ?>;
    
    /**
     * Função init já carrega a primeira pergunta
     *
     */       
    function init(){
        $("#questionGrid").show();
        $("#formPerguntas").hide();
        $("#formIdentifiquese").hide();
        $("#questao_area").html(perguntas[cont]['questaoSobre']); 
        $("#questao_def").html(perguntas[cont]['questao']);
    }
       
    this.init();
    
// FERRAMENTAS DA GRID
//=======================================================================================    
    /**
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
        $('#peopleGrid1').css('cursor','url(<?= BASE_URL ?>static/img/eraser.png)');
        $corAnteriorpeopleGrid1 = $corpeopleGrid1;
        $corpeopleGrid1 = '';      
    }
        
    /**
     * A função coloca o pincel com o ponteiro de pincel
     * e coloca a cor novamente no lugar
     * @returns {undefined}
     */
    function pincel(){
        $("#peopleGrid1").css('cursor','url(<?= BASE_URL ?>static/img/pen.cur)');
        $corpeopleGrid1 = $corBasepeopleGrid1;
    }
    
//=======================================================================================    
    
        
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
      * Função de tratamento da grid.
      * Nesta função é feito o tratamento dos dados
      * que o usuario respondeu na grid, transforma
      * a cor que ele trocou como 0 ou 1
      * @return grid --> string com as combinação respondida
      */ 
    function trataGrid(){
        var grid = '';
        $('#peopleGrid1 div').each(function(){ 
            if (($(this).css('background-color')) == "rgba(0, 0, 0, 0)"){
                grid += '0';
            } else {
                grid += '1';  
            }  
         });
        return grid;
    }
    
    /**
     * Função de tratamento das perguntas finais
     * nesta função o formulario finalizando é tratado
     * @return finalizando --> vetor com perguntas
     */
    
    function trataPerguntasObjetivas(){    
        var questoesObjetivas = new Array();
        
        questoesObjetivas[0] = $('input[name=pensouComo]:checked').val()
        questoesObjetivas[1] = document.getElementById("txtProblemasCidadeAtual").value;
        questoesObjetivas[2] = document.getElementById("txtPrioridadesFuturo").value;
        
        return questoesObjetivas;
    }
    /**
     * Função de tratamento das perguntas pessoais
     * insere os valores respondidos pelo usuario em um
     * vetor.
     * @return identifiquese --> vetor
     */
      // vetor recolhe todas as informações pessoais
    function trataIdentifiquese(){
        var questoesIdentifiquese = new Array();       
        
        questoesIdentifiquese[0] = document.getElementById("txtNome").value;
        questoesIdentifiquese[1] = document.getElementById("txtEmail").value;
        questoesIdentifiquese[2] = document.getElementById("genero").value;
        questoesIdentifiquese[3] = document.getElementById("txtCidade").value;
        questoesIdentifiquese[4] = $('input[name=nivelEscolaridade]:checked').val()
        questoesIdentifiquese[5] = $('input[name=rendaFamiliar]:checked').val()
        questoesIdentifiquese[6] = $("#data").val();
        
        return questoesIdentifiquese;
    }
    
   /**
     * Trás a proxima questão a ser repsondida
     * 
     */
    function trazerProximaQuestao(){   
        
        if (contQuestao < 22){
            questoesGrid[cont] = trataGrid();
            this.limparGrid();
            $("#questao_area").html(perguntas[contQuestao]['questaoSobre']);
            $("#questao_def").html(perguntas[contQuestao]['questao']);
        }
        
        if (contQuestao == 22){
            questoesGrid[cont] = trataGrid();
            this.limparGrid();
            $("#questionGrid").hide();
            $("#formIdentifiquese").hide();
            $("#formPerguntas").show();
        }
        
        if (contQuestao == 23) {
            $("#questionGrid").hide();
            $("#formPerguntas").hide();
            $("#formIdentifiquese").show();
        }  
        contQuestao++;
        cont++;
    }
    
    
    function enviar(){
        
        
        
        $.post( '<?=BASE_URL?>peopleGrid/salvar',
        {  
            perguntasObjetivas: trataPerguntasObjetivas(),
            respostasGrid: questoesGrid,
            identifiquese: trataIdentifiquese() //questoesIdentifiquese
        },
        function(data){
            
            console.log(data.substring(0, 3));
            
            if (data.substring(0, 3) == 'l"s'){
                data = "sucesso";
            }
            
            if (data.substring(0, 3) == 'l"f'){
                data = "falha";
            }
            
            if (data == "sucesso"){   
                $("#formIdentifiquese").hide();
                $("#falha").show();
            }
            if (data == "falha"){
                $("#falha").show();
            }
        });
    }
</script>
<?
$this->load->view('../../static/views/rodapeView')?>