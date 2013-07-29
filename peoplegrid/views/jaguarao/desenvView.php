<? $this->load->view('../../static/views/cabecalhoPublicoView') ?>
<div id="container" style="margin-left: 30px !important;margin-right: 10px">
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
                <a class="brand active" style="margin-top: 3px; font-size: 25px" href="<?=BASE_URL?>"><?= lang('horizonteHome') ?></a>
                <div class="nav-collapse collapse" >
                    <ul class="nav">
                        <li class=""><a href="#projetos"><?= lang('horizonteProjetos') ?></a> </li>
                        <li class=""><a href="#news"><?= lang('horizonteLastNews') ?></a></li>
                        <li class=""><a href="#enjoy"><?= lang('horizonteEnjoy') ?></a></li>
                        <li class=""><a href="#equipe"><?= lang('horizonteEquipe') ?></a></li>
                        <li class=""><a href="http://horizonte4zeros.wordpress.com" target="_blank"><?= lang('horizonteBlog') ?></a></li>
                        <div class="btn-group">
                            <button class="btn dropdown-toggle" data-toggle="dropdown"><?= lang('horizonteSuaLingua'); ?> <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="?lang=pt-br"><?= lang('horizontePortugues'); ?></a></li>
                                <li><a href="?lang=es"><?= lang('horizonteEspanhol'); ?></a></li>
                                <li><a href="?lang=en"><?= lang('horizonteIngles'); ?></a></li>
                                <li><a href="?lang=mandarim"><?= lang('horizonteMandarim'); ?></a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    
<div class="container">    
    <section id="home">
        <div style="padding-top:35px"></div>
        <div class="page-header">
            <h2><?= $programa->nome ?><small><?= $programa->subtitulo ?></small></h2>
        </div>
        <div class="row-fluid">
            <div class="row" style="margin-left: 30px !important;margin-right: 30px">
                <div class="span6">
                    <p>
                        <?= $programa->resumo ?>
                    </p>
                </div>
                <div class="span6">
                    <div class="hero-unit">
                        <h3 style="padding-top:10px"><?= lang('horizontePessoas') ?></h3>
                        <?
                        foreach ($pessoas as $pessoa) {
                            ?>
                            <div title="<?= $pessoa->nome ?>" style="float:left; margin:2px; width:40px; height: 40px;background-repeat: no-repeat;background-size: auto;background-image: url('http://graph.facebook.com/<?= $pessoa->fb_id ?>/picture')"></div>
                            <?
                        }
                        ?>
                        <br style="clear:both;" />
                        <a href="#enjoy" ><button class="btn btn-info" style="margin-top:10px"><?= lang('horizonteEntrar') ?></button></a>
                    </div>
                </div>
            </div>
            <!-- PROJETOS -->
            <section id="projetos">
                <div style="padding-top:55px"></div>
                <div class="page-header">
                    <h1><?= lang('horizonteProjetos') ?><small></small></h1>
                </div>
                <!-- TITULO DOS PROJETOS-->
                <div class="row" style="margin-left: 30px !important;margin-right: 30px">
                    <? foreach ($projetos as $projeto) { ?>
                        <div class="span3 ">
                            <h3><?= $projeto->nome ?></h3>
                        </div>  
                    <? } ?>
                </div>

                <!-- RESUMO DOS PROJETOS-->
                <div class="row" style="margin-left: 30px !important;margin-right: 30px">
                    <div class="span3 ">
                        <p style="text-align: justify"><?= $projeto1->resumo ?></p>
                    </div>
                    <div class="span3 ">
                        <p style="text-align: justify"><?= $projeto2->resumo ?></p>
                    </div>
                    <div class="span3 ">
                        <p style="text-align: justify"><?= $projeto3->resumo ?></p>
                    </div>
                    <div class="span3 ">
                        <p style="text-align: justify"><?= $projeto4->resumo ?></p>
                    </div>
                </div>

                <!-- BOTOES LEIA MAIS-->
                <div class="row" style="margin-left: 30px !important;margin-right: 30px">
                    <? foreach ($projetos as $projeto) { ?>
                        <div class="span3 ">
                            <a href="#projeto<?= $projeto->id ?>"><?
                                switch ($projeto->id) {
                                    case 1:
                                        echo '<button class="btn btn-success">'.lang('horizonteLerMais').'</button>';
                                        echo '<button onClick="participarPeopleGrid()" class="btn btn-primary pull-right">'.lang('horizonteParticipar').'</button>';
                                        break;
                                    case 2: echo '<button class="btn btn-warning">'.lang('horizonteLerMais').'</button>';
                                        break;
                                    case 3: echo '<button class="btn btn-danger">'.lang('horizonteLerMais').'</button>';
                                        break;
                                    case 4: echo '<button class="btn">'.lang('horizonteLerMais').'</button>';
                                        break;
                                }
                                ?></a>
                        </div>    
                    <? } ?>
                </div>
            </section>
        </div>
    </section>

    <section id="news">
        <div style="padding-top:55px"></div>
        <div class="page-header">
            <h1><?= lang('horizonteLastNews') ?> <small> <?= lang('horizonteLastNewsMensagem') ?></small></h1>
        </div>
        <div class="row">
            <div class="span8">
                <ul class="thumbnails">
                    <li class="span2">
                        <a href="http://www.flickr.com/photos/horizonte4zeros/sets/72157633950110234/" class="thumbnail">
                            <img src="http://desenvolvimentourbanoemjaguarao.files.wordpress.com/2013/06/fundo4.jpg?w=695" alt="">
                        </a>
                    </li>
                    <li class="span2">
                        <a href="http://www.flickr.com/photos/horizonte4zeros/sets/72157633950110234/" class="thumbnail">
                            <img src="http://farm9.staticflickr.com/8268/8959379603_ffbc523893_s.jpg" alt="">
                        </a>
                    </li>
                    <li class="span2">
                        <a href="http://www.flickr.com/photos/horizonte4zeros/sets/72157633950110234/" class="thumbnail">
                            <img src="http://farm6.staticflickr.com/5450/8959373489_e3d6b0a31f_s.jpg" alt="">
                        </a>
                    </li>
                    <li class="span2">
                        <a href="http://www.flickr.com/photos/horizonte4zeros/sets/72157633950110234/" class="thumbnail">
                            <img src="http://farm8.staticflickr.com/7308/8960580514_14cd6b9a2e_s.jpg" alt="">
                        </a>
                    </li>
                    <li class="span2">
                        <a href="http://www.flickr.com/photos/horizonte4zeros/sets/72157633950110234/" class="thumbnail">
                            <img src="http://farm8.staticflickr.com/7451/8959381343_eb69e46cfc_t.jpg" alt="">
                        </a>
                    </li>
                    <li class="span2">
                        <a href="http://www.flickr.com/photos/horizonte4zeros/sets/72157633950110234/" class="thumbnail">
                            <img src="http://farm9.staticflickr.com/8402/8959378043_571a2e4826_t.jpg" alt="">
                        </a>
                    </li>
                    <li class="span2">
                        <a href="http://www.flickr.com/photos/horizonte4zeros/sets/72157633950110234/" class="thumbnail">
                            <img src="http://farm9.staticflickr.com/8557/8959375415_a832f121cb_s.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row-fluid">
        <div class="span6">
            <p>
            <dt><?= lang('horizonteViagensDesc') ?></dt>
            <dl class="dl-horizontal">
                <dt><?= lang('horizonteViagens') ?></dt>
                <dd>28/06 nos estaremos em Jaguarão!</dd>
                <dd>12/07 nos estaremos em Jaguarão!</dd>
                <dd>09/08 nos estaremos em Jaguarão!</dd>
                <dd>23/08 nos estaremos em Jaguarão!</dd>
            </dl>
            </p>
            <p>
                <span class="label label-info"><?= lang('horizonteNews') ?></span>
                <?= lang('horizonteNewsMensagem') ?>
            </p>
        </div>
        </div>    
    </section>
    
    <section id="enjoy">
        <div style="padding-top:55px"></div>
        <div class="page-header">
            <h1><?= lang('horizonteEnjoy') ?> <small><?= lang('horizonteEnjoySimple') ?></small></h1>
        </div>
        <div class="row-fluid">
            <div class="span8">
                <p><?= lang('horizonteEnjoyConhecendo') ?></p>
            </div>
            <div class="span8">
                <br>
                <button onClick="irEnjoy()" class="btn btn-large btn-info" href="#"><?= lang('horizonteParticipar') ?></button>
            </div>
        </div>
    </section>

    <section id="equipe">
        <div style="padding-top:55px"></div>
        <div class="page-header">
            <h1><?= lang('horizonteEquipe') ?><small></small></h1>
        </div>
        <div class="container">
            <div id="membros" class="span12">
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/ana_paula.jpg' ?>');">
                    <div  class="transparecia caixaDescricaoMembroEquipe">
                        <b>Ana Paula Faria</b><br>FaUrb - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/ana_paula_zechlinski.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>Ana Paula Zechlinski</b><br>FaUrb - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/membro.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>Eduardo Rocha</b><br>FaUrb - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/maricio_polidori.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>Maurício Polidori</b><br>FaUrb - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/membro.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>Natalia Naoumova</b><br>FaUrb - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/otavio_peres.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>Otávio Peres</b><br>FaUrb - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/andre_peil.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>André Peil</b><br>Computação - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/membro.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>Amanda Carvalho</b><br>FaUrb - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/membro.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>Amanda Ronca</b><br>FaUrb - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/estela_polidori.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>Estela Polidori</b><br>FaUrb - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/gabriela_cavalheiro.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>Gabriela Cavalheiro</b><br>FaUrb - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/membro.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>Giovana Bandeira</b><br>FaUrb - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/glauco_roberto.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>Glauco Roberto</b><br>Computação - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/lucas_prezotto.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>Lucas Prezotto</b><br>FaUrb - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/luciano_cerentini.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>Luciano Oliveira</b><br>FaUrb - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/maiga_yokemura.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>Maiga Youkemura</b><br>FaUrb - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/membro.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>Matheus Costa</b><br>FaUrb - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/otavio_vianna.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>Otávio Viana</b><br>FaUrb - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/membro.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>Rafaela Pinto</b><br>FaUrb - UFPel
                    </div>
                </div>
                <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/membro.jpg' ?>');">
                    <div class="transparecia caixaDescricaoMembroEquipe">
                        <b>Rodolfo Ribeiro</b><br>FaUrb - UFPel
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?
    foreach ($projetos as $projeto) {
        ?>
        <section id="projeto<?= $projeto->id ?>">
            <div style="padding-top:35px"></div>
            <div class="page-header">
                <h1><?= $projeto->nome ?><small></small></h1>
            </div>
            <? if ($projeto->objetivos != '') {
                ?><p><?= $projeto->objetivos ?></p><?
            }
            ?>

            <? if ($projeto->problemajustificacao != '') {
                ?>  <h3><?= lang('horizonteProjetoProblemaJustificacao') ?></h3>
                <p><?= $projeto->problemajustificacao ?></p><?
            }
            ?>

            <? if ($projeto->fundamentos != '') {
                ?>  <h3><?= lang('horizonteProjetoFundamentos') ?></h3>
                <p><?= $projeto->fundamentos ?></p><?
            }
            ?>

            <? if ($projeto->resultados != '') {
                ?>  <h3><?= lang('horizonteProjetoResultados') ?></h3>
                <p><?= $projeto->resultados ?></p><?
            }
            ?>
        </section>
        <?
    }
    ?>
    
</div>    
    <footer class="footer" style="font-size:11px" align="center" >
        <div class="container">
            <hr>
            <p>
            <?= lang('horizonteO') ?><a href="<?= BASE_URL ?>" target="_blank"><?= ' ' . $programa->nome ?></a> <?= lang('horizonteProducaoDe') ?> <a href="http://www.ufpel.edu.br/faurb/laburb/" target="_blank">LabUrb</a>, <a href="http://faurb.ufpel.edu.br/" target="_blank">FAUrb</a> e <a href="http://ufpel.edu.com/" target="_blank">UFPel</a>.
            <?= lang('horizonteEntreEmContato') ?> <a href="mailto:horizonte4zeros@gmail.com"><?= lang('horizonteContato') ?></a>. 
            <br><?= lang('horizonteVisitantes') ?>
                <a href="#" target="blank" >
                    <img alt="Website counter" hspace="0" vspace="0" border="0" src="http://legitfreecounters.com/6554002-EE2D826E78DDFC18F85ACE62DA35116F/counter.img?theme=7&digits=5&siteId=6"/>
                </a>
                <noscript>
                <br/>
                <a href="#"></a><br><a href="http://www.alexa.com/siteinfo/ireel.com" target="_blank">ireel</a>
                </noscript>
            </p>
            <br>
        </div>
    </footer>

    
</div>
<script>

        $('#membros div').mouseenter(function() {
            $(this).find('div').show();
        });
        $('#membros div').mouseleave(function() {

            $(this).find('div').hide();
        });
        function participarPeopleGrid(){
            location.href = '<?= BASE_URL ?>peopleGrid/';
        }
        function irEnjoy() {
            location.href = '<?= BASE_URL ?>site/enjoy';
        }

</script>
<?$this->load->view('../../static/views/rodapeView')?>