<?$this->load->view('../../static/views/cabecalhoPublicoView')?>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
            <a class="brand" href="<?=BASE_URL?>"><?=lang('horizonteInicio')?></a>
            <a class="brand" href="<?=BASE_URL.'peopleGrid/index/'.@$pessoa->fb_id?>"><?=lang('peopleGridPeopleGrid')?></a>
        </div>
    </div>
</div>
<div id="container-fluid" style="margin-left: 30px !important;margin-right: 10px; margin-top: 40px">
    <section id="home">
        <div class="row-fluid">
            <div class="page-header">
                <div style="float:left;margin:2px; width:50px;height: 50px;background-repeat: no-repeat;background-size: auto;background-image: url('http://graph.facebook.com/<?=$pessoa->fb_id?>/picture')"></div><h2><?=@$pessoa->nome?><small><?=lang('administrarAdministrarMensagem')?></small></h2>
                <p><?=lang('administrarOlaMembro')?></p>
            </div>
            
        </div>
        
        <div class="row-fluid">
            <div class="span12">
                <div class="tabbable tabs-left">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#programa" data-toggle="tab"><?=lang('administrarPrograma')?></a></li>
                      <li class=""><a href="#projeto1" data-toggle="tab"><?=lang('horizonteProjeto1')?></a></li>
                      <li class=""><a href="#projeto2" data-toggle="tab"><?=lang('horizonteProjeto2')?></a></li>
                      <li class=""><a href="#projeto3" data-toggle="tab"><?=lang('horizonteProjeto3')?></a></li>
                      <li class=""><a href="#projeto4" data-toggle="tab"><?=lang('horizonteProjeto4')?></a></li>
                      <li class=""><a id="peopleGrid" href="#peopleGrid" data-toggle="tab"><?=lang('horizontePeopleGridVerResultado')?></a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- Programa -->
                      <div class="tab-pane active" id="programa">
                         
                                <fieldset>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarNomePrograma')?></label>
                                          <div class="controls">
                                              <input type="text" class="input-xlarge" id="txtProgramaNome" value="<?=@$programa->nome?>">
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarSubtituloProjeto')?></label>
                                          <div class="controls">
                                              <input type="text" class="span6" id="txtProgramaSubtitulo" value="<?=@$programa->subtitulo?>">
                                          </div>
                                    </div> 
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarResumo')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProgramaResumo" rows="5"><?=@$programa->resumo?></textarea>
             
                                          </div>
                                    </div>  
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarApresentacao')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProgramaApresentacao" rows="10"><?=@$programa->apresentacao?></textarea>
                                          </div>
                                    </div>
                                    <input type="hidden" id="fbUserId" value="<?=@$pessoa->fb_id?>">
                                    
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary" onClick="enviarPrograma()" ><?=lang('administrarSalvar')?></button>
                                        <button class="btn" onClick="reloadPagina()"><?=lang('administrarCancelar')?></button>
                                    </div>
                                </fieldset>
                      </div>
                      <!-- PROJETO 1 -->
                      <div class="tab-pane" id="projeto1">
                        
                                <fieldset>
                                    <?=form_hidden('txtProjeto1Id', '1')?>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarNomeProjeto')?></label>
                                          <div class="controls">
                                              <input type="text" class="input-xlarge" id="txtProjeto1Nome" value="<?=@$projeto1->nome?>">
                                          </div>
                                    </div>
                                    
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarResumo')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto1Resumo" rows="3"><?=@$projeto1->resumo?></textarea>
             
                                          </div>
                                    </div>  
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarApresentacao')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto1Apresentacao" rows="10"><?=@$projeto1->objetivos?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarJustitificativa')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto1Justificativa" rows="10"><?=@$projeto1->problemajustificacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarTeoricos')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto1Teoria" rows="10"><?=@$projeto1->fundamentos?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarResultados')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto1Resultado" rows="10"><?=@$projeto1->resultados?></textarea>
                                          </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary" onClick="submeterProjeto(1)" ><?=lang('administrarSalvar')?></button>
                                        <button class="btn" onClick="reloadPagina()"><?=lang('administrarCancelar')?></button>
                                    </div>
                                    
                                </fieldset>
                            
                      </div>
                      <!-- PROJETO 2 -->
                      <div class="tab-pane" id="projeto2">
                        
                                <fieldset>
                                    <?=form_hidden('txtProjeto2Id', '2')?>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarNomeProjeto')?></label>
                                          <div class="controls">
                                              <input type="text" class="input-xlarge" id="txtProjeto2Nome" value="<?=@$projeto2->nome?>">
                                          </div>
                                    </div>
                                     
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarResumo')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto2Resumo" rows="3"><?=@$projeto2->resumo?></textarea>
             
                                          </div>
                                    </div>  
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarApresentacao')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto2Apresentacao" rows="10"><?=@$projeto2->objetivos?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarJustitificativa')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto2Justificativa" rows="10"><?=@$projeto2->problemajustificacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarTeoricos')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto2Teoria" rows="10"><?=@$projeto2->fundamentos?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarResultados')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto2Resultado" rows="10"><?=@$projeto2->resultados?></textarea>
                                          </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary" onClick="submeterProjeto(2)" ><?=lang('administrarSalvar')?></button>
                                        <button class="btn" onClick="reloadPagina()"><?=lang('administrarCancelar')?></button>
                                    </div>
                                    
                                </fieldset>
                            
                      </div>
                      <!-- PROJETO 3 -->
                      <div class="tab-pane" id="projeto3">
                        
                                <fieldset>
                                    <?=form_hidden('txtProjeto3Id', '3')?>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarNomeProjeto')?></label>
                                          <div class="controls">
                                              <input type="text" class="input-xlarge" id="txtProjeto3Nome" value="<?=@$projeto3->nome?>">
                                          </div>
                                    </div>
                                    
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarResumo')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto3Resumo" rows="3"><?=@$projeto3->resumo?></textarea>
             
                                          </div>
                                    </div>  
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarApresentacao')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto3Apresentacao" rows="10"><?=@$projeto3->objetivos?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarJustitificativa')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto3Justificativa" rows="10"><?=@$projeto3->problemajustificacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarTeoricos')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto3Teoria" rows="10"><?=@$projeto3->fundamentos?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarResultados')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto3Resultado" rows="10"><?=@$projeto3->resultados?></textarea>
                                          </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary" onClick="submeterProjeto(3)" ><?=lang('administrarSalvar')?></button>
                                        <button class="btn" onClick="reloadPagina()"><?=lang('administrarCancelar')?></button>
                                    </div>
                                </fieldset>
                            
                      </div>
                      <!-- PROJETO 4 -->
                      <div class="tab-pane" id="projeto4">
                        
                                <fieldset>
                                    <?=form_hidden('txtProjeto4Id', '4')?>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarNomeProjeto')?></label>
                                          <div class="controls">
                                              <input type="text" class="input-xlarge" id="txtProjeto4Nome" value="<?=@$projeto4->nome?>">
                                          </div>
                                    </div>
                                     
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarResumo')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto4Resumo" rows="3"><?=@$projeto4->resumo?></textarea>
             
                                          </div>
                                    </div>  
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarApresentacao')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto4Apresentacao" rows="10"><?=@$projeto4->objetivos?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarJustitificativa')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto4Justificativa" rows="10"><?=@$projeto4->problemajustificacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarTeoricos')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto4Teoria" rows="10"><?=@$projeto4->fundamentos?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarResultados')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto4Resultado" rows="10"><?=@$projeto4->resultados?></textarea>
                                          </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary" onClick="submeterProjeto(4)" ><?=lang('administrarSalvar')?></button>
                                        <button class="btn" onClick="reloadPagina()"><?=lang('administrarCancelar')?></button>
                                    </div>
                                    
                                </fieldset>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div id="alert" class="alert alert-info" style="display: none">
                    <button onClick="$('#alert').hide()" class="close" data-dismiss="alert">×</button>
                    <div id="alertMensagem"></div>
                </div>
            </div>
        </div>
    </section>
    
    <section id='sucesso' style="margin-top: 40px; display:none">
        <div class='row'>
            <div class='span12'>
                <div class='hero-unit' style="background-color:#DDEDAB">
                    <h1><img src="<?=BASE_URL?>static/img/success.png">
                    <?=lang('administrarSalvo')?></h1>
                    <p><?=lang('administrarSucessoMensagem')?></p>
                    <p><a href="#"onClick="reloadPagina()" class="btn btn-primary pull-right btn-large" ><?= lang('formVoltarAoInicio')?></a></p>
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
                    <p><a href="#"onClick="reloadPagina()" class="btn btn-primary pull-right btn-large" ><?= lang('formVoltarAoInicio')?></a></p>
                    <br>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    
    $('#peopleGrid').click(function(){
        location.href = BASE_URL+'administrar/verResultadoPeopleGrid/<?=@$pessoa->fb_id?>';
    });
    
    function enviarPrograma(){                    
         if( $('#txtProgramaNome').val() == '' || $('#txtProgramaSubtitulo').val() == '' || $('#txtProgramaApresentacao').val() == ''){
             $('#alertMensagem').text('<?=lang('administrarNaoPreenchido')?>')
             $('#alert').show();
         }else{
             $.post(BASE_URL+'administrar/salvarPrograma/',{
                 txtFbId: '<?=@$pessoa->fb_id?>',
                 txtNome:  $('#txtProgramaNome').val(),
                 txtSubtitulo : $('#txtProgramaSubtitulo').val(),
                 txtApresentacao : $('#txtProgramaApresentacao').val(),
                 txtResumo: $('#txtProgramaResumo').val()
                 },function(data){
                     if(data == "ltrue"){
                         $('#home').hide();
                         $('#sucesso').show();
                     }else{
                         $('#home').hide();
                         $('#falha').show();
                     }
             });
         }
     }
     
     function submeterProjeto($id){
        $projeto = $nome = $resumo = $apresentacao = $justificativa = $teoria = $resultado = '';
        switch($id){
            case 1:
                $projeto        = 1;
                $nome           = $('#txtProjeto1Nome').val();
                $resumo         = $('#txtProjeto1Resumo').val();
                $apresentacao   = $('#txtProjeto1Apresentacao').val();
                $justificativa  = $('#txtProjeto1Justificativa').val();
                $teoria         = $('#txtProjeto1Teoria').val();
                $resultado      = $('#txtProjeto1Resultado').val();
                break;
            case 2:
                $projeto        = 2;
                $nome           = $('#txtProjeto2Nome').val();
                $resumo         = $('#txtProjeto2Resumo').val();
                $apresentacao   = $('#txtProjeto2Apresentacao').val();
                $justificativa  = $('#txtProjeto2Justificativa').val();
                $teoria         = $('#txtProjeto2Teoria').val();
                $resultado      = $('#txtProjeto2Resultado').val();
                break;
            case 3:
                $projeto        = 3;
                $nome           = $('#txtProjeto3Nome').val();
                $resumo         = $('#txtProjeto3Resumo').val();
                $apresentacao   = $('#txtProjeto3Apresentacao').val();
                $justificativa  = $('#txtProjeto3Justificativa').val();
                $teoria         = $('#txtProjeto3Teoria').val();
                $resultado      = $('#txtProjeto3Resultado').val();
                break;
            case 4:
                $projeto        = 4;
                $nome           = $('#txtProjeto4Nome').val();
                $resumo         = $('#txtProjeto4Resumo').val();
                $apresentacao   = $('#txtProjeto4Apresentacao').val();
                $justificativa  = $('#txtProjeto4Justificativa').val();
                $teoria         = $('#txtProjeto4Teoria').val();
                $resultado      = $('#txtProjeto4Resultado').val();
                break;
        }
        if( $nome == '' || $justificativa == '' || $resumo == ''){
             $('#alertMensagem').text('<?=lang('administrarNaoPreenchido')?>')
             $('#alert').show();
         }else{
             $.post(BASE_URL+'administrar/salvarProjeto/',{
                 txtFbId: '<?=@$pessoa->fb_id?>',
                 txtProjetoId:$projeto,
                 txtNome:  $nome,
                 txtResumo : $resumo,
                 txtApresentacao : $apresentacao,
                 txtJustiticativa: $justificativa,
                 txtTeoria: $teoria,
                 txtResultado: $resultado
                 },function(data){
                    console.log(data);
                     if(data == "ltrue"){
                         $('#home').hide();
                         $('#sucesso').show();
                     }else{
                         $('#home').hide();
                         $('#falha').show();
                     }
             });
         }
     }
     
     function reloadPagina(){
        location.reload();
     }
     
</script>

<?$this->load->view('../../static/views/rodapeView')?>