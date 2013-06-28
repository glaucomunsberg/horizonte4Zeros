<?php

    class PessoasModel extends CI_Model{
        /**
         *  Insere um usuário com as informações trazidas
         *      do faceboook
         */
        function inserir($parametros,$user_id){
            $this->db->trans_start();
                $this->db->set('nome', $parametros['name']);
                $this->db->set('email', $parametros['email']);
                $this->db->set('dt_nascimento',$parametros['birthday']);
                $this->db->set('sexo',$parametros['gender']);
                $cidade = $parametros['location'];
                $this->db->set('cidade_atual',$cidade['name']);
                $this->db->set('cidade_natal',$cidade['name']);
                $this->db->set('fb_id', $user_id);
                $this->db->set('equipe', 'N');
                $this->db->set('dt_cadastro', 'CURRENT_TIMESTAMP'); 
                $this->db->insert('pessoas'); 
            $this->db->trans_complete();
            if($this->db->trans_status() === FALSE){
                return true;
            }else{
                return false;
            }
        }

        /**
         *  Insere no novo questionario
         * 
         */
        function inserir_new($parametros){
            
            $identifiquese = $parametros['identifiquese']; 
            
            $this->db->trans_start();
                $this->db->set('nome', $identifiquese['0']);
                $this->db->set('email', $identifiquese['1']);
                $this->db->set('genero',$identifiquese['2']);
                $this->db->set('cidade_natal',$identifiquese['3']);
                $this->db->set('nivel_escolaridade', $identifiquese['4']);
                $this->db->set('renda_familiar', $identifiquese['5']);
                $this->db->set('dt_nascimento',$identifiquese['6']);
                $this->db->set('equipe', 'N');
                $this->db->set('dt_cadastro', 'CURRENT_TIMESTAMP'); 
                $this->db->insert('pessoas'); 
                $id = $this->db->insert_id();
           $this->db->trans_complete();
            
            if($this->db->trans_status() === FALSE){
                return false;
            } else {
                return $id;
            }
        }
        
        /**
         *  Busca pessoa através do Id
         * 
         */
        function getPessoa($id){
             $this->db->select('*',false);
             $this->db->from('pessoas');
             $this->db->where('id',$id);
             return $this->db->get()->row();
        }
        
        
        /**
         *  Retorna a pessoa pelo Id do facebook
         * @param type $id
         * @return type
         */
        function getPessoaByUserIdFacebook($id){
             $this->db->select('*',false);
             $this->db->from('pessoas');
             $this->db->where('fb_id',$id);
             return $this->db->get()->row();
        }
        
        /**
         *  Retorna a lista de pessoas cadastradas
         *      no sistema e que estão presentes no facebook.
         *      limitado a 30 pessoas.
         * @return type
         */
        function getPessoasOnFacebook(){
            $this->db->select('*')
                    ->from('pessoas')
                    ->where('fb_id != \'\'')
                    ->limit(30);
            return $this->db->get()->result();
        }
        
        /**
         * Retorna o usuário do sistema pelo facebook
         *  ou seja, o usuário tem que ser "liberado".
         * 
         * @param type $id
         * @return type
         */
        function getUsuarioEquipeByUserIdFacebook($id){
             $this->db->select('*',false);
             $this->db->from('pessoas');
             $this->db->where('equipe != \'N\'');
             $this->db->where('fb_id',$id);
             return $this->db->get()->row();
        }
        
    }