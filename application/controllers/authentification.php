<?php
class Authentification extends CI_Controller
{
    /**
     * Constructeur
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Fonction exécutée par défaut
     */
    public function index()
    {
        $this->load->view('vueAuthentification');
    }

    /**
     * Méthode permettant la saisie et le contrôle du login et du mdp
     */
    public function saisir()
    {
        $login = $this->input->post('txtLogin'); // Récupération du login
        $this->form_validation->set_rules('txtLogin', 'Login', 'trim|required|alpha_dash');
        $this->form_validation->set_rules(
                'txtMdp',
                'Mot de passe',
                'trim|required|min_length[5]|callback_txtMdp_check[' . $login . ']'
            );
        if ($this->form_validation->run()) {
            // Aucune erreur : redirection vers la vue1 du Tp4
            redirect('/controleurTp4', 'location');
        } else {
            $this->load->view('vueAuthentification');
        }
    }

    public function txtMdp_check($mdp, $login) {
        $isVerifOK = false;
        $this->load->model('authentification_model');
        $res = $this-> authentification_model->read($login, $mdp);
        if ($res == null) {
        $this->form_validation->set_message('txtMdp_check','Login ou mot de passe erroné '); 
        } else {
        $isVerifOK = true;
        }   
        return $isVerifOK;
    }
        
}
