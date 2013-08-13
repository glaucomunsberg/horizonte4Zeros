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
                $this->db->select('questao_'.$parametros['pergunta'], false);
            } else {
                $this->db->select('questao_1, questao_2, questao_3, questao_4, questao_5, questao_6,
                                    questao_7, questao_9, questao_10, questao_11, questao_12, 
                                    questao_13, questao_14, questao_15, questao_16, questao_17, 
                                    questao_18, questao_19, questao_20, questao_21, questao_22', false);
            }
            
            $this->db->from('questionario AS q');
            $this->db->join('voce_pensou_como AS vpc', 'vpc.id = q.voce_pensou_como_id');
            $this->db->join('pessoas AS p', 'p.id = q.pessoa_id');
            $this->db->join('cidades AS c', 'c.id = p.cidade_id');
            $this->db->join('niveis_escolaridade AS ne','ne.id = p.nivel_escolaridade_id');
            $this->db->join('rendas_familiares AS rf', 'rf.id = p.renda_familiar_id');
            
            $ne = array();
            if ($parametros['ensinoFun'] == 'true'){
                $ne[] = 2;
            }
            
            if ($parametros['ensinoMed'] == 'true'){
                $ne[] = 3;
            }
            
            if ($parametros['ensinoGra'] == 'true'){
                $ne[] = 4;
            }
            
            if ($parametros['ensinoPos'] == 'true'){
                $ne[] = 5;
            }
            
            if ($ne[0] != '') {
                $this->db->where_in('ne.id', $ne);
            }
            
            
            if(($parametros['idadeMin'] != '') && ($parametros['idadeMax'] != '')){
                $this->db->between($parametros['idadeMin'], $parametros['idadeMax']);
            }
            
            if ($parametros['anonimos'] == 'false'){
                $this->db->where('pessoa_id !=', $parametros['anonimos']);
            }
            
            
            $c = array();
            if ($parametros['cidade'] == 'J'){
                $c[] = 2;
            }
            if ($parametros['cidade'] == 'CN'){
                $c[] = 3;
            }
            if ($parametros['cidade'] == 'CI') { 
                $c[] = 4;    
            }
            if ($c[0] != ''){
                $this->db->where_in('p.cidade_id', $c);
            }
            
            return $this->db->get()->result();
            /*
            $rf = array();
            if ($parametros['salario1a3'] == 'true'){
                $rf[] = 2;
            }
            if ($parametros['salario3a5'] == 'true'){
                $rf[] = 3;
            }
            if ($parametros['salario5a10'] == 'true') { 
                $rf[] = 4;    
            }
            if ($parametros['salario10Mais'] == 'true') { 
                $rf[] = 5;    
            }
            if ($rf[0] != ''){
                $this->db->where_in('p.renda_familiar_id', $rf);
            }    
            
            
            $vpc = array();
            if ($parametros['opt1'] == 'true'){
                $vpc[] = 2;
            }
            if ($parametros['opt2'] == 'true'){
                $vpc[] = 3;
            }
            if ($parametros['opt3'] == 'true') { 
                $vpc[] = 4;    
            }
            if ($parametros['opt4'] == 'true') { 
                $vpc[] = 5;    
            }
            if ($parametros['opt5'] == 'true'){
                $vpc[] = 5;
            }
            if ($parametros['opt6'] == 'true'){
                $vpc[] = 6;
            }
            if ($parametros['opt7'] == 'true'){
                $vpc[] = 7; 
            }
            if ($vpc[0] != ''){
                $this->db->where_in('q.voce_penso_como_id', $vpc);
            }    
            */
           
            
        }
    }
?>
