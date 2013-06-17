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
                <a class="brand active" style="margin-top: 3px; font-size: 25px" href="<?=BASE_URL?>"><?= lang('horizonteHome') ?></a>
                <div class="nav-collapse collapse" >
                    <ul class="nav">
                        <div class="btn-group">
                            <button class="btn dropdown-toggle" data-toggle="dropdown"><?= lang('horizonteSuaLingua'); ?> <span class="caret"></span></button>
                            <ul class="nav">
                                <li><a href="#programa"><?=lang('horizonte0000')?></a></li>
                            </ul>
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
    <div id="row-fluid" style="margin-top:40px">
        <div class="row-fluid">
            <div id="loading" class="row-fluid">
                <div class="span12" style="text-align: center">
                    <img src="<?=BASE_URL?>static/img/ajax-loader.gif" width="16" height="11" alt="ajax-loader"/>
                    <?=lang('horizonteCarregando')?>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="text-align: center">
        <div class="span5">
            <? $this->load->view('jaguarao/horizonteEsquerdaView') ?>
        </div>
        <div class="span1">
                <!-- CENTRO -->
        </div>
        <div class="span5">
            <? $this->load->view('jaguarao/horizonteDireitaView') ?>
        </div>
    </div>
</div>
<script>
    
  $(document).load(function(){
    $('#loading').show();
  });
  
  $(document).ready(function () {
    $('#loading').hide();
  });
  
</script>
<?$this->load->view('../../static/views/rodapeView')?>
