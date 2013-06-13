<?$this->load->view('../../static/views/cabecalhoPublicoView')?>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<div class="container">
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>
                <a class="brand" style="margin-top: 3px; font-size: 25px" href="<?=BASE_URL.'peopleGrid/'?>"><?=lang('peopleGridPeopleGrid')?></a>
                <div class="nav-collapse">
                    <ul class="nav">
                        <li class="active"><a href="#home"><?=lang('peopleGridHome')?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <section id="home">
        <div class="row" style="margin-top: 10px">
            <div class="span12">
                <div class="page-header">
                    <h1><?=lang('peopleGridPeopleGrid')?> <small><?=lang('peopleGridMundoDiferente')?></small></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Apresentação-->
    <section id="information">
        <div class="row" >
            <div class="span4">
                <a  class="thumbnail">
                    <img src="<?=BASE_URL?>static/img/jaguaraoEmGrid.png" alt="" style="width: 200px; height: auto">
                </a>
            </div>
            <div class="span8">
                <div class="hero-unit">
                    <p>
                        <?=lang('peopleGridIntroducao')?>
                    </p>
                    <p>
                        <a id="comecarJaguarao" class="btn btn-success btn-large"><?= lang('peopleGridVamosComecar') ?></a>
                    </p>
                    
                </div>
                <p>
                    <span class="label label-info"><?=lang('peopleGridLembreSe') ?></span> <?=lang('peopleGridLembreSeInfo') ?>
                </p>
            </div>
        </div>
    </section>
    <div id="fb-root"></div>
    
   <script>  
        $('#comecarJaguarao').click(function(){
            location.href = '<?=BASE_URL?>peopleGrid/jaguarao/<?=@$userOn->fb_id?>';
        });
       
    </script>
<?$this->load->view('../../static/views/rodapeView')?>