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
                            <div class="row" style="margin-left: 0px; margin-top:10px">
                                <strong>
                                    <select id="selectedPergunta" class="span12" style="height:50px; font-size:16px; " >
                                        <option value="0"><?=lang('peopleGridEscolhaQuestao');?></option>
                                        <option value="1"><?=lang('peopleGridQuestao1Def');?></option>
                                        <option value="2"><?=lang('peopleGridQuestao2Def');?></option>
                                        <option value="3"><?=lang('peopleGridQuestao3Def');?></option>
                                        <option value="4"><?=lang('peopleGridQuestao4Def');?></option>
                                        <option value="5"><?=lang('peopleGridQuestao5Def');?></option>
                                        <option value="6"><?=lang('peopleGridQuestao6Def');?></option>
                                        <option value="7"><?=lang('peopleGridQuestao7Def');?></option>
                                        <option value="8"><?=lang('peopleGridQuestao8Def');?></option>
                                        <option value="9"><?=lang('peopleGridQuestao9Def');?></option>
                                        <option value="10"><?=lang('peopleGridQuestao10Def');?></option>
                                        <option value="11"><?=lang('peopleGridQuestao11Def');?></option>
                                        <option value="12"><?=lang('peopleGridQuestao12Def');?></option>
                                        <option value="13"><?=lang('peopleGridQuestao13Def');?></option>
                                        <option value="14"><?=lang('peopleGridQuestao14Def');?></option>
                                        <option value="15"><?=lang('peopleGridQuestao15Def');?></option>
                                        <option value="16"><?=lang('peopleGridQuestao16Def');?></option>
                                        <option value="17"><?=lang('peopleGridQuestao17Def');?></option>
                                        <option value="18"><?=lang('peopleGridQuestao18Def');?></option>
                                        <option value="19"><?=lang('peopleGridQuestao19Def');?></option>
                                        <option value="20"><?=lang('peopleGridQuestao20Def');?></option>
                                        <option value="21"><?=lang('peopleGridQuestao21Def');?></option>
                                        <option value="22"><?=lang('peopleGridQuestao22Def');?></option>
                                    </select>
                                </strong>
                            </div>
                            <div class="row" style="margin-left: 0px; margin-top:10px; display: none" id="linha2">
                                <div class="span4">
                                    <strong>
                                        <select id="selectGenero">
                                            <option>Gêneros</option>
                                            <option value="F"><?=lang('formFeminino')?></option>
                                            <option value="M"><?=lang('formMasculino')?></option>
                                        </select>
                                    </strong>
                                </div>
                                <div class="span4" >
                                    <strong>
                                        <select id="selectCidade">
                                            <option>Cidades</option>
                                            <option value="J">Jaguarão</option>
                                            <option value="CE">Cidades Estrangeiras</option>
                                            <option value="CN">Cidades Nacionais</option>
                                        </select>
                                    </strong>
                                </div>
                                <div class="span4">
                                    <strong>
                                        <select id="selectMapa">
                                            <option value="T">Terreno</option>
                                            <option value="S">Satélite</option>
                                        </select>
                                    </strong>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 0px; margin-top:10px; display:none" id="linha3">
                                <div class="span4">
                                    <from class="control-horizontal">
                                        <fieldset>
                                            <div class="control-group">
                                                <strong>
                                                    <label class="control-label" for="optionsCheckboxList">Respondeu como</label>
                                                </strong>
                                                <div class="controls">
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="repre_popu"  value="option1">
                                                        Representante da população
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="repre_lider" value="option2">
                                                        Um líder comunitário e/ou ativista
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="repre_pol" value="option3">
                                                        Representante político e/ou gestor
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="repre_tec" value="option4">
                                                        Um técnico municipal e/ou planejador urbano
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="repre_inves" value="option4">
                                                        Um investidor e/ou empresário
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="repre_outro" value="option4">
                                                        Outro
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </from>
                                </div>
                                <div class="span4">
                                    <from class="control-horizontal">
                                        <fieldset>
                                            <div class="control-group">
                                                <strong>
                                                    <label class="control-label" for="optionsCheckboxList">Nível escolar</label>
                                                </strong>
                                                <div class="controls">
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="ensino_fun"  value="option1">
                                                        Ensino Fundamental
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="ensino_med" value="option2">
                                                        Ensino Médio
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="ensino_gra" value="option3">
                                                        Graduação
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="ensino_pos" value="option4">
                                                        Pós Graduação
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </from>

                                </div>
                                <div class="span4">
                                    <from class="control-horizontal">
                                        <fieldset>
                                            <div class="control-group">
                                                <strong>
                                                    <label class="control-label" for="optionsCheckboxList">Renda Familiar</label>
                                                </strong>
                                                <div class="controls">
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="salario1a3"  value="option1">
                                                        1 a 3 salários mínimos
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="salario3a6" value="option2">
                                                        3 a 6 salários mínimos
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="salario6a9" value="option3">
                                                        6 a 9 salários mínomos
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="salarioMaisDe9" value="option4">
                                                        Mais de 9 salários mínimos
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </from> 
                                </div>
                            </div>
                            <div class="row" style="margin-left: 0px; margin-top:10px; display: none" id="linha4">
                                <div class="span4">
                                    <div class="control-group">
                                        <strong>
                                            <label class="control-label" for="input01"><?=lang('formNascido')?></label>
                                        </strong>
                                        <div class="controls">
                                            <?=lang('formEntre')?>
                                            <input type="text" class="span3" id="idade_min" placeholder="ano">
                                            <?=lang('formAte')?>
                                            <input type="text" class="span3" id="idade_max" placeholder="ano">
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="control-group">
                                        <strong>
                                            <label class="control-label" for="optionsCheckboxList">Pessoas</label>
                                        </strong>
                                        <div class="controls">
                                            <label class="checkbox">
                                                <input type="checkbox" id="pessoa_anonima" name="optionsCheckboxList" value="option1">
                                                Filtrar Anônimos
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">

                                </div>
                            </div>
                            <div class="row" style="margin-left: 0px; margin-top:10px">
                                <div class="span12">
                                    <button class="btn" href="#" onClick="esconderMostrarFiltros()" id="btnFiltros"><i class="icon-filter"></i>Mostrar Filtros</button>
                                    <button class="btn btn-primary" href="#" onClick="filtro()">Gerar</button>
                                </div>
                            </div>
                                
                                <div class="row" style="display:none;margin-left: 0px; margin-top:10px">
                                    <div class="span12" id="resultadoDiser">

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
    $('#idade_min').mask("9999");
    $('#idade_max').mask("9999");
    $('#menu li').click(function(){
        if( this.id != 'peopleGrid'){
            location.href = BASE_URL+'administrar/index/<?=@$pessoa->fb_id?>';
        }
    });
    $escondido = true;
    function esconderMostrarFiltros(){
        if($escondido){
            $escondido = false;
            $('#btnFiltros').text('Esconder Filtros');
            $('#linha2').show('clip');
            $('#linha3').show('clip');
            $('#linha4').show('clip');
        }else{
            $escondido = true;
            $('#btnFiltros').text('Mostrar Filtros');
            $('#linha2').hide('clip');
            $('#linha3').hide('clip');
            $('#linha4').hide('clip');
        }
    }
    /*
    function getRespostas(){
        var perguntaSelecionado, generoSelecionado, cidadeSelecionada, mapaSelecionado, ensino_sup, ensino_med, ensino_fun, idade_min, idade_max, pessoa_anonima;
        
        perguntaSelecionado = $('#selectedPergunta option:selected').val();
        generoSelecionado   = $('#selectGenero option:selected').val();
        cidadeSelecionada   = $('#selectCidade option:selected').val();
        mapaSelecionado   = $('#selectMapa option:selected').val();
        
        ensino_fun = $('#ensino_fun').is(':checked');
        ensino_med = $('#ensino_med').is(':checked'); 
        ensino_sup = $('#ensino_sup').is(':checked'); 

        pessoa_anonima = $('#pessoa_anonima').is(':checked'); 
   
        idade_min = $('#idade_min').val();
        idade_max = $('#idade_max').val();
    }
   */
    function filtro() {
        var perguntaSelecionada, generoSelecionado, cidadeSelecionada, mapaSelecionado, ensino_sup, ensino_med, ensino_fun, idade_min, idade_max, pessoa_anonima;
        
        perguntaSelecionada = $('#selectedPergunta option:selected').val();
        generoSelecionado   = $('#selectGenero option:selected').val();
        cidadeSelecionada   = $('#selectCidade option:selected').val();
        mapaSelecionado   = $('#selectMapa option:selected').val();
        
        repre_popu = ('#repre_popu').is(':checked');
        repre_lider = ('#repre_lider').is(':checked');
        repre_pol = ('#repre_pol').is(':checked');
        repre_tec = ('#repre_tec').is(':checked');
        repre_inves = ('#repre_inves').is(':checked');
        repre_outro = ('#repre_outro').is(':checked');
        
        salario1a3 = ('#salario1a3').is(':checked');
        salario3a6 = ('#salario3a6').is(':checked');
        salario6a9 = ('#salario6a9').is(':checked');
        salarioMais9 = ('#salarioMaisDe9').is(':checked');
        
        ensino_fun = $('#ensino_fun').is(':checked');
        ensino_med = $('#ensino_med').is(':checked'); 
        ensino_gra = $('#ensino_gra').is(':checked');
        ensino_pos = $('#ensino_pos').is(':checked');

        pessoa_anonima = $('#pessoa_anonima').is(':checked'); 
   
        idade_min = $('#idade_min').val();
        idade_max = $('#idade_max').val();

        
        $.post( '<?=BASE_URL?>administrar/filtrarPesquisa',
        {  
            repre_popu: repre_popu,
            repre_lider: repre_lider,
            repre_tec: repre_tec,
            repre_inves: repre_inves,
            repre_outro: repre_outro,
            pergunta: perguntaSelecionada,
            genero: generoSelecionado,
            cidade: cidadeSelecionada,
            ensinoFun: ensino_fun,
            ensinoMed: ensino_med,
            ensinoGra: ensino_gra,
            ensinoPos: ensino_pos,
            anonimos: pessoa_anonima,
            idadeMin: idade_min,
            idadeMax: idade_max,
            salario1a3: salario1a3,
            salario3a6: salario3a9,
            salario6a9: salario6a9,
            salarioMaisDe9: salarioMaisDe9
        },
        function(data){
            
            if (data.substring(0, 3) == 'l"s'){
                data = "sucesso";
            }
            
            if (data.substring(0, 3) == 'l"f'){
                data = "falha";
            }
            
            if (data == "sucesso"){   
                alert("SUCESSO");
            }
            if (data == "falha"){
                alert("FALHA");
            }
        });
        
    }

</script>
<?$this->load->view('../../static/views/rodapeView')?>