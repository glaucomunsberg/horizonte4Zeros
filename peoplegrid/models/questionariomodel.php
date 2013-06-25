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
            $array =  $parametros['respostasGrids'];
            $identifiquese = $parametros['identifiquese'];
            $flag = 0;
            
            
        
            
            $this->db->trans_start();
                $this->db->set('questao_1', $array['1']);
                $this->db->set('questao_2', $array['2']);
                $this->db->set('questao_3', $array['3']);
                $this->db->set('questao_4', $array['4']);
                $this->db->set('questao_5', $array['5']);
                $this->db->set('questao_6', $array['6']);
                $this->db->set('questao_7', $array['7']);
                $this->db->set('questao_8', $array['8']);
                $this->db->set('questao_9', $array['9']);
                $this->db->insert('questionario');
                $id = $this->db->insert_id();
            $this->db->trans_complete();
           
            
            if($this->db->trans_status() === FALSE){
                return false;
            } else {
                $flag = 1;
            }    
            
            $this->db->trans_start();    
                $this->db->set('questao_10', $array['10']);
               // $this->db->set('questao_11', $array['11']);
                $this->db->where('id', $id);
                $this->db->update('questionario');
            $this->db->trans_complete();

            $this->db->trans_start();
                $this->db->set('questao_12', $array['12']);
               // $this->db->set('questao_13', $array['13']);
                $this->db->where('id', $id);
                $this->db->update('questionario');
            $this->db->trans_complete();
            
            if($this->db->trans_status() === FALSE){
                return false;
            } else {
                $flag = 1;
            }
            /*
            $this->db->trans_start();
                $this->db->set('questao_14', $array['14']);
                $this->db->set('questao_15', $array['15']);
                $this->db->set('questao_16', $array['16']);
                $this->db->set('questao_17', $array['17']);
                $this->db->set('questao_18', $array['18']);
                $this->db->where('id', $id);
                $this->db->update('questionario');
            $this->db->trans_complete();     
            
            if($this->db->trans_status() === FALSE){
                return false;
            } else {
                $flag = 1;
            }
            */
            $this->db->trans_start();
            //    $this->db->set('questao_19', $array['19']);
            //    $this->db->set('questao_20', $array['20']);
            //    $this->db->set('questao_21', $array['21']);
            //    $this->db->set('questao_22', $array['22']);
            //    $this->db->set('questao_23', $array['23']);
                $this->db->set('voce_pensou_como', $parametros['pensouComo']);
                $this->db->set('cidade', $identifiquese[3]);
                $this->db->set('pessoa_id', $pessoa_id);        // vem da primeira insercao
                $this->db->set('dt_cadastro', 'CURRENT_TIMESTAMP');
                $this->db->where('id', $id); 
                $this->db->update('questionario'); 
            $this->db->trans_complete();
            
            
            if($this->db->trans_status() === FALSE){
                return false;
            } else {
                if (flag == 1)
                    return true;
            }
        }
        
    }
?>
