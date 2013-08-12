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
        function inserir($parametros, $pessoa_id){
            $array =  $parametros['respostasGrid'];
            $perguntasObjetivas = $parametros['perguntasObjetivas'];
            $a = $parametros['identifiquese'];
            
            
            // FAZER UM CASE PARA AS ALTERNATIVAS COMO TRATAMENTO
            //  VOCE_PENSOU_COMO
            //  ...
            
            log_message('INFO', $array['0']);
            log_message('INFO', $array['1']);
            log_message('INFO', $array['21']);

            $this->db->trans_start();
                $this->db->set('questao_1', $array['0']);
                $this->db->set('questao_2', $array['1']);
                $this->db->set('questao_3', $array['2']);
                $this->db->set('questao_4', $array['3']);
                $this->db->set('questao_5', $array['4']);
                $this->db->set('questao_6', $array['5']);
                $this->db->set('questao_7', $array['6']);
                $this->db->set('questao_8', $array['7']);
                $this->db->set('questao_9', $array['8']);
                $this->db->set('questao_10', $array['9']);
                $this->db->set('questao_11', $array['10']);
                $this->db->set('questao_12', $array['11']);
                $this->db->set('questao_13', $array['12']);
                $this->db->set('questao_14', $array['13']);
                $this->db->set('questao_15', $array['14']);
                $this->db->set('questao_16', $array['15']);
                $this->db->set('questao_17', $array['16']);
                $this->db->set('questao_18', $array['17']);
                $this->db->set('questao_19', $array['18']);
                $this->db->set('questao_20', $array['19']);
                $this->db->set('questao_21', $array['20']);
                $this->db->set('questao_22', $array['21']);
                $this->db->set('voce_pensou_como', $perguntasObjetivas['0']);
                $this->db->set('problemas_cidade_atual', $perguntasObjetivas['1']);
                $this->db->set('prioridades_futuro', $perguntasObjetivas['2']);
                $this->db->set('cidade', $a['3']);
                $this->db->set('pessoa_id', $pessoa_id);
                $this->db->insert('questionario');
            $this->db->trans_complete();
            
            if($this->db->trans_status() === FALSE){
                return false;
            } else {
                return true;
            }
        }
        
        
        function getQuestao($parametros){
            $this->db->select('*',false);
                $this->db->from('questionario');
                $this->db->where('pessoa_id','10');
            return $this->db->get()->row();  
        }
        
        function getQuestionario($parametros){
            
            log_message('INFO',$parametros['pergunta']);
            log_message('INFO',$parametros['genero']);
            log_message('INFO',$parametros['cidade']);
            log_message('INFO',$parametros['ensinoFun']);
            log_message('INFO',$parametros['ensinoMed']);
            log_message('INFO',$parametros['anonimos']);
            log_message('INFO',$parametros['idadeMin']);
            log_message('INFO',$parametros['idadeMax']);
            
            if ($parametros['pergunta'] != 0) {   
            }
            
            if ($parametros['ensinoFun'] == 'true'){
                $this->db->where('niveis_escolaridade','1');
            }
            
            if ($parametros['ensinoMed'] == 'true'){
                $this->db->where('niveis_escolaridade','2');
            }
            
            if ($parametros['ensinoGra'] == 'true'){
                $this->db->where('niveis_escolaridade','3');
            }
            
            if ($parametros['ensinoPos'] == 'true'){
                $this->db->where('niveis_escolaridade','4');
            }
            
            if(($parametros['idadeMin'] != '') && ($parametros['idadeMax'] != '')){
                $this->db->between($parametros['idadeMin'], $parametros['idadeMax']);
            }
            
            if ($parametros['anonimos'] == 'false'){
                $this->db->where('pessoa_id !=', $parametros['anonimos']);
            }
            
            if ($parametros['cidade'] == 'J'){
                $this->db->where('cidades','1');
            } else {
                if ($parametros['cidade'] == 'CN'){
                    $this->db->where('cidades','2');
                } else { 
                    $this->db->where('cidades','3');
                }    
            }
            
            /*
            $this->db->select('*', false);
            $this->db->from('questionario');        
            $this->db->
            $this->db->
            $this->db->
            */
            
        }
    }
?>
