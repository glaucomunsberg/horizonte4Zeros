<?$this->load->view('../../static/views/cabecalhoPublicoView')?>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </a><a class="brand" href="<?=BASE_URL?>"><?=lang('horizonte0000')?></a>
        </div>
    </div>
</div>
<div id="container" style="margin-left: 30px !important;margin-right: 10px">
    <section id="home">
        <div class="page-header" style="margin-top: 80px">
            <h2><?=lang('horizonteEnjoy')?><small><?=lang('horizonteEnjoyMensagem')?></small></h2>
        </div>
        <div class="row">
            <div class="span12">
                <div class="hero-unit">
                    <?php
                        echo $resposta;
                        if(@$voltar != ''){
                            ?>
                                <button onClick="ir('<?=$voltar?>')" class="btn btn-info" href="#"><?=lang('horizonteEntrar')?></button>
                            <?
                        }
                    ?>
                    
                </div>
            </div>         
        </div>
    </section>
</div>
<script>
    function ir(url){
        location.href = url;
    }
</script>
<?$this->load->view('../../static/views/rodapeView')?>