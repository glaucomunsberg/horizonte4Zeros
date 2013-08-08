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
                    <ul id="menu" class="nav nav-tabs">
                      <li class="" id="programa"><a href="#programa"  data-toggle="tab"><?=lang('administrarPrograma')?></a></li>
                      <li class="" id="projeto2"><a href="#projeto1"  data-toggle="tab"><?=lang('horizonteProjeto1')?></a></li>
                      <li class="" id="projeto3"><a href="#projeto2"  data-toggle="tab"><?=lang('horizonteProjeto2')?></a></li>
                      <li class="" id="projeto4"><a href="#projeto3" data-toggle="tab"><?=lang('horizonteProjeto3')?></a></li>
                      <li class="" id="projeto5"><a href="#projeto4" id="projeto5" data-toggle="tab"><?=lang('horizonteProjeto4')?></a></li>
                      <li class="active" id="peopleGrid"><a  href="#peopleGrid" data-toggle="tab"><?=lang('horizontePeopleGridVerResultado')?></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="peopleGrid">
                            <div class="row" style="margin-left: 0px;">
                                <div class="span12">
                                    <select id="select01" style="height:80; width:80%;">
                                        <option><?=lang('peopleGridEscolhaQuestao');?></option>
                                        <option id="1"><?=lang('peopleGridQuestao1Def');?></option>
                                        <option id="2"><?=lang('peopleGridQuestao2Def');?></option>
                                        <option id="3"><?=lang('peopleGridQuestao3Def');?></option>
                                        <option id="4"><?=lang('peopleGridQuestao4Def');?></option>
                                        <option id="5"><?=lang('peopleGridQuestao5Def');?></option>
                                        <option id="6"><?=lang('peopleGridQuestao6Def');?></option>
                                        <option id="7"><?=lang('peopleGridQuestao7Def');?></option>
                                        <option id="8"><?=lang('peopleGridQuestao8Def');?></option>
                                        <option id="9"><?=lang('peopleGridQuestao9Def');?></option>
                                        <option id="10"><?=lang('peopleGridQuestao10Def');?></option>
                                        <option id="11"><?=lang('peopleGridQuestao11Def');?></option>
                                        <option id="12"><?=lang('peopleGridQuestao12Def');?></option>
                                        <option id="13"><?=lang('peopleGridQuestao13Def');?></option>
                                        <option id="14"><?=lang('peopleGridQuestao14Def');?></option>
                                        <option id="15"><?=lang('peopleGridQuestao15Def');?></option>
                                        <option id="16"><?=lang('peopleGridQuestao16Def');?></option>
                                        <option id="17"><?=lang('peopleGridQuestao17Def');?></option>
                                        <option id="18"><?=lang('peopleGridQuestao18Def');?></option>
                                        <option id="19"><?=lang('peopleGridQuestao19Def');?></option>
                                        <option id="20"><?=lang('peopleGridQuestao20Def');?></option>
                                        <option id="21"><?=lang('peopleGridQuestao21Def');?></option>
                                        <option id="22"><?=lang('peopleGridQuestao22Def');?></option>
                                    </select>
                                </div>
                                </div>
                                <div class="span12">
                                    
                                    <select id="select02">
                                        <option>Gêneros</option>
                                        <option id="F"><?=lang('formFeminino')?></option>
                                        <option id="M"><?=lang('formMasculino')?></option>
                                    </select>
                                    
                                    ̣<div class="control-group">
                                        <label class="control-label" for="input01"><?=lang('formIdade')?></label>
                                        <div class="controls">
                                            <?=lang('formDe')?>
                                            <input type="text" class="span3" id="txtNome" placeholder="Digite seu nome">
                                            <?=lang('formAte')?>
                                            <input type="text" class="span3" id="txtNome" placeholder="Digite seu nome">
                                        </div>
                                    </div>
                                    
                                    <select id="select04">
                                        <option>Cidades</option>
                                        <option>Jaguarão</option>
                                        <option>Cidades Estrangeiras</option>
                                        <option>Cidades Nacionais</option>
                                    </select>
                                    <select id="select05">
                                        <option id="T">Terreno</option>
                                        <option id="S">Satélite</option>
                                    </select>
                                    <from class="control-horizontal">
                                          <fieldset>
                                              <div class="control-group">
                                                <label class="control-label" for="optionsCheckboxList">Nível escolar</label>
                                                <div class="controls">
                                                  <label class="checkbox">
                                                    <input type="checkbox" name="optionsCheckboxList1" value="option1">
                                                    Ensino Fundamental
                                                  </label>
                                                  <label class="checkbox">
                                                    <input type="checkbox" name="optionsCheckboxList2" value="option2">
                                                    Ensino Médio
                                                  </label>
                                                  <label class="checkbox">
                                                    <input type="checkbox" name="optionsCheckboxList3" value="option3">
                                                    Ensino Superior
                                                  </label>
                                                </div>
                                              </div>
                                          </fieldset>
                                      </from>

                                      
                                </div>
                            </div>
                            <div class="row"  style="margin-left: 0px;">
                                <div class="span4">
                                    <div class="control-group">
                                        <label class="control-label" for="optionsCheckboxList">Pessoas</label>
                                        <div class="controls">
                                          <label class="checkbox">
                                            <input type="checkbox" name="optionsCheckboxList" value="option1">
                                            Filtrar Anônimos
                                          </label>
                                        </div>
                                      </div>
                                </div>
                                <div class="span4">
                                                                            <form class=" control-group">
                                            <div class="control-group">
                                                <label class="control-label" for="optionsCheckboxList">Pessoas</label>
                                                <div class="controls">
                                                  <label class="checkbox">
                                                    <input type="checkbox" name="optionsCheckboxList" value="option1">
                                                    Filtrar Anônimos
                                                  </label>
                                                </div>
                                              </div>
                                        </form>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 0px;">
                                <div class="span12">
                                    <button class="btn btn-primary" href="#">filtrar</button>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 0px;">
                                <div class="span12" id="resultadoGrid">
                                    <?= form_getGrid('peopleGridPai1', 'peopleGrid1', 40,32, 2, 'black',false) ?> 
                                </div>
                            </div>
                            <div class="row" style="display:none;margin-left: 0px;">
                                <div class="span12" id="resultadoDiser">
                                    
                                </div>
                            </div>
                        </div>                          
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
</div>
<script>
    $('#peopleGrid1').css('background-image',"url('"+IMG+"/solo_terreno.jpg')");
    $('#menu li').click(function(){
        if( this.id != 'peopleGrid'){
            location.href = BASE_URL+'administrar/index/<?=@$pessoa->fb_id?>';
        }
    });

</script>
<?$this->load->view('../../static/views/rodapeView')?>