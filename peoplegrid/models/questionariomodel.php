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
            
            log_message('INFO',$parametros['salario1a3']);
            log_message('INFO',$parametros['salario3a6']);
            log_message('INFO',$parametros['salario6a9']);
            log_message('INFO',$parametros['salarioMaisDe9']);
            log_message('INFO',$parametros['repre_popu']);
            log_message('INFO',$parametros['repre_lider']);
            log_message('INFO',$parametros['repre_tec']);
            log_message('INFO',$parametros['repre_inves']);
            log_message('INFO',$parametros['repre_outro']);
            
            if ($parametros['pergunta'] != 0) {   
                $this->db->select('questao_'.$parametros['pergunta'], false);
            } else {
                $this->db->select('questao_1, questao_2, questao_3, questao_4, questao_5, questao_6,
                                    questao_7, questao_9, questao_10, questao_11, questao_12, 
                                    questao_13, questao_14, questao_15, questao_16, questao_17, 
                                    questao_18, questao_19, questao_20, questao_21, questao_22, p.nome', false);
            }
            
            $this->db->from('questionario AS q');
            $this->db->join('voce_pensou_como AS vpc', 'vpc.id = q.voce_pensou_como_id');
            $this->db->join('pessoas AS p', 'p.id = q.pessoa_id');
            $this->db->join('cidades AS c', 'c.id = p.cidade_id');
            $this->db->join('niveis_escolaridade AS ne','ne.id = p.nivel_escolaridade_id');
            $this->db->join('rendas_familiares AS rf', 'rf.id = p.renda_familiar_id');
            
            $ne = array();
            if ($parametros['ensinoFun'] == 'true'){
                array_push($ne, 2);
            }
            
            if ($parametros['ensinoMed'] == 'true'){
                array_push($ne, 3);
            }
            
            if ($parametros['ensinoGra'] == 'true'){
                array_push($ne, 4);
            }
            
            if ($parametros['ensinoPos'] == 'true'){
                array_push($ne, 5);
            }
            
            if (empty($ne) != TRUE) {
                $this->db->where_in('ne.id', $ne);
            }
            
            $c = array();
            if ($parametros['cidade'] == 'J'){
                $c = 2;
            }
            
            if ($parametros['cidade'] == 'CE') { 
                $c = 3;    
            }
            
            if ($parametros['cidade'] == 'CN'){
                $c = 4;
            }      
            
            if (empty($c) != TRUE){
                $this->db->where('p.cidade_id', $c);
            }
            
            if(($parametros['idadeMin'] != '') && ($parametros['idadeMax'] != '')){
                $this->db->where('p.dt_nascimento >=', $parametros['idadeMin']);   
                $this->db->where('p.dt_nascimento <=', $parametros['idadeMax']);
            }
            
            if ($parametros['anonimos'] == 'false'){
                $this->db->where('pessoa_id !=', 1);
            }

            
            
            $rf = array();
            if ($parametros['salario1a3'] == 'true'){
                array_push($rf, 2);
            }
            if ($parametros['salario3a6'] == 'true'){
                array_push($rf, 3);
            }
            if ($parametros['salario6a9'] == 'true') { 
                array_push($rf, 4);    
            }
            if ($parametros['salarioMaisDe9'] == 'true') { 
                array_push($rf, 5);    
            }
            if (empty($rf) != TRUE){
                implode($rf);
                $this->db->where_in('p.renda_familiar_id', $rf);
            }    
            
            return $this->db->get()->result();
            
            /*
            
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
            if (isset($vpc) != TRUE){
                $this->db->where_in('q.voce_penso_como_id', $vpc);
            }    
            */
           
            
        }
    }
?>
