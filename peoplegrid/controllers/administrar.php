<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrar extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
        function __construct() {
            parent::__construct();
            $this->load->model('pessoasModel', 'pessoasModel');
            $this->load->model('programaModel','programaModel');
            $this->load->model('projetoModel','projetoModel');
            $this->load->model('questionarioModel','questionarioModel');
        }
        /**
         * Metodo criado para checkar se o usuario é ou nao
         *  valido para o sistema. Caso nao seja entao é encaminhado
         *  para o não permitido.
         * @param type $fb_id
         */
	public function index($fb_id='0')
	{
                $data['pessoas'] = $this->pessoasModel->getPessoasOnFacebook();
                $data['projeto1'] = $this->projetoModel->getProjeto(1);
                $data['projeto2'] = $this->projetoModel->getProjeto(2);
                $data['projeto3'] = $this->projetoModel->getProjeto(3);
                $data['projeto4'] = $this->projetoModel->getProjeto(4);
                $data['programa'] = $this->programaModel->getPrograma(1);
                if( $this->pessoasModel->getUsuarioEquipeByUserIdFacebook($fb_id) != null){
                    $data['pessoa'] = $this->pessoasModel->getUsuarioEquipeByUserIdFacebook($fb_id);
                    $this->load->view('administrar/dasboardFiltroView',$data);
                }else{
                    $this->load->view('administrar/naoPermitidoView');
                }
		
	}
        

        public function salvarPrograma(){
            if( $this->pessoasModel->getUsuarioEquipeByUserIdFacebook($_POST['txtFbId']) != null){
                print json_encode($this->programaModel->atualizar($_POST));   
            }else{
                print json_encode('lfalse');
            }
            
        }
        
        public function verResultadoPeopleGrid($fb_id = '0') {
            if ($this->pessoasModel->getUsuarioEquipeByUserIdFacebook($fb_id) != null) {
                $data['pessoa'] = $this->pessoasModel->getUsuarioEquipeByUserIdFacebook($fb_id);
                $this->load->view('administrar/verResultadoGridFiltroView', $data);
            } else {
                $this->load->view('administrar/naoPermitidoView');
            }
        }
        
        public function salvarProjeto(){
            if( $this->pessoasModel->getUsuarioEquipeByUserIdFacebook($_POST['txtFbId']) != null){
                print json_encode($this->projetoModel->atualizarProjeto($_POST));
            }else{
                print json_encode('lfalse');
            }
        }
        
        public function filtrarPesquisa() {
            
           $data['resultado'] = $this->questionarioModel->getQuestionario($_POST);
           print json_encode($data['resultado']); 
        }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */