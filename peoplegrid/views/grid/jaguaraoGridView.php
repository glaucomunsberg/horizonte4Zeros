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
                <a class="brand" style="margin-top: 3px; font-size: 25px" href="<?= BASE_URL . '/peopleGrid/' ?>"><?= lang('peopleGridPeopleGrid') ?></a>
                <div class="nav-collapse">
                    <ul class="nav">
                        <li class="active"><a href="#home"><?= lang('peopleGridHome') ?></a></li>
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
            <div class="span12">

            </div>
        </div>
    </section>

      <section id="formPerguntas" style="margin-top: 40px; display:none"> 
        <br>
        <br>
        <div class="row">
                    <h3>finalizando...</h3>
                    <hr>
                    <div class="span12">  
                        <div class="control-group">
                            <b><?= lang('formJaParticipouAtividadeParecida') ?></b>
                            <br>
                            <div class="control-group">
                                <label class="radio inline">
                                    <ul><ul><ul>
                                    <input type="radio" name="atividadeParecida" id="atividadeParecida" value="<?= lang('sim')?>">
                                    <?= lang('sim') ?>
                                    </ul></ul></ul>
                                </label>
                                    
                                <label class="radio inline">
                                    <ul><ul><ul>
                                    <input type="radio" name="atividadeParecida" id="atividadeParecida" value="<?= lang('nao')?>">
                                    <?= lang('nao') ?>
                                    </ul></ul></ul>
                                </label>
                                
                                <label class="control-group">
                                    <input type="radio" name="genero" id="genero" hidden="true" value="null" checked>
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="control-group">          
                            <b><?= lang('formPensouComo') ?></b>
                            <br>
                            <div class="control-group">
                                <label class="control-label">    
                                    <ul>
                                        <input type="radio" name="pensouComo" id="pensouComo" value="<?= lang('formPensouComoOpt1')?>">
                                        <?= lang('formPensouComoOpt1') ?>
                                    </ul>
                                </label>
                                
                                <label class="control-label"> 
                                    <ul>
                                        <input type="radio" name="pensouComo" id="pensouComo" value="<?= lang('formPensouComoOpt2')?>">
                                        <?= lang('formPensouComoOpt2') ?>
                                    </ul>    
                                </label>
                        
                                <label class="control-label"> 
                                    <ul>
                                        <input type="radio" name="pensouComo" id="pensouComo" value="<?= lang('formPensouComoOpt3')?>">
                                        <?= lang('formPensouComoOpt3') ?>
                                    </ul>
                                </label>
                            
                                <label class="control-label"> 
                                    <ul>
                                        <input type="radio" name="pensouComo" id="pensouComo" value="<?= lang('formPensouComoOpt4')?>">
                                        <?= lang('formPensouComoOpt4') ?>
                                    </ul>
                                </label>
                            
                                <label class="control-label"> 
                                    <ul>
                                        <input type="radio" name="pensouComo" id="pensouComo" value="<?= lang('formPensouComoOpt5')?>">
                                        <?= lang('formPensouComoOpt5') ?>
                                    </ul>
                                </label>
                                
                                <label class="control-group">
                                    <input type="radio" name="pensouComo" id="genero" hidden="true" value="null" checked>
                                </label>
                                
                            </div>
                        </div>
                    </div>
                <button class="btn btn-success pull-right" onClick="trazerProximaQuestao()">Próxima Questão</button>
        </div>
    </section>
    
    <section id="formIdentifiquese" style="margin-top: 40px; display:none">      
        <br>
        <br>
        <div class="row">
                    <h3><?= lang('formIdentifiquese') ?></h3>
                    <hr>
                    <div class="span12">    
                        <div class="control-group">
                            <ul>
                                <?= lang('formNome') ?>
                            </ul>
                        </div>
                        <div class="control-group">
                            <ul>
                                <input type="text" class="span3" id="txtNome" placeholder="Digite seu nome">
                            </ul>    
                        </div>

                        <br>

                        <div class="control-group">
                            <ul>
                                <?= lang('formEmail') ?>
                            </ul>
                        </div>    

                        <div class="control-group">
                            <ul>
                                <input type="text" class="span3" id="txtEmail" placeholder="Digite sua cidade">
                            </ul>
                        </div>

                        <br>

                        <div class="control-group">
                            <ul>
                                <?= lang('formGenero') ?>
                            </ul>
                        </div>    
                        <div class="control-group">
                            <label class="control-group">
                                <ul>
                                    <input type="radio" name="genero" id="genero" value="<?=lang('formMasculino')?>">
                                    <?= lang('formMasculino') ?>
                                </ul>
                            </label>
                            <label class="control-group">
                                <ul>
                                    <input type="radio" name="genero" id="genero"  value="<?=lang('formFeminino')?>" >
                                    <?= lang('formFeminino') ?>
                                </ul>
                            </label>
                            <label class="control-group">
                                    <input type="radio" name="genero" id="genero" hidden="true" value="null" checked>
                            </label>
                        </div>

                        <br>

                        <div class="control-group">
                            <ul>
                                <?=lang('formDtNascimento') ?> 
                                <?=getCalendario('calendario')?>
                            </ul>
                        </div>

                        <br>

                        <div class="control-group">
                            <ul>
                                <?= lang('formCidade') ?>
                                <input type="text" class="span3" id="txtCidade" placeholder="Digite sua cidade">
                            </ul>
                        </div>

                        <br>

                        <div class="control-group">
                            <ul>
                                <?= lang('formNivelEscolaridade') ?>  
                            </ul>     
                       </div>   

                        <div class="control-group">
                            <label class="control-group">
                                <ul>
                                    <input type="radio" name="nivelEscolaridade" id="nivelEscolaridade" value="<?=lang('formNivelEscolaridadeOpt1')?>">
                                    <?= lang('formNivelEscolaridadeOpt1') ?>
                                </ul>
                            </label>


                            <label class="control-group">
                                <ul>
                                    <input type="radio" name="nivelEscolaridade" id="nivelEscolaridade" value="<?=lang('formNivelEscolaridadeOpt2')?>">
                                    <?= lang('formNivelEscolaridadeOpt2') ?>
                                </ul>
                            </label>


                            <label class="control-group">
                                <ul>
                                    <input type="radio" name="nivelEscolaridade" id="nivelEscolaridade" value="<?=lang('formNivelEscolaridadeOpt3')?>">
                                    <?= lang('formNivelEscolaridadeOpt3') ?>
                                </ul>
                            </label>

                            <label class="control-group">
                                <ul>
                                    <input type="radio" name="nivelEscolaridade" id="nivelEscolaridade" value="<?=lang('formNivelEscolaridadeOpt4')?>">
                                    <?= lang('formNivelEscolaridadeOpt4') ?>
                                </ul>
                            </label>
                            
                            <label class="control-group">
                                    <input type="radio" name="nivelEscolaridade" id="nivelEscolaridade" hidden="true" value="null" checked>
                            </label>
                        </div>    

                        <button class="btn-navbar" onClick="enviar()" margin="right">Enviar</button>
                    </div>
        </div>
    </section>   
    
</div>

<script>
    var cont = 1;
    var questao = new Array();
    var perguntas = <?php echo json_encode($perguntas); ?>;
       
    
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
     * Função init já carrega a primeira pergunta
     *
     */       
    function init(){
        $("#questionGrid").show();
        $("#formPerguntas").hide();
        $("#formIdentifiquese").hide();
        $("#questao_area").html(perguntas[cont-1]['questaoSobre']); 
        $("#questao_def").html(perguntas[cont-1]['questao']);
    }
       
    this.init();
    /**
     * Trás a proxima questão a ser repsondida
     * 
     */
    
    
    function trazerProximaQuestao(){
        var grid = '';

        if (cont == 24) {
            $("#questionGrid").hide();
            $("#formPerguntas").hide();
            $("#formIdentifiquese").show();
        
        } else 
            if (cont == 23){
                $("#questionGrid").hide();
                $("#formIdentifiquese").hide();
                $("#formPerguntas").show();
            
                /*                        
                for (var i = 0; i < 23; i++){
                    console.log(questao[i]);
                }
                */
            } else {
                $('#peopleGrid1 div').each(function(){ 
                  if (($(this).css('background-color')) == "rgba(0, 0, 0, 0)"){
                    grid += '0';
                  } else {
                    grid += '1';  
                  }  
                });

                questao[cont] = grid;

                //console.log(questao[cont]);

                $("#questao_area").html(perguntas[cont]['questaoSobre']);
                $("#questao_def").html(perguntas[cont]['questao']); 
                this.limparGrid();
        }
        cont++;
    }
    


    function enviar(){
        var pensouComo;
        var atividadeParecida;
        var identifiquese = [];
        

        
        pensouComo = document.getElementById("pensouComo").value;
        atividadeParecida = document.getElementById("atividadeParecida").value;
        
        identifiquese[0] = document.getElementById("txtNome").value;
        identifiquese[1] = document.getElementById("txtEmail").value;
        identifiquese[2] = document.getElementById("genero").value;
        identifiquese[3] = document.getElementById("txtCidade").value;
        identifiquese[4] = document.getElementById("nivelEscolaridade").value;
        identifiquese[5] = $("#calendario").val();
        
        $.post( '<?=BASE_URL?>peopleGrid/salvar',{resportasGrids: questao, pensouComo: pensouComo,
                    atividadeParecida: atividadeParecida,
                    identifiquese: identifiquese});
       
        //console.log(questao[1]);
        console.log(identifiquese);
        console.log(pensouComo);
        console.log(atividadeParecida);
        
}
</script>
<?
$this->load->view('../../static/views/rodapeView')?>