<? $this->load->view('../../static/views/cabecalhoPublicoView') ?>
<script src="<?=BASE_URL?>static/js/init.js"></script>
<div id="container" style="margin-left: 30px !important;margin-right: 10px">
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
                <a class="brand active" style="margin-top: 3px; font-size: 25px" href="<?= BASE_URL ?>"><?= lang('horizonteInicio') ?></a>
                <div class="nav-collapse collapse" >
                    <ul class="nav">
                        <li><a href="#home">Contéudo</a></li>
                        <li><a href="#about">Informações</a></li>
                        <li herf=""><a href="<?= BASE_URL ?>site/projeto2013_horizonte">Em 2013</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section id="intro" data-speed="6" data-type="background">
        <div class="container">
            <div class="hero-unit">
                <h2>Horizonte4Zeros <small><?=$programa->subtitulo?></small></h2>
                <p><?=$programa->resumo?></p>
            </div>
            <div id="loading" class="hero-unit">
                <div class="span12" style="text-align: center">
                    <img src="<?= BASE_URL ?>static/img/ajax-loader.gif" width="16" height="11" alt="ajax-loader"/>
                    <?= lang('horizonteCarregando') ?>
                </div>

            </div>
        </div>
    </section>

    <!-- Section #2 -->
    <section id="home" data-speed="4" data-type="background">
        <div class="container">
            <div class="row-fluid">
                <div class="span4 well">
                    <img src="<?=BASE_URL?>static/img/wordpress.png" class="pull-left">
                    <h2> Encontro pré-Congresso de Iniciação Científica-CIC</h2>
                    <p>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img  src="http://desenvolvimentourbanoemjaguarao.files.wordpress.com/2014/07/aa.jpg">
                            </a>
                        </div>
                    </p>
                    <p><a class="btn btn-success" style="margin-top:10px" href="http://desenvolvimentourbanoemjaguarao.wordpress.com/2014/07/03/encontro-pre-congresso-de-iniciacao-cientifica-cic/">Leia mais &raquo;</a></p>
                </div>


                <div class="span4 well">
                    <img src="<?=BASE_URL?>static/img/youtube.png" class="pull-left">
                    <h2> O QUE É O PROEXT?</h2>
                    <p>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img  src="http://desenvolvimentourbanoemjaguarao.wordpress.com/type/video/">
                            </a>
                        </div>
                    </p>
                    <p><a class="btn btn-success" style="margin-top:10px" href="http://desenvolvimentourbanoemjaguarao.wordpress.com/2014/06/24/o-que-e-o-proext/">Leia mais &raquo;</a></p>
                </div>
                <div class="span4 well">
                    <img src="<?=BASE_URL?>static/img/wordpress.png" class="pull-left">
                    <h2> Reunião com a Prefeitura de Jaguarão</h2>
                    <p>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img  src="">
                            </a>
                        </div>
                    </p>
                    <p><a class="btn btn-success" style="margin-top:10px" href="http://desenvolvimentourbanoemjaguarao.wordpress.com/2014/06/28/reuniao-com-a-prefeitura-de-jaguarao/">Leia mais &raquo;</a></p>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row-fluid">
                <div class="span12 well">
                    <img src="<?=BASE_URL?>static/img/wordpress.png" class="pull-left">
                    <h2> Oficinas do PROEXT 2014 – Introdução ao Geoprocessamento e Zoneamento Ambiental</h2>
                    <p>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img  src="http://desenvolvimentourbanoemjaguarao.files.wordpress.com/2014/06/aaa.png">
                            </a>
                        </div>
                    </p>
                    <p><a class="btn btn-success" style="margin-top:10px" href="http://desenvolvimentourbanoemjaguarao.wordpress.com/2014/06/23/oficinas-do-proext-2014-introducao-ao-geoprocessamento-e-zoneamento-ambiental/">Leia mais &raquo;</a></p>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row-fluid">
                <div class="span8 well">
                    <img src="<?=BASE_URL?>static/img/wordpress.png" class="pull-left">
                    <h2> LEVANTAMENTO FOTOGRÁFICO EM JAGUARÃO PARA O SIG-WEB</h2>
                    <p>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img  src="<?=BASE_URL?>/static/img/temp/jaguarc3a3o.jpg">
                            </a>
                        </div>
                    </p>
                    <p><a class="btn btn-success" style="margin-top:10px" href="http://desenvolvimentourbanoemjaguarao.wordpress.com/2014/06/18/levantamento-fotografico-em-jaguarao-para-o-sig-web/">Leia mais &raquo;</a></p>
                </div>
                <div class="span4 well">
                    <img src="<?=BASE_URL?>static/img/wordpress.png" class="pull-left">
                    <h2> Seminário de Integração Cultural Brasil-Uruguai</h2>
                    <p>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img  src="http://desenvolvimentourbanoemjaguarao.files.wordpress.com/2014/06/seminario1.jpg">
                            </a>
                        </div>
                    </p>
                    <p><a class="btn btn-success" style="margin-top:10px" href="http://desenvolvimentourbanoemjaguarao.wordpress.com/2014/06/04/seminario-de-integracao-cultural-brasil-uruguai/">Veja mais &raquo;</a></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row-fluid">
                <div class="span6 well">
                    <img src="<?=BASE_URL?>static/img/wordpress.png" class="pull-left">
                    <h2> O QUE É HABITAÇÃO DE INTERESSE SOCIAL?</h2>
                    <p>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img  src="https://desenvolvimentourbanoemjaguarao.files.wordpress.com/2014/05/andre.jpg">
                            </a>
                        </div>
                    </p>
                    <p><a class="btn btn-success" style="margin-top:10px" href="http://desenvolvimentourbanoemjaguarao.wordpress.com/2014/05/29/o-que-e-habitacao-de-interesse-social/">Leia mais &raquo;</a></p>
                </div>
                <div class="span6 well">
                    <img src="<?=BASE_URL?>static/img/wordpress.png" class="pull-left">
                    <h2> As ruas de Jaguarão</h2>
                    <p>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img  src="https://desenvolvimentourbanoemjaguarao.files.wordpress.com/2014/05/pedestres1.png">
                            </a>
                        </div>
                    </p>
                    <p><a class="btn btn-success" style="margin-top:10px" href="http://desenvolvimentourbanoemjaguarao.wordpress.com/2014/05/29/as-ruas-de-jaguarao/ ">Veja mais &raquo;</a></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row-fluid">
                <div class="span8 well">
                    <img src="<?=BASE_URL?>static/img/wordpress.png" class="pull-left">
                    <h2>Vídeo PROEXT</h2>
                    <p>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img  src="http://desenvolvimentourbanoemjaguarao.files.wordpress.com/2014/05/wp_20140522_15_52_36_pro.jpg?w=645">
                            </a>
                        </div>
                    </p>
                    <p><a class="btn btn-success" style="margin-top:10px" href="http://desenvolvimentourbanoemjaguarao.wordpress.com/2014/05/23/video-proext/">Leia mais &raquo;</a></p>
                </div>
                <div class="span4 well">
                    <img src="<?=BASE_URL?>static/img/flickr.png" class="pull-left">
                    <h2>Álbuns</h2>
                    <p>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img  src="https://farm8.staticflickr.com/7354/11258282106_99561aacb0.jpg">
                            </a>
                        </div>
                    </p>
                    <p><a class="btn btn-success" style="margin-top:10px" href="https://www.flickr.com/photos/horizonte4zeros/sets/">Veja mais &raquo;</a></p>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span4 well">
                    <img src="<?=BASE_URL?>static/img/flickr.png" class="pull-left">
                    <h2>População</h2>
                    <p>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img  src="https://farm4.staticflickr.com/3772/11258361293_862c8eaf12.jpg">
                            </a>
                        </div>
                    </p>
                    <p><a class="btn btn-success" style="margin-top:10px" href="https://www.flickr.com/photos/horizonte4zeros/11258361293/">Veja mais &raquo;</a></p>
                </div><!-- /.span4 -->
                <div class="span4 well">
                    <img src="<?=BASE_URL?>static/img/flickr.png" class="pull-left">
                    <h2>Planejamento</h2>
                    <p>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img  src="https://farm8.staticflickr.com/7374/11437889914_403da63aed.jpg">
                            </a>
                        </div>
                    </p>
                    <p><a class="btn btn-success" style="margin-top:10px" href="https://www.flickr.com/photos/horizonte4zeros/11437889914/">Veja mais &raquo;</a></p>
                </div><!-- /.span4 -->
                <div class="span4 well">
                    <img src="<?=BASE_URL?>static/img/wordpress.png" class="pull-left">
                    <h2>Delineamento Inicial para Zoneamento Ambiental Urbano</h2>
                    <p>O Programa “Cidade para todos: cultura digital e ambiente” do PROEXT 2014 inicia o compartilhamento das informações iniciais, coletadas na cidade de Jaguarão-RS...</p>
                    <p><a class="btn btn-success" href="http://desenvolvimentourbanoemjaguarao.wordpress.com/2014/05/09/delineamento-inicial-para-zoneamento-ambiental-urbano-3/">Leia Mais &raquo;</a></p>
                </div><!-- /.span4 -->
            </div>
            <div class="row-fluid">
                <div class="span4 well">
                    <img src="<?=BASE_URL?>static/img/wordpress.png" class="pull-left">
                    <h2>Sejam Bem Vindos</h2>
                    <p>Com os novos bolsistas do PROBEC, o LabUrb ganha ainda mais para os seus projetos. Ocorreu em 30 de abril, a primeira reunião com os 4 alunos selecionados: Leonardo Scherer, Karina Schmidt, Morgana Baron e Franciele Fraga, além dos professores responsáveis...</p>
                    <p><a class="btn btn-success" href="http://desenvolvimentourbanoemjaguarao.wordpress.com/2014/05/06/10325223_517288521710363_6742285397716175612_n-jpg/">Leia Mais &raquo;</a></p>
                </div><!-- /.span4 -->
                <div class="span4 well">
                    <img src="<?=BASE_URL?>static/img/flickr.png" class="pull-left">
                    <h2>Participação</h2>
                    <p>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img  src="https://farm3.staticflickr.com/2808/11258189325_3ff0c89143.jpg">
                            </a>
                        </div>
                    </p>
                    <p><a class="btn btn-success" style="margin-top:10px" href="https://www.flickr.com/photos/horizonte4zeros/11258189325/">Veja mais &raquo;</a></p>
                </div><!-- /.span4 -->
                <div class="span4 well">
                    <img src="<?=BASE_URL?>static/img/wordpress.png" class="pull-left">
                    <h2>Mapa MNLM</h2>
                    <p>Mapa síntese da oficina realizada em Jaguarão, com o Movimento Nacional de luta pela Moradia, representado pelos moradores da cidade. Os círculos verdes indicam onde as pessoas sugerem que sejam localizadas as habitações de interesse social; os círculos laranja indicam o contrário, onde as pessoas acham inadequado para isso...</p>
                    <p><a class="btn btn-success" href="http://desenvolvimentourbanoemjaguarao.wordpress.com/2014/05/01/mapa-mnlm/">Leia Mais &raquo;</a></p>
                </div><!-- /.span4 -->
            </div>
            <div class="row-fluid">
                <div class="span12 well">
                    <h2>PROEXT de 2014</h2>
                    <p>Com vontade renovada e novos colaboradores  o PROEXT está de volta.  O programa de extensão  “Cidade para todos, cultura digital e ambiente: compartilhando o espaço de Jaguarão, RS” trabalhará com o espaço urbano da cidade de fronteira, em parceria com a Prefeitura Municipal Municipal, Secretaria de Planejamento e Urbanismo, Secretaria de Cultura e Turismo e Gabinete do Vice Prefeito...</p>
                    <p><a class="btn btn-success" href="http://desenvolvimentourbanoemjaguarao.wordpress.com/2014/04/01/proext-2014/">Leia Mais &raquo;</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section #3 -->
    <section id="about" data-speed="2" data-type="background">
        <div class="container">
            <div class="page-header">
                <h1>Informações Gerais <small> sobre os projetos</small></h1>
            </div>
            <div class="row-fluid">
                <div class="span4">
                    <h2>Projetos</h2>
                    <p><?=$projeto1->nome?></p>
                    <p><?=$projeto2->nome?></p>
                    <p><?=$projeto3->nome?></p>
                    <p><a class="btn btn-success" href="http://horizonte4zeros.ufpel.edu.br/site/site_desenv">Ver Mais &raquo;</a></p>
                </div><!-- /.span4 -->
                <div id="equipe" class="span4">
                    <h2>Equipe</h2>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="<?= IMG . '/profiles/ana_paula.jpg' ?>">
                        </a>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="<?= IMG . '/profiles/ana_paula_zechlinski.jpg' ?>">
                        </a>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="<?= IMG . '/profiles/eduardo_rocha.jpg' ?>">
                        </a>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="<?= IMG . '/profiles/mauricio_polidori.jpg' ?>">
                        </a>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="<?= IMG . '/profiles/otavio_peres.jpg' ?>">
                        </a>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="<?= IMG . '/profiles/andre_peil.jpg' ?>">
                        </a>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" style="-webkit-filter: grayscale(100%); -moz-filter: grayscale(100%); filter: grayscale(100%);" src="<?= IMG . '/profiles/clarissa_neutzling.jpg' ?>">
                        </a>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="<?= IMG . '/profiles/glauco_roberto.jpg' ?>">
                        </a>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="<?= IMG . '/profiles/otavio_vianna.jpg' ?>">
                        </a>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="<?= IMG . '/profiles/gabriela_cavalheiro.jpg' ?>">
                        </a>
                    </div>
                </div><!-- /.span4 -->
                <div class="span4">
                    <h2>Links</h2>
                    <p><a style="text-decoration: none;color: white" href="http://desenvolvimentourbanoemjaguarao.wordpress.com/"><p>Blog</p></a></p>
                    <p><a style="text-decoration: none;color: white" href="https://www.flickr.com/photos/horizonte4zeros/"><p>Flickr</p></a></p>
                    <p><a style="text-decoration: none;color: white" href="https://www.facebook.com/groups/562583590428751/"><p>Facebook</p></a></p>
                </div><!-- /.span4 -->
            </div>
        </div>
    </section>
</div>
<style type="text/css">
                #intro { 
                        background: url(<?=BASE_URL?>static/img/parallax_intro.png) 50% 0 fixed; 
                        height: auto;  
                        margin: 0 auto; 
                    width: 100%; 
                    position: relative; 
                    box-shadow: 0 0 50px rgba(0,0,0,0.8);
                    padding: 100px 0;
                }
                #home { 
                        background: url(<?=BASE_URL?>static/img/parallax_home.jpg) 50% 0 fixed; 
                        height: auto;  
                        margin: 0 auto; 
                    width: 100%; 
                    position: relative; 
                    box-shadow: 0 0 50px rgba(0,0,0,0.8);
                    padding: 200px 0;
                }
                #about { 
                        background: url(<?=BASE_URL?>static/img/parallax_about.png) 50% 0 fixed; 
                        height: auto;
                        margin: 0 auto; 
                    width: 100%; 
                    position: relative; 
                    box-shadow: 0 0 50px rgba(0,0,0,0.8);
                    padding: 100px 0;
                    color: #fff;
                }

                /* Non-essential demo stuff */
                .hero-unit {
                        background-color: #fff;
                    box-shadow: 0 0 20px rgba(0,0,0,0.1);
                }
                .media-object { width: 64px; height: 64px; padding-bottom: 30px }
</style>
<script>
  
  jQuery(window).load(function () {
        $('#loading').hide('blind'); 
  });
  $('#equipe div a').click(function() {
   window.location = 'http://horizonte4zeros.ufpel.edu.br/site/site_desenv#equipe'   
  });
</script>
<?$this->load->view('../../static/views/rodapeView')?>
