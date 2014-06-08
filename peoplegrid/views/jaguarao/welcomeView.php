<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title><?=lang('horizonteDoisMundos')?></title>
    <link rel="shortcut icon" href="<?=IMG?>/favicon.ico" type="image/x-icon" />
    <script type="text/javascript" src="<?=BASE_URL?>static/js/jquery-1.7.min.js"></script>
    <script type="text/javascript" src="<?=BASE_URL?>static/js/plax.js"></script>
  </head>
  <body>
    <div id="loading" class="row-fluid">
        <div class="span12">
            <img src="<?=BASE_URL?>static/img/ajax-loader.gif" width="16" height="11" alt="ajax-loader"/>
            <?=lang('horizonteCarregando')?>
        </div>
    </div>
    <div id="shell">
      <img src="<?=BASE_URL?>static/img/logo_horizonte.png" onClick="paraOMundo('site_horizonte')" width="200" height="auto" data-xrange="90" data-yrange="90" id="plax-horizonte"/>
      <img src="<?=BASE_URL?>static/img/logo_quatro.png" width="100" height="100" data-xrange="10" data-yrange="10" id="plax-logo"/>
      <img src="<?=BASE_URL?>static/img/logo_digital.png" onClick="paraOMundo('site_digital')" width="200" height="auto" data-xrange="200" data-yrange="110" data-invert="true" id="plax-digital"/>
      <img src="<?=BASE_URL?>static/img/logo_desenv_jaguarao.png" onClick="paraOMundo('site_desenv')" width="200" height="auto" data-xrange="90" data-yrange="90" data-invert="true" id="plax-desenv"/>
    </div>
    <style type="text/css">
      * {
        margin: -5px;
        padding: 0px;
      }
      div#shell {
        display: block;
        position: relative;
        margin: 100px auto;
        width: 318px;
        height: 318px;
      }
      div#shell{
        z-index: 1;
      }
      img#plax-horizonte {
        position: absolute;
        z-index: 4;
        top: 94px;
        left: 191px;
        cursor: pointer;
      }
      img#plax-logo {
        position: absolute;
        z-index: 1;
        top: 94px;
        left: 93px;
      }
      img#plax-digital {
        position: absolute;
        z-index: 3;
        top: 20px;
        left: -90px;
        cursor: pointer;
      }
      img#plax-desenv {
        position: absolute;
        top: 185px;
        left: -60px;
        z-index: 2;
        cursor: pointer;
      }
    </style>
    <script type="text/javascript">
      var mundoEscolhido= '';
      $(document).load(function(){
        $('#loading').show();
      });
      $(document).ready(function () {
        $('#loading').hide();
        $('#shell img').plaxify();
        $.plax.enable();
      });
      
      function paraOMundo($mundo){
        mundoEscolhido =$mundo;
        $('#shell img').hide('explode');
        setTimeout( vaiAoMundo, 1000 );         
      }
      function vaiAoMundo() {
          if(mundoEscolhido == 'site_horizonte'){
              location.href = '<?=BASE_URL?>site/'+mundoEscolhido;
          }
          if(mundoEscolhido == 'site_digital'){
              location.href = '<?=BASE_URL?>site/site_desenv';
          }
          if(mundoEscolhido == 'site_desenv'){
              location.href = '<?=BASE_URL?>site/projeto2013_desenv';
          }
          
      }
    </script>
  </body>
</html>
