<?php

    /**
    * @author André Peil
    * @see andreguipeil@gmail.com
    * 
    */

    class QuestionarioModel extends CI_Model{
        /**
         *  Insere um formulario de perguntas
         *   do questinario.
         */
        function inserir($parametros){
            $this->db->trans_start();
                $this->db->set('questao_1', $parametros['questao_1']);
                $this->db->set('questao_2', $parametros['questao_2']);
                $this->db->set('questao_3', $parametros['questao_3']);
                $this->db->set('questao_4', $parametros['questao_4']);
                $this->db->set('questao_5', $parametros['questao_5']);
                $this->db->set('questao_6', $parametros['questao_6']);
                $this->db->set('questao_7', $parametros['questao_7']);
                $this->db->set('questao_8', $parametros['questao_8']);
                $this->db->set('questao_9', $parametros['questao_9']);
                $this->db->set('questao_10', $parametros['questao_10']);
                $this->db->set('questao_11', $parametros['questao_11']);
                $this->db->set('questao_12', $parametros['questao_12']);
                $this->db->set('questao_13', $parametros['questao_13']);
                $this->db->set('questao_14', $parametros['questao_14']);
                $this->db->set('questao_15', $parametros['questao_15']);
                $this->db->set('questao_16', $parametros['questao_16']);
                $this->db->set('questao_17', $parametros['questao_17']);
                $this->db->set('questao_18', $parametros['questao_18']);
                $this->db->set('questao_19', $parametros['questao_19']);
                $this->db->set('questao_20', $parametros['questao_20']);
                $this->db->set('questao_21', $parametros['questao_21']);
                $this->db->set('questao_22', $parametros['questao_22']);
                $this->db->set('questao_23', $parametros['questao_23']);
                $this->db->set('cidade', $parametros['cidade']);
                $this->db->set('participou_atividade_parecida', $parametros['pap']);
                $this->db->set('voce_pensou_como', $parametros['vpc']);
                $this->db->set('pessia_id', $pessoa_id);        // vem da primeira insercao
                $this->db->set('dt_cadastro', 'CURRENT_TIMESTAMP'); 
                $this->db->insert('questionario'); 
            $this->db->trans_complete();
            
            if($this->db->trans_status() === FALSE){
                return true;
            } else {
                return false;
            }
        }

    }
?>
