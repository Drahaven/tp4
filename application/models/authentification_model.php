<?php
class Authentification_model extends CI_Model {
    
    /**
     * Recherche du visiteur avec login et mdp passés en paramètres
     * @param type $login
     * @param type $mdp
     * @return visiteur correspondant ou null si non trouvé
     */
    function read($login, $mdp) {	
	$req="SELECT * FROM visiteur WHERE login='". $login . "' AND password='". sha1($mdp)."';";
      $res=$this->db->query($req);
	 // Test existence du visiteur
      return ($res->num_rows() > 0) ? $res->row() : null;            
    }         
}
?>
