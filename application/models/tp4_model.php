<?php
class Tp4_model extends CI_Model
{

    public function get_lesProduits()
    {
        $rs = $this->db->query('SELECT * FROM produit');
        // retourne un tableau à 1 dim où chaque case est un tableau associatif correspondant à une ligne de rs (RecordSet)
        return $rs->result_array();
    }

    public function get_lesCategories () 
    {            
    $rs=$this->db->query('SELECT * FROM categorie');
    return $rs->result_array() ;
    }

    public function get_lesProduitsParCategorie($cat)
    {
        $rs = $this->db->query('SELECT * FROM produit WHERE catpdt=\'' . $cat . '\'');
        return $rs->result_array();
    }

    public function get_leProduit($id)
    {
        $rs = $this->db->query('SELECT * FROM produit WHERE codepdt=\'' . $id . '\'');
        return $rs->row_array();  // Et non result_array car une seule ligne de résultat
    }
}
