<!DOCTYPE html>
<html>
  <head>
    <title><?=lang('horizonteDoisMundos')?></title>
    <script type="text/javascript" src="<?=BASE_URL?>static/js/jquery-1.7.min.js"></script>
    <script type="text/javascript" src="<?=BASE_URL?>static/js/plax.js"></script>
  </head>
  <body>
    <div id="shell">
      <img src="<?=BASE_URL?>static/img/logo_horizonte.png" onClick="paraOMundo('exato')" width="200" height="auto" data-xrange="60" data-yrange="60" id="plax-horizonte"/>
      <img src="<?=BASE_URL?>static/img/logo_quatro.png" width="100" height="100" data-xrange="10" data-yrange="10" id="plax-logo"/>
      <img src="<?=BASE_URL?>static/img/logo_desenv_jaguarao.png" onClick="paraOMundo('desenv')" width="200" height="auto" data-xrange="60" data-yrange="60" data-invert="true" id="plax-desenv"/>
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
      img#plax-desenv {
        position: absolute;
        top: 185px;
        left: -60px;
        z-index: 2;
        cursor: pointer;
      }
    </style>
    <script type="text/javascript">
      $(document).ready(function () {
        $('#shell img').plaxify();
        $.plax.enable();
      });
      function paraOMundo($mundo){
          location.href = '<?=BASE_URL?>site/'+$mundo;
      }
    </script>
  </body>
</html>
