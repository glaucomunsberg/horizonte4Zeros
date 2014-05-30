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
        <div class="container">
            <div class="page-header" style="margin-top: 80px">
                <h2><?=lang('horizonteEnjoy')?><small><?=lang('horizonteEnjoyMensagem')?></small></h2>
            </div>
            <div id="fb-root"></div>
            <script src="//connect.facebook.net/en_US/all.js"></script>
            <div class="row">
                <div class="span6">
                    <?
                    if(@$resposta != ''){
                        echo '<span class="label label-warning">Ooops!</span>';
                        echo @$resposta;
                        echo '<br>';
                    }
                    ?>
                    <div style="margin-left: 35%;margin-top:35%">
                        <button onClick="logarComFacebookId()" class="btn btn-primary btn-large"><?=lang('horizonteJaSouMembro')?></button>
                    </div>

                </div>
                <div class="span6">
                    <p>
                        <iframe src="https://www.facebook.com/plugins/registration?
                                     client_id=<?=$this->config->item('app_fb_id')?>&
                                     redirect_uri=http%3A%2F%2Fhorizonte4zeros.ufpel.edu.br%2Fsite%2FcadastroPessoa&
                                     fields=name,birthday,gender,location,email,captcha"
                                scrolling="auto"
                                frameborder="no"
                                style="border:none"
                                allowTransparency="true"
                                width="100%"
                                height="395">
                        </iframe>
                        <br>
                    </p>
                </div>
        </div>
    </section>
</div>
        <script>
            
            function logar(){
                FB.init({ 
                    appId: '<?= $this->config->item('app_fb_id') ?>', 
                    cookie: true, 
                    xfbml: true, 
                    status: true });

                FB.getLoginStatus(function (response) {
                    if (response.authResponse) {
                        $('#AccessToken').val(response.authResponse.accessToken);
                    } else {
                        log.console('erro ao usar o login');
                    }
                });
                FB.getLoginStatus(function(response) {
                    if (response.status === 'connected') {
                      alert ("Your UID is " + response.authResponse.userID);
                    }
                  });
            }
            
            function logarComFacebookId(){
                FB.init({ 
                    appId: '<?= $this->config->item('app_fb_id') ?>', 
                    cookie: true, 
                    xfbml: true, 
                    status: true
                });
                FB.getLoginStatus(function(response) {
                    if (response.status === 'connected') {
                        location.href = '<?=BASE_URL?>site/logarComFacebook/'+response.authResponse.userID;
                    
                    }
                });
            }
        </script>
<?$this->load->view('../../static/views/rodapeView')?>