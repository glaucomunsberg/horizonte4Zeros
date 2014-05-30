<? $this->load->view('../../static/views/cabecalhoPublicoView') ?>
<script src="<?=BASE_URL?>static/js/jquery.zoomooz-helpers.js"></script>
<script src="<?=BASE_URL?>static/js/jquery.zoomooz-anim.js"></script>
<script src="<?=BASE_URL?>static/js/jquery.zoomooz-core.js"></script>
<script src="<?=BASE_URL?>static/js/jquery.zoomooz-zoomTarget.js"></script>
<script src="<?=BASE_URL?>static/js/jquery.zoomooz-zoomButton.js"></script>
<script src="<?=BASE_URL?>static/js/jquery.zoomooz-zoomContainer.js"></script>
<script src="<?=BASE_URL?>static/js/purecssmatrix.js"></script>
<script src="<?=BASE_URL?>static/js/sylvester.src.stripped.js"></script>
<div id="container" style="margin-left: 30px !important;margin-right: 10px">
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
                <a class="brand active" style="margin-top: 3px; font-size: 25px" href="<?=BASE_URL?>"><?= lang('horizonteInicio') ?></a>
                <div class="nav-collapse collapse" >
                    <ul class="nav">
                        <li class=""><a href="<?= BASE_URL ?>site/site_horizonte">Em 2014</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="row-fluid" style="margin-top:50px">
        <div class="row-fluid">
            <div id="loading" class="hero-unit">
                <div class="span12" style="text-align: center">
                    <img src="<?=BASE_URL?>static/img/ajax-loader.gif" width="16" height="11" alt="ajax-loader"/>
                    <?=lang('horizonteCarregando')?>
        </div>
        
    </div>
    <div id="conteudo" class="row-fluid" style="text-align: center">
        <div class="span6" id="esquerda">
            <? $this->load->view('jaguarao/horizonte2013EsquerdaView') ?>
        </div>
        <div class="span6" id="direita">
            <? $this->load->view('jaguarao/horizonte2013DireitaView') ?>
        </div>
    </div>
</div>
<script>
  
  jQuery(window).load(function () {
        $('#loading').hide('blind'); 
  });
  
  $('#membros div').mouseenter(function() {
        $(this).find('div').show();
    });
    $('#membros div').mouseleave(function() {

        $(this).find('div').hide();
    });
  
  $('#conteudo quadro').each(function(){
      var number = Math.floor(Math.random() * 3);
      console.log(number);
        switch(number){
          case 0:
            $(this).addClass("rotacao");
            $(this).addClass("zoomTarget");
            break;
          case 1:
            $(this).addClass("entorta");
            $(this).addClass("zoomTarget");
            break;
          case 2:
            $(this).addClass("rotacaoInversa");
            $(this).addClass("zoomTarget");
            break;
                   
      }
      
      //$(this).attr("data-targetsize","0.45")
  })
  
</script>
<?$this->load->view('../../static/views/rodapeView')?>
