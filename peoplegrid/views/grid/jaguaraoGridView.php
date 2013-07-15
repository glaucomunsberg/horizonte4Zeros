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
    <section id="perguntasGrid" style="margin-top: 40px">
        <div class="row">
            <div class="span5">
                <br>
                <h3><div id="questao_area"></div></h3>
                <div id="questao_def" style="min-height: 60px"></div>
                <br>
                <div id="row">
                    <button id="btnAnterior" class="btn btn-danger pull-left" onClick="anteriorQuestao()"><?= lang('peopleGridQuestaoAnterior') ?></button>
                    <button class="btn btn-success pull-right" href="#" onClick="proximaQuestao()"><?= lang('peopleGridProximaQuestao') ?></button>
                </div>
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
                        <button class="btn btn-primary" href="#" onClick="limparGrid()"><?= lang('peopleGridLimparGrid') ?></button>
                        <button id="solo" class="btn btn-primary" href="#" onClick="mudarSolo()"><?= lang('peopleGridSatelite') ?></button>
                    </dd>
                </dl>
            </div>
            <div class="span7">
                <?= form_getGrid('peopleGridPai1', 'peopleGrid1', 34, 2, 'black') ?> 
            </div>
        </div>
    </section>
    <section id="perguntasObjetivas" style="margin-top: 40px; display:none"> 
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
        </div>
        <hr>
        <button class="btn btn-danger pull-left" onClick="anteriorQuestao()"><?= lang('peopleGridQuestaoAnterior') ?></button>
        <button class="btn btn-success pull-right" onClick="proximaQuestao()"><?= lang('peopleGridProximaQuestao') ?></button>
    </section>
    <section id="perguntasIdentifiqueSe" style="margin-top: 40px; display:none">      
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
        <button class="btn btn-danger pull-left" onClick="anteriorQuestao()"><?= lang('peopleGridQuestaoAnterior') ?></button>
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
                    <h1><img src="<?=BASE_URL?>static/img/fail.png">
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
    var questaoCorrente = 1;
    var questoesGrid = new Array();
    var questoesIdentifiqueSe = new Array();
    var questoesObjetivas = new Array();
    var perguntas = <?php echo json_encode($perguntas); ?>;
    
    /**
     * Função init já carrega a primeira pergunta
     *
     */       
    function init(){  
        $('#peopleGrid1').css('background-image',"url('"+IMG+"/solo_terreno.jpg')");
        
        $('#btnAnterior').hide();

        $("#perguntasGrid").hide();
        $("#perguntasObjetivas").hide();
        $("#perguntasGrid").show();
        
        $("#questao_area").html(perguntas[questaoCorrente-1]['questaoSobre']); 
        $("#questao_def").html(perguntas[questaoCorrente-1]['questao']);
        var grid;
        for(var b = 0; b < 1155; b++ ){
            grid += '0';
        }
        for(var a = 0; a < 21; a++){    
            questoesGrid[a] = grid;
        }
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
     * Modifica a imagem do solo da grid
     */
    var soloTerreno = true;
    function mudarSolo(){
        if(soloTerreno){
            soloTerreno = false;
            $('#solo').text('<?= lang('peopleGridTerreno') ?>');
            $('#peopleGrid1').css('background-image',"url('"+IMG+"/solo_satelite.jpg')");
            
        }else{
            soloTerreno = true;
            $('#solo').text('<?= lang('peopleGridSatelite') ?>');
            $('#peopleGrid1').css('background-image',"url('"+IMG+"/solo_terreno.jpg')");
            
        }
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
     * Este método salva os valores nos respectivos arrays
     *  para serem enviados para o servidor
     */
    function salvarDados(){
        if(questaoCorrente < 22){
            questoesGrid[questaoCorrente-1] = trataGrid();
        }
        
        if(questaoCorrente == 22){
            trataPerguntasObjetivas();
        }
        if(questaoCorrente == 23){
            trataIdentifiqueSe();
        }
    }
  
    function proximaQuestao(){
        salvarDados();
        questaoCorrente++;
        manipulaFormulario();
    }
  
    function anteriorQuestao(){
        salvarDados();
        questaoCorrente--;
        manipulaFormulario();
    }
  
    function manipulaFormulario() {
        
        if (questaoCorrente == 1){
            $('#btnAnterior').hide();
        } else{
            $('#btnAnterior').show();
        }
        
        if (questaoCorrente < 22){
            $("#perguntasIdentifiqueSe").hide();
            $("#perguntasObjetivas").hide();
            $("#perguntasGrid").show();
            $("#questao_area").html(perguntas[questaoCorrente-1]['questaoSobre']);
            $("#questao_def").html(perguntas[questaoCorrente-1]['questao']);    
            limparGrid();
            preencheGrid();
        }
        
        if (questaoCorrente == 22){
            
            $("#perguntasGrid").hide();
            $("#perguntasIdentifiqueSe").hide();
            $("#perguntasObjetivas").show();
            
        }
        
        if (questaoCorrente == 23) {
            $("#perguntasGrid").hide();
            $("#perguntasObjetivas").hide();
            $("#perguntasIdentifiqueSe").show();
            
        }
        
        
    } 
  
    /**
     * Função de tratamento das perguntas finais
     * nesta função o formulario finalizando é tratado
     * @return finalizando --> vetor com perguntas
     */
    
    function trataPerguntasObjetivas(){     
        questoesObjetivas[0] = $('input[name=pensouComo]:checked').val();
        questoesObjetivas[1] = document.getElementById("txtProblemasCidadeAtual").value;
        questoesObjetivas[2] = document.getElementById("txtPrioridadesFuturo").value;
    }
    
    /**
     * Função de tratamento das perguntas pessoais
     * insere os valores respondidos pelo usuario em um
     * vetor.
     * @return identifiquese --> vetor
     */
      // vetor recolhe todas as informações pessoais
    function trataIdentifiqueSe(){
               
        questoesIdentifiqueSe[0] = document.getElementById("txtNome").value;
        questoesIdentifiqueSe[1] = document.getElementById("txtEmail").value;
        questoesIdentifiqueSe[2] = document.getElementById("genero").value;
        questoesIdentifiqueSe[3] = document.getElementById("txtCidade").value;
        questoesIdentifiqueSe[4] = $('input[name=nivelEscolaridade]:checked').val();
        questoesIdentifiqueSe[5] = $('input[name=rendaFamiliar]:checked').val();
        questoesIdentifiqueSe[6] = $("#data").val();
       
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
  
    function preencheGrid(){
       
        for(var i = 0; i < 1155; i++){
            aux = questoesGrid[questaoCorrente-1].charAt(i);
            
            if (aux == '1'){
                $("#"+i).css('background-color','rgb(0, 0, 0)');
                
            } else {
                $("#"+i).css('background-color','rgb(0, 0, 0, 0)');
            }
            
            aux = '';
        }
        
    }
    
   function enviar(){
        $.post( '<?=BASE_URL?>peopleGrid/salvar',
        {  
            perguntasObjetivas: questoesObjetivas,
            respostasGrid: questoesGrid,
            identifiquese: questoesIdentifiqueSe //questoesIdentifiqueSe
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
                $("#sucesso").show();
            }
            if (data == "falha"){
                $("#falha").show();
            }
        });
    }
  
</script>
<?
$this->load->view('../../static/views/rodapeView')?>