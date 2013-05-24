<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrar extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
        function __construct() {
            parent::__construct();
            $this->load->model('pessoaModel', 'pessoaModel');
            $this->load->model('programaModel','programaModel');
            $this->load->model('projetoModel','projetoModel');
        }
        /**
         * Metodo criado para checkar se o usuario é ou nao
         *  valido para o sistema. Caso nao seja entao é encaminhado
         *  para o não permitido.
         * @param type $fb_id
         */
	public function index($fb_id='0')
	{
                $data['pessoas'] = $this->pessoaModel->getPessoasOnFacebook();
                $data['projeto1'] = $this->projetoModel->getProjeto(1);
                $data['projeto2'] = $this->projetoModel->getProjeto(2);
                $data['projeto3'] = $this->projetoModel->getProjeto(3);
                $data['projeto4'] = $this->projetoModel->getProjeto(4);
                $data['programa'] = $this->programaModel->getPrograma(1);
                if( $this->pessoaModel->getUsuarioEquipeByUserIdFacebook($fb_id) != null){
                    $data['pessoa'] = $this->pessoaModel->getUsuarioEquipeByUserIdFacebook($fb_id);
                    $this->load->view('administrar/dasboardFiltroView',$data);
                }else{
                    $this->load->view('administrar/naoPermitidoView');
                }
		
	}
        

        public function salvarPrograma(){
            
            if( $this->pessoaModel->getUsuarioEquipeByUserIdFacebook($_POST['txtFbId']) != null){
                print json_encode($this->programaModel->setPrograma($_POST));
            }else{
                print json_encode('false');
            }
            
        }
        
        public function salvarProjeto(){
            if( $this->pessoaModel->getUsuarioEquipeByUserIdFacebook($_POST['txtFbId']) != null){
                print json_encode($this->projetoModel->atualizarProjeto($_POST));
            }else{
                print json_encode('false');
            }
        }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */