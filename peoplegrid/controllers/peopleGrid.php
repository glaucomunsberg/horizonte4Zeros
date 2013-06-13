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

        $this->load->model('pessoaModel', 'pessoaModel');
        $this->load->model('perguntasModel', 'perguntasModel');
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

    //verificar esse tratamento
    function salvar() {

        $pessoa->nome = $_POST['txtNome'];
        $pessoa->email = $_POST['txtEmail'];
        $pessoa->genero = $_POST['rdGenero'];
        $pessoa->dt_nascimento = $_POST['txtDtNascimento'];
        $pessoa->cidade = $_POST['txtCidade'];
        $pessoa->nivel_escolaridade = $_POST['rdNivelEscolaridade'];
        $pessoa->renda_familiar = $_POST['rdRendaFamiliar'];

        $questionario->questao_1 = $_POST['questao_1'];
        $questionario->questao_2 = $_POST['questao_2'];
        $questionario->questao_3 = $_POST['questao_3'];
        $questionario->questao_4 = $_POST['questao_4'];
        $questionario->questao_5 = $_POST['questao_5'];
        $questionario->questao_6 = $_POST['questao_6'];
        $questionario->questao_7 = $_POST['questao_7'];
        $questionario->questao_8 = $_POST['questao_8'];
        $questionario->questao_9 = $_POST['questao_9'];
        $questionario->questao_10 = $_POST['questao_10'];
        $questionario->questao_11 = $_POST['questao_11'];
        $questionario->questao_12 = $_POST['questao_12'];
        $questionario->questao_13 = $_POST['questao_13'];
        $questionario->questao_14 = $_POST['questao_14'];
        $questionario->questao_15 = $_POST['questao_15'];
        $questionario->questao_16 = $_POST['questao_16'];
        $questionario->questao_17 = $_POST['questao_17'];
        $questionario->questao_18 = $_POST['questao_18'];
        $questionario->questao_19 = $_POST['questao_19'];
        $questionario->questao_20 = $_POST['questao_20'];
        $questionario->questao_21 = $_POST['questao_21'];
        $questionario->questao_22 = $_POST['questao_22'];
        $questionario->questao_23 = $_POST['questao_23'];
        $questionario->pap = $_POST['ja_participou_atividade_parecida'];
        $questionario->vpc = $_POST['voce_pensou_como'];

        $this->questionarioModel->inserir($questionario);
        $this->pessoaModel->inserir($pessoa);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */