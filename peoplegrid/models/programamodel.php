<?php

    class ProgramaModel extends CI_Model{
        
        function atualizar($parametros){
            $this->db->trans_start();
                $this->db->set('nome',$parametros['txtNome']);
                $this->db->set('subtitulo', $parametros['txtSubtitulo']);
                $this->db->set('resumo', $parametros['txtResumo']);
                $this->db->set('apresentacao', $parametros['txtApresentacao']);
                $this->db->where('id',1);
                $this->db->update('programas');
            $this->db->trans_complete();
            if($this->db->trans_status() === FALSE){
                return false;
            }else{
                return true;
            }
        }
        
        function getPrograma($id){
             $this->db->select('*',false);
             $this->db->from('programas');
             $this->db->where('ativo != \'N\'');
             $this->db->where('id',$id);
             return $this->db->get()->row();
        }
        
    }