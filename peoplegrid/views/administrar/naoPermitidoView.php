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
    
        <div class="row">
            <div class="span12">
                <div class="hero-unit">
                    <?=lang('administrarNaoPermitido')?>
                    <button onClick="voltar()" class="btn btn-primary btn-large"><?=lang('administrarVoltar')?></button>
                </div>
            </div>         
        </div>
</div>
<script>
    function voltar(){
        location.href = '<?=BASE_URL?>';
    }
</script>
<?$this->load->view('../../static/views/rodapeView')?>