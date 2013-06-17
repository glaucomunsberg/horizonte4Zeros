<div class="row">
    <div class="span5">
        <img src="<?=BASE_URL?>static/img/flickr.png" class="pull-left">
        <div class="hero-unit">
            <div class="thumbnail">
                <img src="http://farm3.staticflickr.com/2862/8959344135_2e3e90466d.jpg" alt="">
                <div class="caption">
                  <h5>Flickr!</h5>
                  <p>Visite o primeiro set de imagens</p>
                  <p>   
                    <a href="http://www.flickr.com/photos/horizonte4zeros/sets/72157633950110234/" class="btn btn-success pull-right"><?=lang('peopleGridVerMais')?></a>
                  </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span5">
        <img src="<?=BASE_URL?>static/img/wordpress.png" class="pull-left">
        <div class="hero-unit btn-primary">
            <a href="#" class="thumbnail">
                <img src="http://desenvolvimentourbanoemjaguarao.files.wordpress.com/2013/06/dsc_0044.jpg" alt="">
            </a>
            <p>
                <h3>H4Z + P9 em Jaguarão novamente</h3>
                Retomando os trabalhos na terça de frio do dia 21 de maio, mais um dia de diagnóstico do uso do solo em Jaguarão, contando com a colaboração dos alunos de Projeto 9.  Confiram:
            </p>
            <p>
                <a href="http://desenvolvimentourbanoemjaguarao.wordpress.com/2013/06/05/h4z-p9-em-jaguarao-novamente/" class="btn btn-success pull-right"><?=lang('peopleGridLeiaMais')?></a>
            </p>
        </div>
    </div>
</div>
<div class="row">
    <div class="span5">
        <img src="<?=BASE_URL?>static/img/youtube.png" class="pull-left">
        <div class="hero-unit btn-primary">
            <ul class="thumbnails">
              <li class="span3">
                <a href="#" class="thumbnail">
                  <img src="http://desenvolvimentourbanoemjaguarao.files.wordpress.com/2013/06/gabi.jpg?w=695">
                </a>
              </li>
              <p>
                  <h2>Quem é Gabi Cardoso?</h2>
              </p>
              <p>
                  Gabi Cardoso é uma entrevistadora e celebridade comentada pelos corredores da FAUrb/UFPel.  Através de  de uma maneira divertida e informativa, conversa com diversas figuras do meio arquitetônico, mostrando o que acontece de mais interessante nos diversos espaços da Faculdade de Arquitetura e Urbanismo.
              </p>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="span5">
        <img src="<?=BASE_URL?>static/img/youtube.png" class="pull-left">
        <div class="hero-unit btn-primary">
            <ul class="thumbnails">
              <iframe width="270" height="160" src="http://www.youtube.com/embed/oXZBn7XMrto" frameborder="0" allowfullscreen></iframe>
              <p>
                  Gabi Cardoso # Mauricio Polidori
              </p>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="span5">
        <img src="<?=BASE_URL?>static/img/personal.png" class="pull-left">
        <div class="hero-unit">
            <h3 style="padding-top:10px"><?= lang('peopleGridPessoasLigadas') ?></h3>
                <?
                foreach ($pessoas as $pessoa) {
                    ?>
                    <div title="<?= $pessoa->nome ?>" style="float:left; margin:2px; width:40px; height: 40px;background-repeat: no-repeat;background-size: auto;background-image: url('http://graph.facebook.com/<?= $pessoa->fb_id ?>/picture')"></div>
                    <?
                }
                ?>
                <br style="clear:both;" />
                <a href="<?=BASE_URL.'site/enjoy'?>" ><button class="btn btn-info" style="margin-top:10px"><?= lang('horizonteEntrar') ?></button></a>
        </div>
    </div>
</div>
<section id="paraformal">
    <div class="row">
        <div class="span5">
            <img src="<?=BASE_URL?>static/img/info.png" class="pull-left">
            <div class="hero-unit btn-info">
                <h1>
                    <?=$projeto3->nome.' ?'?>
                </h1>
                <p>
                    <?=$projeto3->resumo?>
                </p>
            </div>
        </div>
    </div>
</section>
<div class="row">
    <div class="span5">
        <img src="<?=BASE_URL?>static/img/wordpress.png" class="pull-left">
        <div class="hero-unit">
            <div class="thumbnail">
                <img src="http://desenvolvimentourbanoemjaguarao.files.wordpress.com/2013/06/fundo4.jpg?w=695" alt="">
                <div class="caption">
                  <h5>Horizonte</h5>
                  <p>s.m. Plano que passa pelo observador e é perpendicular à direção do fio de prumo.
                      <br>Parte da terra e do céu que limita esse plano.Geologia Camada do solo, sensivelmente homogênea do ponto de vista de sua composição, estrutura, aspectos físicos e químicos.</p>
                  <p>   
                  <a href="http://desenvolvimentourbanoemjaguarao.wordpress.com/2013/06/03/horizonte/" class="btn btn-success pull-right"><?=lang('peopleGridLeiaMais')?></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="drup">
    <div class="row">
        <div class="span5">
            <img src="<?=BASE_URL?>static/img/info.png" class="pull-left">
            <div class="hero-unit btn-info">
                <h1>
                    <?=$projeto1->nome.' ?'?>
                </h1>
                <p>
                    <?=$projeto1->resumo?>
                </p>
            </div>
        </div>
    </div>
</section>