<?$this->load->view('../../static/views/cabecalhoPublicoView')?>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
            <a class="brand" href="<?=BASE_URL?>"><?=lang('horizonteHome')?></a>
            <a class="brand" href="<?=BASE_URL.'peopleGrid/index/'.@$pessoa->fb_id?>"><?=lang('peopleGridPeopleGrid')?></a>
        </div>
    </div>
</div>
<div id="container-fluid" style="margin-left: 30px !important;margin-right: 10px; margin-top: 40px">
    <section id="home">
        <div class="row-fluid">
            <div class="page-header">
                <div style="float:left;margin:2px; width:50px;height: 50px;background-repeat: no-repeat;background-size: auto;background-image: url('http://graph.facebook.com/<?=$pessoa->fb_id?>/picture')"></div><h2><?=@$pessoa->nome?><small><?=lang('administrarAdministrarMensagem')?></small></h2>
                <p><?=lang('administrarOlaMembro')?></p>
            </div>
            
            
        </div>
        
        <div class="row-fluid">
            <div class="span12">
                <div class="tabbable tabs-left">
                    <ul id="menu" class="nav nav-tabs">
                      <li class="" id="programa"><a href="#programa"  data-toggle="tab"><?=lang('administrarPrograma')?></a></li>
                      <li class="" id="projeto2"><a href="#projeto1"  data-toggle="tab"><?=lang('horizonteProjeto1')?></a></li>
                      <li class="" id="projeto3"><a href="#projeto2"  data-toggle="tab"><?=lang('horizonteProjeto2')?></a></li>
                      <li class="" id="projeto4"><a href="#projeto3" data-toggle="tab"><?=lang('horizonteProjeto3')?></a></li>
                      <li class="" id="projeto5"><a href="#projeto4" id="projeto5" data-toggle="tab"><?=lang('horizonteProjeto4')?></a></li>
                      <li class="active" id="peopleGrid"><a  href="#peopleGrid" data-toggle="tab"><?=lang('horizontePeopleGridVerResultado')?></a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- Programa -->
                      <div class="tab-pane active" id="peopleGrid">
                         oaisais
                          
                      </div>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div id="alert" class="alert alert-info" style="display: none">
                    <button onClick="$('#alert').hide()" class="close" data-dismiss="alert">×</button>
                    <div id="alertMensagem"></div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $('#menu li').click(function(){
        if( this.id != 'peopleGrid'){
            location.href = BASE_URL+'administrar/index/<?=@$pessoa->fb_id?>';
        }
    });

</script>
<?$this->load->view('../../static/views/rodapeView')?>