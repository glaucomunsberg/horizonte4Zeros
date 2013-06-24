<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Novidade extends CI_Controller {

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
        
        public function listarNovidades(){
            
        }
        
        public function deletarNovidade(){
            
        }
        
        public function inserirNovidade(){
            
        }
        
        public function atualizarNovidade(){
            
        }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */