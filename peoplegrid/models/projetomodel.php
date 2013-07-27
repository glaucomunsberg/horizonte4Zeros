<?php

class ProjetoModel extends CI_Model{
        
    /**
    * @author Glauco Roberto Munsberg dos Santos
    * @see www.glaucomunsberg.com/projetoAtHome
    * 
    */
        
    function __construct(){
        parent::__construct();

    }
        
    /**
        * Retorna o número de projetos
        *  que estão até então registrados
        * @return int 
        */
    function getTotalProjetos(){
        $retorno =  $this->db->get('projetos');
        return $retorno->num_rows();
    }


    /**
     * Retorna um post
     * @param type $id
     * @return type 
     */
    function getProjeto($id){

        $this->db->select("p.id, p.nome, p.resumo, p.objetivos, p.mapeamento, p.problemajustificacao, p.fundamentos, p.resultados, pro.nome as programa",false);
        $this->db->join('programas as pro','pro.id = p.programa_id','left');
        $this->db->from('projetos as p');
        $this->db->where('p.id',$id);
        $data = $this->db->get()->row();
       
        return $data;
    }
    
    /**
     * Retorna a lista de projetos cadastrados por programaId
     * @return type
     */
    function getProjetosByPrograma($programaId){
        
        $this->db->select("p.id, p.nome, p.resumo, p.objetivos, p.mapeamento, p.problemajustificacao, p.fundamentos, p.resultados, pro.nome as programa",false);
        $this->db->join('programas as pro','pro.id = p.programa_id','left');
        $this->db->from('projetos as p');
        $this->db->where('pro.id',$programaId);
        return $this->db->get()->result();
    }
    /**
    * Atualiza o projeto segundo as informações retornadas
    * @param type $parametros
    * @return string 
    */
    function atualizarProjeto($parametros){
        $this->db->trans_start();
            $this->db->set('nome', $parametros['txtNome']);
            $this->db->set('resumo', $parametros['txtResumo']);
            $this->db->set('objetivos', $parametros['txtApresentacao']);
            $this->db->set('problemajustificacao', $parametros['txtJustiticativa']);
            $this->db->set('fundamentos', $parametros['txtTeoria']);
            $this->db->set('resultados', $parametros['txtResultado']);
            $this->db->where('id', $parametros['txtProjetoId']);
            $this->db->update('projetos');
        $this->db->trans_complete();

        if($this->db->trans_status() === FALSE){
            return false;
        }else{
            return true;
        }

    }

    /**
        * Deleta o projeto segundo seu ID
        * @param type $parametros
        * @return string 
        */
    function deletarProjeto($parametros){
        $this->db->trans_start();
            $this->db->where_in('id', $parametros['id']);
            $this->db->delete('projetos');
        $this->db->trans_complete();

        if($this->db->trans_status() === FALSE){
            return true;
        }else{
            return false;
        }

    }

}