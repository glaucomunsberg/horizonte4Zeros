<? $this->load->view('../../static/views/cabecalhoPublicoView') ?>
<div id="container" style="margin-left: 30px !important;margin-right: 10px">
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
                <a class="brand active" style="margin-top: 3px; font-size: 25px" href="<?= BASE_URL ?>"><?= lang('horizonteInicio') ?></a>
                <div class="nav-collapse collapse" >
                    <ul class="nav">
                        <li class=""><a href="#home"><?= lang('horizonteHome') ?></a></li>
                        <li class=""><a href="#projetos"><?= lang('horizonteProjetos') ?></a> </li>
                        <li class=""><a href="#enjoy"><?= lang('horizonteEnjoy') ?></a></li>
                        <li class=""><a href="#equipe"><?= lang('horizonteEquipe') ?></a></li>
                        <li class=""><a href="http://localhost/horizonte4Zeros/site/projeto2013_desenv">Em 2013</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- RESUMO -->
    <!-- =========================================================== -->
    <!-- =========================================================== -->
    <!-- =========================================================== -->    
    <div class="container">
        <section id="home">
            <div style="padding-top:55px"></div>
            <div class="page-header">
                <h2>2014: <?= $programa->nome ?> <small><?= $programa->subtitulo ?></small></h2>
            </div>
            <div class="row-fluid">
                <div class="row" style="margin-left: 30px !important;margin-right: 30px">
                    <div class="span6">
                        <p align="justify">
                            <?= $programa->resumo ?>
                        </p>
                    </div>
                    <div class="span6">
                        <div id="myCarousel" class="carousel slide">

                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="active item">
                                    <img src="<?= IMG . '/carrousel/01.jpg' ?>"  width="640" heigth="425" alt="">
                                    <div class="carousel-caption">

                                        <h4>Professor Maurício Polidori ministrando a oficina de planejamento urbano.</h4> 
                                    </div>

                                </div>
                                <div class="item">
                                    <img src="<?= IMG . '/carrousel/02.jpg' ?>"  width="640" heigth="425" alt="">
                                    <div class="carousel-caption">
                                        <h4>População de Jaguarão participa das oficinas da equipe horizonte4zeros.</h4>
                                    </div>

                                </div>
                                <div class="item">
                                    <img src="<?= IMG . '/carrousel/03.jpg' ?>"  width="640" heigth="auto" alt="">
                                </div>
                                <div class="item">
                                    <img src="<?= IMG . '/carrousel/04.jpg' ?>"  width="640" heigth="auto" alt="">
                                </div>
                                <div class="item">
                                    <img src="<?= IMG . '/carrousel/05.jpg' ?>"  width="640" heigth="auto" alt="">
                                    <div class="carousel-caption">
                                        <h4>Oficinas ao ar livre foi um dos eventos da equipe horizonte4zeros.</h4>
                                    </div>

                                </div>
                                <div class="item">
                                    <img src="<?= IMG . '/carrousel/06.jpg' ?>"  width="640" heigth="auto" alt="">
                                    <div class="carousel-caption">
                                        <h4>Mateada realizada no Cerro da Pólvora em 2013.</h4>
                                    </div>

                                </div>
                            </div>
                            <!-- Carousel nav -->
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                        </div>
                    </div>
                </div></div>
        </section>            

        <!-- PROJETOS -->
        <!-- =========================================================== -->
        <!-- =========================================================== -->
        <!-- =========================================================== -->
        <section id="projetos">
            <div class="row-fluid">
                <div style="padding-top:55px"></div>
                <div class="page-header">
                    <h2><?= lang('horizonteProjetos') ?><small></small></h2>
                </div>
                <!-- TITULO DOS PROJETOS-->
                <div class="row" style="margin-left: 30px !important;margin-right: 30px">
                    <? foreach ($projetos as $projeto) { ?>
                        <div class="span4">
                            <h3><?= $projeto->nome ?></h3>
                        </div>  
                    <? } ?>
                </div>

                <!-- RESUMO DOS PROJETOS-->
                <div class="row" style="margin-left: 30px !important;margin-right: 30px">
                    <div class="span4 ">
                        <p style="text-align: justify"><?= $projeto1->resumo ?></p>
                    </div>
                    <div class="span4 ">
                        <p style="text-align: justify"><?= $projeto2->resumo ?></p>
                    </div>
                    <div class="span4 ">
                        <p style="text-align: justify"><?= $projeto3->resumo ?></p>
                    </div>
                </div>

                <!-- BOTOES LEIA MAIS-->
                <div class="row" style="margin-left: 30px !important;margin-right: 30px">
                    <? foreach ($projetos as $projeto) { ?>
                        <div class="span4 ">
                            <a href="#projeto<?= $projeto->id ?>"><?
                                switch ($projeto->id) {
                                    case 5: echo '<button class="btn btn-success">' . lang('horizonteLerMais') . '</button>';
                                        break;
                                    case 6: echo '<button class="btn btn-danger">' . lang('horizonteLerMais') . '</button>';
                                        break;
                                    case 7: echo '<button class="btn btn-info">' . lang('horizonteLerMais') . '</button>';
                                        break;
                                }
                                ?></a>
                        </div>    
                    <? } ?>
                </div>
            </div>
        </section>



        <!-- ENJOY -->
        <!-- =========================================================== -->
        <!-- =========================================================== -->
        <!-- =========================================================== -->
        <section id="enjoy">
            <div style="padding-top:55px"></div>
            <div class="page-header">
                <h2><?= lang('horizonteEnjoy') ?> <small><?= lang('horizonteEnjoySimple') ?></small></h2>
            </div>
            <div class="row-fluid">
                <div class="span7">
                    <p align="justify"><?= lang('horizonteEnjoyConhecendo') ?></p>
                    <button onClick="irEnjoy()" class="btn btn-large btn-info pull-right" href="#"><?= lang('horizonteParticipar') ?></button>
                </div>
                <div class="span5">

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
                    </div>
                </div>
            </div>
        </section>

        <!--NOTICIAS -->
        <!-- =========================================================== -->
        <!-- =========================================================== -->
        <!-- =========================================================== --> 
        <section id="news">

        </section>

        <!-- EQUIPE -->
        <!-- =========================================================== -->
        <!-- =========================================================== -->
        <!-- =========================================================== -->    

        <section id="equipe" >
            <div style="padding-top:55px"></div>
            <div class="page-header">
                <h2><?= lang('horizonteEquipe') ?><small></small></h2>
            </div>
            <div class="container">
                <h2><small> professores </small></h2>
                <div id="membros" class="span8">
                    <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/ana_paula.jpg' ?>');">
                        <div  class="transparecia caixaDescricaoMembroEquipe">
                            <b>Ana Paula Faria</b><br>FAUrb - UFPel
                        </div>
                    </div>
                    <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/ana_paula_zechlinski.jpg' ?>');">
                        <div class="transparecia caixaDescricaoMembroEquipe">
                            <b>Ana Paula Zechlinski</b><br>FAUrb - UFPel
                        </div>
                    </div>
                    <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/eduardo_rocha.jpg' ?>');">
                        <div class="transparecia caixaDescricaoMembroEquipe">
                            <b>Eduardo Rocha</b><br>FAUrb - UFPel
                        </div>
                    </div>
                    <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/mauricio_polidori.jpg' ?>');">
                        <div class="transparecia caixaDescricaoMembroEquipe">
                            <b>Maurício Polidori</b><br>FAUrb - UFPel
                        </div>
                    </div>
                    <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/otavio_peres.jpg' ?>');">
                        <div class="transparecia caixaDescricaoMembroEquipe">
                            <b>Otávio Peres</b><br>FAUrb - UFPel
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <h2><small> alunos </small></h2>
                <div id="membros" class="span12">
                    <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/andre_peil.jpg' ?>');">
                        <div class="transparecia caixaDescricaoMembroEquipe">
                            <b>André Peil</b><br>Computação - UFPel
                        </div>
                    </div>
                    <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/membro.jpg' ?>');">
                        <div class="transparecia caixaDescricaoMembroEquipe">
                            <b>Clarissa Neutzling</b><br>FAUrb - UFPel
                        </div>
                    </div>
                    <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/gabriela_cavalheiro.jpg' ?>');">
                        <div class="transparecia caixaDescricaoMembroEquipe">
                            <b>Gabriela Cavalheiro</b><br>FAUrb - UFPel
                        </div>
                    </div>
                    <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/glauco_roberto.jpg' ?>');">
                        <div class="transparecia caixaDescricaoMembroEquipe">
                            <b>Glauco Roberto</b><br>Computação - UFPel
                        </div>
                    </div>
                    <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/otavio_vianna.jpg' ?>');">
                        <div class="transparecia caixaDescricaoMembroEquipe">
                            <b>Otávio Viana</b><br>FAUrb - UFPel
                        </div>
                    </div>
                    <div class="caixaFotoMembroEquipe" style="background-image: url('<?= IMG . '/profiles/tais_beltrame.jpg' ?>');">
                        <div class="transparecia caixaDescricaoMembroEquipe">
                            <b>Taís Beltrame</b><br>FAUrb - UFPel
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROJETOS COMPLETO -->
        <!-- =========================================================== -->
        <!-- =========================================================== -->
        <!-- =========================================================== -->
        <?
        foreach ($projetos as $projeto) {
            ?>
            <section id="projeto<?= $projeto->id ?>">
                <div style="padding-top:55px"></div>
                <div class="page-header">
                    <h2><?= $projeto->nome ?><small></small></h2>
                </div>
                <? if ($projeto->objetivos != '') {
                    ?><p align="justify"><?= $projeto->objetivos ?></p><?
                }
                ?>

                <? if ($projeto->problemajustificacao != '') {
                    ?>  <h3><?= lang('horizonteProjetoProblemaJustificacao') ?></h3>
                    <p align="justify"><?= $projeto->problemajustificacao ?></p><?
                }
                ?>

                <? if ($projeto->fundamentos != '') {
                    ?>  <h3><?= lang('horizonteProjetoFundamentos') ?></h3>
                    <p align="justify"><?= $projeto->fundamentos ?></p><?
                }
                ?>

                <? if ($projeto->resultados != '') {
                    ?>  <h3><?= lang('horizonteProjetoResultados') ?></h3>
                    <p align="justify"><?= $projeto->resultados ?></p><?
                }
                ?>
            </section>
            <?
        }
        ?>


    </div>
</div>


<!-- FOOTER -->
<!-- =========================================================== -->
<!-- =========================================================== -->
<!-- =========================================================== -->
</div>    
<footer class="footer" style="font-size:11px" align="center" >
    <div class="container">
        <hr>
        <p align="justify">
            <?= lang('horizonteO') ?><a href="<?= BASE_URL ?>" target="_blank"><?= ' ' . $programa->nome ?></a> <?= lang('horizonteProducaoDe') ?> <a href="http://www.ufpel.edu.br/faurb/laburb/" target="_blank">LabUrb</a>, <a href="http://faurb.ufpel.edu.br/" target="_blank">FAUrb</a> e <a href="http://ufpel.edu.com/" target="_blank">UFPel</a>.
            <?= lang('horizonteEntreEmContato') ?> <a href="mailto:horizonte4zeros@gmail.com"><?= lang('horizonteContato') ?></a>. 
        </p>
        <br>
    </div>
</footer>


</div>
<script>
    $('#myCarousel').carousel({
        interval: 8000
    });
    $('#membros div').mouseenter(function() {
        $(this).find('div').show();
    });
    $('#membros div').mouseleave(function() {

        $(this).find('div').hide();
    });
    function irEnjoy() {
        location.href = '<?= BASE_URL ?>site/enjoy';
    }

</script>
<?
$this->load->view('../../static/views/rodapeView')?>