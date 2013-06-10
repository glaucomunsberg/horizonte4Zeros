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
                <h3><div id="questao_area"></div></h3>
                <p><div id="questao_def">
                </p></div>
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
    <section id="formulario" style="margin-top: 40px; display:none"> 
    <div class="row">
        <div class="span6">
            <p>Identifique-se</p>
            <hr>
            <form class="well">
                
                <p><label>Informações Pessoais</label></p>
                <?=lang('formNome')?>
                <input type="text" class="span3" placeholder="Digite seu nome">
                <br>
                
                <?=lang('formEmail')?>
                <input type="text" class="span3" placeholder="Digite sua cidade">
                
                <br>
                <?=lang('formGenero')?>
                <label class="radio">
                    <input type="radio" name="genero" id="genero1" value="option1">
                    Masculino
                </label>
                <label class="radio">
                    <input type="radio" name="genero" id="genero2" value="option2">
                    Feminino
                </label>
                
                <br>
                <?=lang('formDtNascimento')?>
                <input type="text" class="span3" placeholder="Digite a sua data de nascimento">
                
                <br>
                <?=lang('formCidade')?>
                <input type="text" class="span3" placeholder="Digite sua cidade">
                
                <br>
                <?=lang('formNivelEscolaridade')?>
                <label class="radio">
                    <input type="radio" name="nivelEscolaridade" id="nivel1" value="option1">
                    Fundamental
                </label>
                
                <label class="radio">
                    <input type="radio" name="nivelEscolaridade" id="nivel2" value="option2">
                    Ensino Médio
                </label>
                
                <label class="radio">
                    <input type="radio" name="nivelEscolaridade" id="nivel3" value="option3">
                    Graduação
                </label>
                
                <label class="radio">
                    <input type="radio" name="nivelEscolaridade" id="nivel4" value="option4">
                    Pós-Graduado
                </label>
                
                <button type="submit" class="btn">Submit</button>
                
            </form>
        </div>
        <div class="span6">
            <p></p>    
        </div>
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
         * Função init já carrega a primeira pergunta
         *
         */       
        function init(){
            $("#questionGrid").hide();
            $("#formulario").show();
            //$("#questao_area").html(perguntas[cont-1]['questaoSobre']); 
            //$("#questao_def").html(perguntas[cont-1]['questao']);
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
        
        function enviarResposta(){
        
        }
        
</script>
<?$this->load->view('../../static/views/rodapeView')?>