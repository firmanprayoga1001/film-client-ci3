<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function index()
	{
		function getCategory($url){
			$var = 'listing_film';
			$getUrl = $url.'?catlist='.$var;
			$data = file_get_contents($getUrl);
			$data = json_decode($data, true);
			if ($data['status'] === 'true') {
				$dataCategory = $data['result'];
				return $dataCategory;
			}
		}
		$url = 'http://localhost/film_rest/rest/data';
		$dataCategory = getCategory($url);
		
		$data = array(
			'title' => 'Profil',
			'isi' 	=> 'profil',
			'dataCategory' => $dataCategory
		);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
}
