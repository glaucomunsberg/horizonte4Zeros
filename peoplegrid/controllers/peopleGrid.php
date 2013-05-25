<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PeopleGrid extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
        function __construct() {
            parent::__construct();
            
            $this->load->model('pessoaModel', 'pessoaModel');
            $this->load->model('perguntasModel', 'perguntasModel');
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
            $this->load->view('grid/welComeGridView',$data);
	}
                
        public function jaguarao($userFbid = 0){
            $this->loadLinguage();
            $data['$userOn'] = 'off';
            if($userFbid != 0){
                if($this->pessoaModel->getPessoaByUserIdFacebook($userFbid) != null){
                    $data['userOn'] = $this->pessoaModel->getPessoaByUserIdFacebook($userFbid);
                }
            }
            $data['totalDePergunts'] = $this->perguntasModel->totalPerguntasJaguarao();
            $this->load->view('grid/jaguarraoGridView',$data);
        }
        

        
        public function getPerguntaJaguarrao(){
            print json_encode($this->perguntasModel->perguntaJaguarao($_GET['questaoId']));
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