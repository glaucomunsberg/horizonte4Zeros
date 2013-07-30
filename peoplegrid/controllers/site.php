<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
        function __construct() {
            parent::__construct();
            $this->load->model('pessoasModel', 'pessoasModel');
            $this->load->model('projetoModel', 'projetoModel');
            $this->load->model('programaModel','programaModel');
        }
	public function index()
	{
              $this->load->view('jaguarao/welcomeView');  
	}
        
        
        public function site_desenv(){
            $this->loadLanguage();
            $data['pessoas'] = $this->pessoasModel->getPessoasOnFacebook();
            $data['programa'] = $this->programaModel->getPrograma(1);
            $data['projetos'] = $this->projetoModel->getProjetosByPrograma(1);
            $data['projeto1'] = $this->projetoModel->getProjeto(1);
            $data['projeto2'] = $this->projetoModel->getProjeto(2);
            $data['projeto3'] = $this->projetoModel->getProjeto(3);
            $data['projeto4'] = $this->projetoModel->getProjeto(4);
            $this->load->view('jaguarao/desenvView',$data);
        }
        
        public function site_horizonte(){
            $this->loadLanguage();
            $data['pessoas'] = $this->pessoasModel->getPessoasOnFacebook();
            $data['programa'] = $this->programaModel->getPrograma(1);
            $data['projetos'] = $this->projetoModel->getProjetosByPrograma(1);
            $data['projeto1'] = $this->projetoModel->getProjeto(1);
            $data['projeto2'] = $this->projetoModel->getProjeto(2);
            $data['projeto3'] = $this->projetoModel->getProjeto(3);
            $data['projeto4'] = $this->projetoModel->getProjeto(4);
            $this->load->view('jaguarao/horizonteView',$data);
        }
        public function enjoy(){
                $this->load->view('enjoy/enjoyFiltroView');
        }
        
        public function cadastroPessoa(){
            if (@$_REQUEST['signed_request']) {
                  define('FACEBOOK_APP_ID', $this->config->item('app_fb_id'));
                  define('FACEBOOK_SECRET', $this->config->item('app_fb_secret'));
                  $response = $this->parse_signed_request($_REQUEST['signed_request'],FACEBOOK_SECRET);
                  $dados = $response['registration'];
                  if( $this->pessoasModel->getPessoaByUserIdFacebook($response['user_id']) != null){
                      if($this->pessoasModel->getUsuarioEquipeByUserIdFacebook($response['user_id']) != null){
                          header("Location:".BASE_URL.'administrar/index/'.$response['user_id']);
                          
                          
                      }else{
                          $data['resposta'] = '<h1>'.lang('horizonteRegistrado').'<small>'.lang('horizonteRegistradoAntesMensagem').'</smalll></h1>';
                          $this->load->view('enjoy/registrandoFiltroView',$data);
                      }
                  }else{
                      $this->pessoasModel->inserir($dados,$response['user_id']);
                      $data['resposta'] = '<h1>'.lang('horizonteRegistrado').'<small>'.lang('horizonteRegistradoMensagem').'</small></h1>';
                      $this->load->view('enjoy/registrandoFiltroView',$data);
                  }
              
            } else {
                $data['resposta'] = '<h1>'.lang('horizonteOops').'<small>'.lang('horizonteOopsMensagem').'</small></h1>';
                $this->load->view('enjoy/registrandoFiltroView',$data);
            }
            
        }
        
        /**
         * usuário tenta entrar com o usuário do facebook
         * @param type $idFacebook
         */
        public function logarComFacebook($idFacebook){
            if($this->pessoasModel->getUsuarioEquipeByUserIdFacebook($idFacebook) != null){
                  header("Location:".BASE_URL.'administrar/index/'.$idFacebook);
                  
              }else{
                  header("Location:".BASE_URL.'site/index/');
                  $this->load->view('grid/welComeGridView');
              }
        }
        
        /**
         * Função responsável pelo load da linguagem
         */
        private function loadLanguage(){

            if( isset($_GET['lang']) ){
                $this->lang->is_loaded = array();
                $this->lang->language = array();
                switch($_GET['lang']){
                    case 'pt-br':
                        $this->lang->load('labels','pt-BR');
                        $this->lang->load('mensagens','pt-BR');
                        break;
                    case 'en':
                        $this->lang->load('labels','english');
                        $this->lang->load('mensagens','english');
                        break;
                    case 'es':
                        $this->lang->load('labels','espanhol');
                        $this->lang->load('mensagens','espanhol');
                        break;
                    case 'mandarim':
                        $this->lang->load('labels','mandarim');
                        $this->lang->load('mensagens','mandarim');
                        break;
                    default :
                        $this->lang->load('labels','pt-BR');
                        $this->lang->load('mensagens','pt-BR');
                }
            }
        }
        /**
         *  Função que decondifica o requerimento do facebook
         * @param type $signed_request
         * @param type $secret
         * @return null
         */
        private function parse_signed_request($signed_request, $secret) {
          list($encoded_sig, $payload) = explode('.', $signed_request, 2); 

          // decode the data
          $sig = $this->base64_url_decode($encoded_sig);
          $data = json_decode($this->base64_url_decode($payload), true);

          if (strtoupper($data['algorithm']) !== 'HMAC-SHA256') {
            error_log('Unknown algorithm. Expected HMAC-SHA256');
            return null;
          }

          // check sig
          $expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
          if ($sig !== $expected_sig) {
            error_log('Bad Signed JSON signature!');
            return null;
          }

          return $data;
        }
        
        /**
         *  Função axiliar da parse_signed_request
         * @param type $input
         * @return type
         */
        public function base64_url_decode($input) {
            return base64_decode(strtr($input, '-_', '+/'));
        }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */