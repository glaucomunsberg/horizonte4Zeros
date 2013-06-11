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
                <h3><div id="questao_area"></div></h3>
                <p><div id="questao_def">
                    </p></div>
                <dl class="dl-horizontal">
                    <dt><?= lang('peopleGridModeladores') ?></dt>
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
                    <dt><?= lang('peopleGridOutrasOpcoes') ?></dt>
                    <dd>
                        <button class="btn btn-danger" href="#" onClick="limparGrid()"><?= lang('peopleGridLimparGrid') ?></button>

                    </dd>
                </dl>
                <hr>
                <button class="btn btn-success pull-right" href="#" onClick="trazerProximaQuestao()"><?= lang('peopleGridProximaQuestao') ?></button>

            </div>
            <div class="span7">
                <?= form_getGrid('peopleGridPai1', 'peopleGrid1', 34, 2, 'black') ?> 
            </div>
            <div class="span12">

            </div>
        </div>
    </section>


    <section id="formulario" style="margin-top: 40px; display:none"> 
        <div class="row">
            <form class="well">
                <fieldset>
                    <h3><?= lang('formIdentifiquese') ?></h3>
                    <hr>
                    <div class="span5">  
                        <?= lang('formJaParticipouAtividadeParecida') ?>
                        <br>
                        <div class="control-group">
                            <label class="radio inline">
                                <input type="radio" name="atividadeParecida" id="atividadeParecida" value="option1">
                                <?= lang('sim') ?>
                            </label>

                            <label class="radio inline">
                                <input type="radio" name="atividadeParecida" id="atividadeParecida" value="option2">
                                <?= lang('nao') ?>
                            </label>
                        </div>

                        <br>

                        <?= lang('formPensouComo') ?>
                        <div class="control-group">
                            <label class="radio">
                                <input type="radio" name="pensouComo" id="pensouComo" value="option1">
                                <?= lang('formPensouComoOpt1') ?>
                            </label>

                            <label class="radio">
                                <input type="radio" name="pensouComo" id="pensouComo" value="option2">
                                <?= lang('formPensouComoOpt2') ?>
                            </label>

                            <label class="radio">
                                <input type="radio" name="pensouComo" id="pensouComo" value="option3">
                                <?= lang('formPensouComoOpt3') ?>
                            </label>

                            <label class="radio">
                                <input type="radio" name="pensouComo" id="pensouComo" value="option4">
                                <?= lang('formPensouComoOpt4') ?>
                            </label>

                            <label class="radio">
                                <input type="radio" name="pensouComo" id="pensouComo" value="option5">
                                <?= lang('formPensouComoOpt5') ?>
                            </label>
                        </div>
</div>
                        <div class="span6">
                            <p><label><?= lang('formInformacoesPessoais') ?></label></p>

                            <?= lang('formNome') ?>

                            <div class="control-group">
                                <input type="text" class="span3" id="txtNome" placeholder="Digite seu nome">
                                <br>
                            </div>

                            <div class="control-group">
                                <?= lang('formEmail') ?>
                                <input type="text" class="span3" id="txtEmail" placeholder="Digite sua cidade">
                            </div>

                            <br>

                            <?= lang('formGenero') ?>
                            <div class="control-group">
                                <label class="radio">
                                    <input type="radio" name="genero" id="genero" value="option1">
                                    <?= lang('formMasculino') ?>
                                </label>
                                <label class="radio">
                                    <input type="radio" name="genero" id="genero" value="option2">
                                    <?= lang('formFeminino') ?>
                                </label>
                            </div>

                            <br>

                            <div class="control-group">
                                <?= lang('formDtNascimento') ?>
                                <input type="text" class="span3" id="txtDtNascimento" placeholder="Digite a sua data de nascimento">
                            </div>

                            <br>
                            <?= lang('formCidade') ?>
                            <input type="text" class="span3" id="txtCidade" placeholder="Digite sua cidade">

                            <br>
                            <div class="control-group">
                                <?= lang('formNivelEscolaridade') ?>
                                <label class="radio">
                                    <input type="radio" name="nivelEscolaridade" id="nivelEscolaridade" value="option1">
                                    <?= lang('formNivelEscolaridadeOpt1') ?>
                                </label>

                                <label class="radio">
                                    <input type="radio" name="nivelEscolaridade" id="nivelEscolaridade" value="option2">
                                    <?= lang('formNivelEscolaridadeOpt2') ?>
                                </label>

                                <label class="radio">
                                    <input type="radio" name="nivelEscolaridade" id="nivelEscolaridade" value="option3">
                                    <?= lang('formNivelEscolaridadeOpt3') ?>
                                </label>

                                <label class="radio">
                                    <input type="radio" name="nivelEscolaridade" id="nivelEscolaridade" value="option4">
                                    <?= lang('formNivelEscolaridadeOpt4') ?>
                                </label>
                            </div>    

                            <button type="submit" class="btn" onClick="enviar()" margin="right">Enviar</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </section>
</div>

<script>
    var cont = 1;
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
        $("#questionGrid").hide();
        $("#formulario").show();
        $("#questao_area").html(perguntas[cont-1]['questaoSobre']); 
        $("#questao_def").html(perguntas[cont-1]['questao']);
    }
       
    init();
    /**
     * Trás a proxima questão a ser repsondida
     * 
     */
    function trazerProximaQuestao(){
        if (cont == 23){
            form_identificacao();
        }
            
        $("#questao_area").html(perguntas[cont]['questaoSobre']);
        $("#questao_def").html(perguntas[cont]['questao']); 
        cont++;
    }
        
    function form_identificacao(){
            
        $("#questionGrid").hide();
        $("#formulario").show();
    }
        
    function enviar(){
        

    }
        
</script>
<?
$this->load->view('../../static/views/rodapeView')?>