<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControleurTp4 extends CI_Controller
{
	public function index()
	{
		$this->load->view('vue1Tp4');
	}

	public function listeTableProduit()
	{
		$data['lesProduits'] = $this->tp4_model->get_lesProduits();
		$this->load->view('vue2Tp4Select', $data);
	}

	public function choixListeDynCategorie()
	{
		$data['lesCategories'] = $this->tp4_model->get_lesCategories();
		$this->load->view('vue3Tp4choixListeDynCategorie', $data);
	}

	public function listeform()
	{
		$ChoixCat = $this->input->post('lstcat');   // récupération de la valeur choisie dans la combo
		$data['lesProduits'] = $this->tp4_model->get_lesProduitsParCategorie($ChoixCat);
		// recherche des produits correspondants à la catégorie    
		$this->load->view('vue2Tp4Select', $data);
	}

	public function liendyn()
	{
		$data['lesProduits'] = $this->tp4_model->get_lesProduits();
		$this->load->view('vue4Tp4liendyn', $data);
	}

	public function modification()
	{
		$data['produit']=$this->tp4_model-> get_leProduit ($this->uri->segment('3'));
		$data['lesCategories'] = $this->tp4_model->get_lesCategories();
		$this->load->view('vue5Tp4formModif', $data);
	}
}
