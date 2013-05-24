<?php

    class ProgramaModel extends CI_Model{
        
        function atualizar($parametros){
            $this->db->trans_start();
                $this->db->set('nome', $parametros['txtNome']);
                $this->db->set('subtitulo', $parametros['txtSubtitulo']);
                $this->db->set('resumo', $parametros['txtResumo']);
                $this->db->set('apresentacao', $parametros['txtApresentacao']);
                $this->db->set('ativo',$parametros['ativo']);
                $this->db->set('fb_id',$parametros['txtFbId']);
                $this->db->where('id', $parametros['txtProjetoId']);
                $this->db->update('programas');
            $this->db->trans_complete();
            if($this->db->trans_status() === FALSE){
                return true;
            }else{
                return false;
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