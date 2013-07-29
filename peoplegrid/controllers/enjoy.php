<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Enjoy extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
        function __construct() {
            parent::__construct();
            $this->load->model('pessoasModel', 'pessoasModel');
        }
	public function index($fb_id='0')
	{
                $data['pessoas'] = $this->pessoasModel->getPessoasOnFacebook();
                if( $this->pessoasModel->getUsuarioEquipeByUserIdFacebook($fb_id) != null){
                    $data['pessoa'] = $this->pessoasModel->getUsuarioEquipeByUserIdFacebook($fb_id);
                    $this->load->view('administrar/dasboardFiltroView',$data);
                }else{
                    $this->load->view('administrar/naoPermitidoView');
                }
		
	}
        
        /**
         * 
         * @param type $backTo volta para qual url
         */
        public function cadatroPessoa($backTo = null){
            if (@$_REQUEST['signed_request']) {
                  define('FACEBOOK_APP_ID', $this->config->item('app_fb_id'));
                  define('FACEBOOK_SECRET', $this->config->item('app_fb_secret'));
                  $response = $this->parse_signed_request($_REQUEST['signed_request'],FACEBOOK_SECRET);
                  $dados = $response['registration'];
                  if( $this->pessoasModel->getPessoaByUserIdFacebook($response['user_id']) != null){
                      if($this->pessoasModel->getUsuarioEquipeByUserIdFacebook($response['user_id']) != null){
                          if($backTo != null){
                              header("Location:".$backTo.$response['user_id']);
                          }else{
                              header("Location:".BASE_URL.$response['user_id']);
                          }
                          
                          
                          
                      }else{
                          $data['resposta'] = '<h1>'.lang('horizonteRegistrado').'<small>'.lang('horizonteRegistradoAntesMensagem').'</smalll></h1>';
                          $this->load->view('enjoy/registrandoFiltroView',$data);
                      }
                  }else{
                      $this->pessoasModel->inserir($dados,$response['user_id']);
                      $data['resposta'] = '<h1>'.lang('horizonteRegistrado').'<small>'.lang('horizonteRegistradoMensagem').'</small></h1>';
                      $data['voltar'] = $backTo;
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
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */