<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class PeopleGrid extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     */
    function __construct() {
        parent::__construct();

        $this->load->model('pessoasModel', 'pessoasModel');
        $this->load->model('perguntasModel', 'perguntasModel');
        $this->load->model('questionarioModel', 'questionarioModel');
    }

    public function index($userFbid = 0) {
        $this->loadLanguage();
        $data['$userOn'] = 'off';
        if ($userFbid != 0) {
            if ($this->pessoaModel->getPessoaByUserIdFacebook($userFbid) != null) {
                $data['userOn'] = $this->pessoaModel->getPessoaByUserIdFacebook($userFbid);
            }
        }
        $this->load->view('grid/welComeGridView', $data);
    }

    public function jaguarao() {
        $this->loadLanguage();
        $data['totalDePergunts'] = $this->perguntasModel->totalPerguntasJaguarao();
        $data['perguntas'] = $this->perguntasModel->getPerguntas();
        $this->load->view('grid/jaguaraoGridView', $data);
    }

    public function getPerguntaJaguarao() {
        print json_encode($this->perguntasModel->perguntaJaguarao($_GET['questaoId']));
    }

    /**
     * Função responsável pelo load da linguagem
     */
    private function loadLanguage() {

        if (isset($_GET['lang'])) {
            $this->lang->is_loaded = array();
            $this->lang->language = array();
            switch ($_GET['lang']) {
                case 'pt-br':
                    $this->lang->load('labels', 'pt-BR');
                    $this->lang->load('mensagens', 'pt-BR');
                    break;
                case 'en':
                    $this->lang->load('labels', 'english');
                    $this->lang->load('mensagens', 'english');
                    break;
                case 'es':
                    $this->lang->load('labels', 'espanhol');
                    $this->lang->load('mensagens', 'espanhol');
                    break;
                case 'mandarim':
                    $this->lang->load('labels', 'mandarim');
                    $this->lang->load('mensagens', 'mandarim');
                    break;
                default :
                    $this->lang->load('labels', 'pt-BR');
                    $this->lang->load('mensagens', 'pt-BR');
            }
        }
    }

    /**
     * Função Salvar
     * recebe os dados inseridos no questionario
     * e insere na tabela pessoas e na tabela questionario
     * 
     */  
    function salvar() {  
       
       $identifiquese = $_POST['identifiquese']; 
       
       if (($identifiquese['0'] == ''))
           $pessoa_id = 8; // numero do não identificado
       else {
           $pessoa_id = $this->pessoasModel->inserir_new($_POST);    
       }
       
       $ret = $this->questionarioModel->inserir($_POST, $pessoa_id);
       
       if ($ret == TRUE){
           echo json_encode("sucesso");
       } else {
           echo json_encode("falha");
       }
       
    }

    function editar(){
        $questao = $this->questionarioModel->getQuestaoTeste();
        echo json_encode($questao); 
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */