<!doctype html>
<html lang="pt-BR" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://www.facebook.com/2008/fbml">
    <head>
      <link rel="shortcut icon" href="<?=IMG?>/favicon.ico">
      <meta name="author" content="Glauco Roberto Munsberg">
        <meta charset="UTF-8">
        <meta name="author" content="Glauco Roberto">
        <meta name="description" content="<?=lang('cabecalhoTitle');?>">
        <title><?=lang('horizonte0000');?></title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <script>
            var BASE_URL = '<?=BASE_URL?>';
            var CSS = '<?=CSS?>';
            var IMG = '<?=IMG?>';
            var JS = '<?=JS?>';
        </script>
        <link rel="stylesheet" href="<?=CSS?>/metro-bootstrap.css">
        <link rel="stylesheet" href="<?=CSS?>/estiloPadrao.css">
        <script type="text/javascript" src="<?=JS?>/jquery-1.8.2.js"></script>
         </head>
    <body data-spy="scroll" data-target=".subnav" data-offset="50" screen_capture_injected="true">

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
                <a class="brand active" style="margin-top: 3px; font-size: 25px" href="#home"><?= lang('horizonteHome') ?></a>
                <div class="nav-collapse collapse" >
                    <ul class="nav">
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
    
    <div id="row-fluid" style="margin-top:40px">
        <div class="row-fluid">
            <div class="span12" class="zoomTarget" data-targetsize="0.45" data-duration="600" >é 1</div>
        </div>
        <div class="row">
            <div class="span3 shape shape-rotation zoomTarget" data-targetsize="0.15" data-duration="600">é 2</div>
            <div class="span3 shape shape-rotation zoomTarget" data-targetsize="0.60" data-duration="600" style="-webkit-transform: rotate(10deg) translate(0px,0px);-moz-transform: rotate(10deg) translate(0px,0px);-o-transform: rotate(10deg) translate(0px,0px)">é 3 </div>
            <div class="span3 shape shape-rotation zoomTarget" data-targetsize="0.45" data-duration="600" style="-webkit-transform: rotate(60deg) translate(0px,0px);-moz-transform: rotate(60deg) translate(0px,0px);-o-transform: rotate(60deg) translate(0px,0px)">é 4</div>
            <div class="span3 shape shape-rotation zoomTarget" data-targetsize="0.25" data-duration="600" style="-webkit-transform: rotate(40deg) translate(0px,0px);-moz-transform: rotate(40deg) translate(0px,0px);-o-transform: rotate(40deg) translate(0px,0px)">é 5</div>
        </div>
    </div>

</div>
<script>
    
   

</script>
<?$this->load->view('../../static/views/rodapeView')?>
