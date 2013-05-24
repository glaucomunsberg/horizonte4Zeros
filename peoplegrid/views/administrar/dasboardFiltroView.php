<?$this->load->view('../../static/views/cabecalhoPublicoView')?>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
            <a class="brand" href="<?=BASE_URL?>"><?=lang('horizonte0000')?></a>
            <a class="brand" href="<?=BASE_URL.'peopleGrid/index/'.@$pessoa->fb_id?>"><?=lang('administrarAreaPublica')?></a>
        </div>
    </div>
</div>
<div id="container" style="margin-left: 30px !important;margin-right: 10px; margin-top: 40px">
    <section id="home">
        <div class="page-header">
            <div style="float:left;margin:2px; width:40px;height: 40px;background-repeat: no-repeat;background-size: auto;background-image: url('http://graph.facebook.com/<?=$pessoa->fb_id?>/picture')"></div><h2><?=@$pessoa->nome?><small><?=lang('administrarAdministrarMensagem')?></small></h2>
        </div>
        <div class="row">
            <div id="alert" class="alert alert-info" style="display: none">
                <button onClick="$('#alert').hide()" class="close" data-dismiss="alert">×</button>
                <div id="alertMensagem"></div>
            </div>
            <div class="span12">
                <div class="tabbable">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#programa" data-toggle="tab"><?=lang('administrarPrograma')?></a></li>
                      <li class=""><a href="#projeto1" data-toggle="tab">Projeto A</a></li>
                      <li class=""><a href="#projeto2" data-toggle="tab">Projeto B</a></li>
                      <li class=""><a href="#projeto3" data-toggle="tab">Projeto C</a></li>
                      <li class=""><a href="#projeto4" data-toggle="tab">Projeto D</a></li>
                      <li class=""><a href="#uploadFile" data-toggle="tab">Upload Image</a></li>
                      <li class=""><a href="#news" data-toggle="tab">news</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- Programa -->
                      <div class="tab-pane active" id="programa">
                            <form class="form-horizontal" novalidate="novalidate">
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
                                              <input type="text" class="input-xlarge" id="txtProgramaSubtitulo" value="<?=@$programa->subtitulo?>">
                                          </div>
                                    </div> 
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarResumo')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProgramaResumo" rows="3"><?=@$programa->resumo?></textarea>
             
                                          </div>
                                    </div>  
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarApresentacao')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProgramaApresentacao" rows="10"><?=@$programa->apresentacao?></textarea>
                                          </div>
                                    </div>
                                    
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary" onClick="submeterPrograma()" ><?=lang('administrarSalva')?></button>
                                        <button class="btn" onClick="reloadPagina()"><?=lang('administrarCancelar')?></button>
                                    </div>
                                </fieldset>
                            </form>
                      </div>
                      <!-- PROJETO 1 -->
                      <div class="tab-pane" id="projeto1">
                        <form class="form-horizontal" novalidate="novalidate">
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
                                              <textarea class="input-xlarge span6" id="txtProjeto1Apresentacao" rows="10"><?=@$projeto1->apresentacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarJustitificativa')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto1Justificativa" rows="10"><?=@$projeto1->apresentacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarTeoricos')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto1Teoria" rows="10"><?=@$projeto1->apresentacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarResultados')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto1Resultado" rows="10"><?=@$projeto1->apresentacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary" onClick="submeterProjeto()" ><?=lang('administrarSalvar')?></button>
                                        <button class="btn" onClick="reloadPagina()"><?=lang('administrarCancelar')?></button>
                                    </div>
                                    
                                </fieldset>
                            </form>
                      </div>
                      <!-- PROJETO 2 -->
                      <div class="tab-pane" id="projeto2">
                        <form class="form-horizontal" novalidate="novalidate">
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
                                              <textarea class="input-xlarge span6" id="txtProjeto2Apresentacao" rows="10"><?=@$projeto2->apresentacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarJustitificativa')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto2Justificativa" rows="10"><?=@$projeto2->apresentacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarTeoricos')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto2Teoria" rows="10"><?=@$projeto2->apresentacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarResultados')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto2Resultado" rows="10"><?=@$projeto2->apresentacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary" onClick="submeterProjeto()" ><?=lang('administrarSalvar')?></button>
                                        <button class="btn" onClick="reloadPagina()"><?=lang('administrarCancelar')?></button>
                                    </div>
                                    
                                </fieldset>
                            </form>
                      </div>
                      <!-- PROJETO 3 -->
                      <div class="tab-pane" id="projeto3">
                        <form class="form-horizontal" novalidate="novalidate">
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
                                              <textarea class="input-xlarge span6" id="txtProjeto3Apresentacao" rows="10"><?=@$projeto3->apresentacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarJustitificativa')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto3Justificativa" rows="10"><?=@$projeto3->apresentacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarTeoricos')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto3Teoria" rows="10"><?=@$projeto3->apresentacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarResultados')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto3Resultado" rows="10"><?=@$projeto3->apresentacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary" onClick="submeterProjeto()" ><?=lang('administrarSalvar')?></button>
                                        <button class="btn" onClick="reloadPagina()"><?=lang('administrarCancelar')?></button>
                                    </div>
                                </fieldset>
                            </form>
                      </div>
                      <!-- PROJETO 4 -->
                      <div class="tab-pane" id="projeto4">
                        <form class="form-horizontal" novalidate="novalidate">
                                <fieldset>
                                    <?=form_hidden('txtProjeto4Id', '4')?>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarNomeProjeto')?></label>
                                          <div class="controls">
                                              <input type="text" class="input-xlarge" id="txtProjeto1Nome" value="<?=@$projeto4->nome?>">
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
                                              <textarea class="input-xlarge span6" id="txtProjeto4Apresentacao" rows="10"><?=@$projeto4->apresentacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarJustitificativa')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto4Justificativa" rows="10"><?=@$projeto4->apresentacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarTeoricos')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto4Teoria" rows="10"><?=@$projeto4->apresentacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="control-group">
                                          <label class="control-label"><?=lang('administrarResultados')?></label>
                                          <div class="controls">
                                              <textarea class="input-xlarge span6" id="txtProjeto4Resultado" rows="10"><?=@$projeto4->apresentacao?></textarea>
                                          </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary" onClick="submeterProjeto()" ><?=lang('administrarSalvar')?></button>
                                        <button class="btn" onClick="reloadPagina()"><?=lang('administrarCancelar')?></button>
                                    </div>
                                    
                                </fieldset>
                            </form>
                      </div>
                      <div class="tab-pane" id="uploadFile">
                        <p>F.</p>
                      </div>
                      <!--NEWS -->
                      <div class="tab-pane" id="news">
                        <p>
                            <?=jTableStart('PersonTableContainer','','novidade/listaNovidades','novidade/criarNovidade','novidade/AtualizarNovidade','novidade/deletarNovidade',array('selecting','multiselect','selectingCheckboxes','sorting', 'paging'))?>
                                <?jPanelAddID(true,false,false,false)?>
                                <?jPanelAddCampo('titulo',lang('blogTitulo'),'','20%')?>
                                <?jPanelAddCampo('descricao',lang('blogDescricao'),'textarea','80%')?>
                                <?jPanelAddData('dt_cadastro', lang('blogDtCadastro'), '5%', 'dd-mm-yy')?>
                            <?=jTableEnd()?>
                        </p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    function submeterPrograma(){                    
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
                     var projeto = data.projeto;
                     if(projeto){
                         $('#alertMensagem').html('<?=lang('administrarSalvo')?>');
                         $('#alert').show();
                     }else{
                         $('#alertMensagem').html('<?=lang('administrarFalha')?>');
                         $('#alert').show();
                     }
             });
         }
     }
     function submeterProjeto($id){
        $projeto = $nome = $resumo = $apresentacao = $justificativa = $teoria = $resultado = '';
        switch($id){
            case 1:
                $projeto        = 1;
                $nome           = $('txtProjeto1Nome').val();
                $resumo         = $('txtProjeto1Resumo').val();
                $apresentacao   = $('txtProjeto1Apresentacao').val();
                $justificativa  = $('txtProjeto1Justificativa').val();
                $teoria         = $('txtProjeto1Teoria').val();
                $resultado      = $('txtProjeto1Resultado').val();
                break;
            case 2:
                $projeto        = 2;
                $nome           = $('txtProjeto2Nome').val();
                $resumo         = $('txtProjeto2Resumo').val();
                $apresentacao   = $('txtProjeto2Apresentacao').val();
                $justificativa  = $('txtProjeto2Justificativa').val();
                $teoria         = $('txtProjeto2Teoria').val();
                $resultado      = $('txtProjeto2Resultado').val();
                break;
            case 3:
                $projeto        = 3;
                $nome           = $('txtProjeto3Nome').val();
                $resumo         = $('txtProjeto3Resumo').val();
                $apresentacao   = $('txtProjeto3Apresentacao').val();
                $justificativa  = $('txtProjeto3Justificativa').val();
                $teoria         = $('txtProjeto3Teoria').val();
                $resultado      = $('txtProjeto3Resultado').val();
                break;
            case 4:
                $projeto        = 4;
                $nome           = $('txtProjeto4Nome').val();
                $resumo         = $('txtProjeto4Resumo').val();
                $apresentacao   = $('txtProjeto4Apresentacao').val();
                $justificativa  = $('txtProjeto4Justificativa').val();
                $teoria         = $('txtProjeto4Teoria').val();
                $resultado      = $('txtProjeto4Resultado').val();
                break;
        }
        if( $nome == '' || $subtitulo == '' || $resumo == ''){
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
                     var projeto = data.projeto;
                     if(projeto){
                         $('#alertMensagem').html('<?=lang('administrarSalvo')?>');
                         $('#alert').show();
                     }else{
                         $('#alertMensagem').html('<?=lang('administrarFalha')?>');
                         $('#alert').show();
                     }
             });
         }
     }
     
     function reloadPagina(){
        location.reload()
     }
     
</script>

<?$this->load->view('../../static/views/rodapeView')?>