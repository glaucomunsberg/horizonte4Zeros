<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PeopleGrid extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
        function __construct() {
            parent::__construct();
            
            $this->load->model('pessoaModel', 'pessoaModel');
        }
	public function index($userFbid = 0)
	{
                $this->loadLinguage();
                $data['$userOn'] = 'off';
                if($userFbid != 0){
                    if($this->pessoaModel->getPessoaByUserIdFacebook($userFbid) != null){
                        $data['userOn'] = $this->pessoaModel->getPessoaByUserIdFacebook($userFbid);
                    }
                }
		$this->load->view('grid/welComeGrid',$data);
	}
        
        public function teste(){
            $this->load->view('jaguarao/welcomeView');
        }
        
        
        public function projetoJaguarao(){
            $data['pessoas'] = $this->pessoaModel->getPessoasOnFacebook();
            $this->load->view('grid/jaguaraoGrid',$data);
        }
        
        
        /**
         * 
         * @param type $backTo volta para qual url
         */
        public function cadatroPessoa(){
            if (@$_REQUEST['signed_request']) {
                  define('FACEBOOK_APP_ID', $this->config->item('app_fb_id'));
                  define('FACEBOOK_SECRET', $this->config->item('app_fb_secret'));
                  $response = $this->parse_signed_request($_REQUEST['signed_request'],FACEBOOK_SECRET);
                  $dados = $response['registration'];
                  if( $this->pessoaModel->getPessoaByUserIdFacebook($response['user_id']) != null){
                      header("Location:".BASE_URL.'peopleGrid/index/'.$response['user_id']);
                  }else{
                      $this->pessoaModel->inserir($dados,$response['user_id']);
                      $data['resposta'] = '<h1>'.lang('horizonteRegistrado').'<small>'.lang('horizonteRegistradoMensagem').'</small></h1>';
                      $data['voltar'] = BASE_URL.'peopleGrid/index/'.$response['user_id'];
                      $this->load->view('enjoy/registrandoFiltroView',$data);
                  }
              
            } else {
                $data['resposta'] = '<h1>'.lang('horizonteOops').'<small>'.lang('horizonteOopsMensagem').'</small></h1>';
                $this->load->view('enjoy/registrandoFiltroView',$data);
            }
            
        }
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
        /**
         * Função responsável pelo load da linguagem
         */
        private function loadLinguage(){

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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */