<? $this->load->view('../../static/views/cabecalhoPublicoView') ?>
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
            <div class="span12">
                <br>
                <h3><?= lang('formPensouComo') ?></h3>
                <form class="form-horizontal well" novalidate="novalidate1">
                    <fieldset>
                        <div class="control-group">
                            <label class="radio-label"></label>
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
                    </fieldset>
                </form> 
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
                                <option><?=lang('formMasculino')?></option>
                                <option><?=lang('formFeminino')?></option>
                              </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input04"><?=lang('formDtNascimento')?></label>
                            <div class="controls">
                              <?=getCalendario('calendario')?>
                            </div>
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
                                    <input type="radio" name="rendaFamiliar" id="rendaFamiliar" value="<?=lang('formNivelEscolaridadeOpt1')?>"><?= lang('formRendaFamiliarOpt1') ?>
                                </label>
                                <label class="radio">
                                    <input type="radio" name="rendaFamiliar" id="rendaFamiliar" value="<?=lang('formNivelEscolaridadeOpt2')?>"><?= lang('formRendaFamiliarOpt2') ?>
                                </label>        
                                <label class="radio">
                                    <input type="radio" name="rendaFamiliar" id="rendaFamiliar" value="<?=lang('formNivelEscolaridadeOpt3')?>"><?= lang('formRendaFamiliarOpt3') ?>
                                </label>         
                                <label class="radio">
                                    <input type="radio" name="rendaFamiliar" id="rendaFamiliar" value="<?=lang('formNivelEscolaridadeOpt4')?>"><?= lang('formRendaFamiliarOpt4') ?>
                                </label> 
                            </div> 
                        </div>
                    </fieldset>    
                </form>
            </div>
        </div>
        <button type="submit" class="btn btn-sucess pull-right btn-large"  onClick="enviar()">Enviar</button>
    </section>   
</div>

<script>
    var contQuestao = 1;
    var cont = 0;
    var questoesGrid = new Array();
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
    function trataFinalizando(){
        var finalizando = Array();
        
        finalizando["pensouComo"] = document.getElementById("pensouComo").value;
        
        return finalizando;
    }
    /**
     * Função de tratamento das perguntas pessoais
     * insere os valores respondidos pelo usuario em um
     * vetor.
     * @return identifiquese --> vetor
     */
    function trataIdentifiquese(){
        var identifiquese = Array();  // vetor recolhe todas as informações pessoais
        
        identifiquese["nome"] = document.getElementById("txtNome").value;
        identifiquese["email"] = document.getElementById("txtEmail").value;
        identifiquese["genero"] = document.getElementById("genero").value;
        identifiquese["cidade"] = document.getElementById("txtCidade").value;
        identifiquese["nivelEscolaridade"] = document.getElementById("nivelEscolaridade").value;
        identifiquese["rendaFamiliar"] = document.getElementById("rendaFamiliar").value;
        identifiquese["calendario"] = $("#calendario").val();
        
        return identifiquese;
    }
    
   /**
     * Trás a proxima questão a ser repsondida
     * 
     */
    function trazerProximaQuestao(){   
        
        if (contQuestao == 22){
            questoesGrid[cont] = trataGrid();
            this.limparGrid();
            $("#questionGrid").hide();
            $("#formIdentifiquese").hide();
            $("#formPerguntas").show();
        }
        
        if (contQuestao < 22){
            questoesGrid[cont] = trataGrid();
            this.limparGrid();
            $("#questao_area").html(perguntas[contQuestao]['questaoSobre']);
            $("#questao_def").html(perguntas[contQuestao]['questao']);
        }
        
        if (contQuestao == 25) {
            $("#questionGrid").hide();
            $("#formPerguntas").hide();
            $("#formIdentifiquese").show()
        }  
        contQuestao++;
        cont++;
    }
    
    
    function enviar(){

        $.post( '<?=BASE_URL?>peopleGrid/salvar',
        {
            respostasGrid: questoesGrid, 
            finalizando: trataFinalizando(),
            identifiquese: trataIdentifiquese()
        },
        function(data){
            if (data.sucesso){   
                $("#sucesso").html();
            }
            if (data.falha){
                $("#falha").html();
            }
            
        });
    }
</script>
<?
$this->load->view('../../static/views/rodapeView')?>