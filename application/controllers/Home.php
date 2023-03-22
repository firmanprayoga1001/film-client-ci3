<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		
		function getMovie($url){
			$var = 'movie';
			$getUrl = $url.'?var='.$var;
			$data = file_get_contents($getUrl);
			$data = json_decode($data, true);
			if ($data['status'] === 'true') {
				$dataMovie = $data['result'];
				return $dataMovie;
			}
		}
		function getSeries($url){
			$var = 'series';
			$getUrl = $url.'?var='.$var;
			$data = file_get_contents($getUrl);
			$data = json_decode($data, true);
			if ($data['status'] === 'true') {
				$dataSeries = $data['result'];
				return $dataSeries;
			}
		}
		function getKorean($url){
			$var = 'korean';
			$getUrl = $url.'?var='.$var;
			$data = file_get_contents($getUrl);
			$data = json_decode($data, true);
			if ($data['status'] === 'true') {
				$dataKorean = $data['result'];
				return $dataKorean;
			}
		}
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
		// $url = 'http://tsukinoseirei.site/rest/film_rest';
		$url = 'http://localhost/film_rest/rest/data';
		$dataMovie = getMovie($url);
		$dataSeries = getSeries($url);
		$dataKorean = getKorean($url);
		$dataCategory = getCategory($url);
		
		
		$data = array(
			'title' => 'Home',
			'isi' 	=> 'home',
			'dataSeries' => $dataSeries,
			'dataMovie' => $dataMovie,
			'dataKorean' => $dataKorean,
			'dataCategory' => $dataCategory
		);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	public function detail($id,$categories)
	{
		
		function detailFilm($url,$id){
			$id = $id;
			$getUrl = $url.'?id='.$id;
			$data = file_get_contents($getUrl);
			$data = json_decode($data, true);
			if ($data['status'] === 'true') {
				return $data;
			}
		}
		function getSeries($url,$categories){
			$var = $categories;
			$getUrl = $url.'?cat='.$var;
			$data = file_get_contents($getUrl);
			$data = json_decode($data, true);
			if ($data['status'] === 'true') {
				$dataSeries = $data['result'];
				return $dataSeries;
			}
		}

		$id = $id;
		$categories = $categories;
		$url = 'http://localhost/film_rest/rest/data';
		$data = detailFilm($url,$id);
		$detailFilm = $data['result'];
		$getActor = $data['actor'];
		$getEpisodes = $data['eps'];
		$dataSeries = getSeries($url,$categories);
		$countData = count($getEpisodes);
		$countDataPerpage = 6;
		$countPage = ceil( $countData / $countDataPerpage ); 
		$activePage = ( isset($_GET["page"]) ) ? $_GET["page"] : 1;
		$firstData = ( $countDataPerpage * $activePage ) - $countDataPerpage;
		$getEpisodes = array_slice($getEpisodes,$firstData,$countDataPerpage);

		$movie = 'movie';
		$series = 'series';
		if (stripos($categories, $movie) !== FALSE){
			$data = array(
				'title' => 'Detail Film Movie',
				'isi' 	=> 'detail_movie',
				'detailFilm' => $detailFilm
			);
		} 
		if (stripos($categories, $series) !== FALSE){
			$data = array(
				'title' => $detailFilm['judul_video'],
				'isi' 	=> 'detail_series',
				'detailFilm' => $detailFilm,
				'getActor' => $getActor,
				'getEpisodes' => $getEpisodes,
				'dataSeries' => $dataSeries,
				'count_page' => $countPage,
				'active_page' => $activePage
			);
		}
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	public function detail_eps($id,$categories)
	{
		
		function detailEps($url,$id){
			$id = $id;
			$getUrl = $url.'?eps='.$id;
			$data = file_get_contents($getUrl);
			$data = json_decode($data, true);
			if ($data['status'] === 'true') {
				return $data;
			}
		}
		function getSeries($url,$categories){
			$var = $categories;
			$getUrl = $url.'?cat='.$var;
			$data = file_get_contents($getUrl);
			$data = json_decode($data, true);
			if ($data['status'] === 'true') {
				$dataSeries = $data['result'];
				return $dataSeries;
			}
		}

		$id = $id;
		$categories = $categories;
		$url = 'http://localhost/film_rest/rest/data';
		$data = detailEps($url,$id);
		$detailEps = $data['result'];
		$getActor = $data['actor'];
		$getEpisodes = $data['eps'];
		$dataSeries = getSeries($url,$categories);
		
		$countData = count($getEpisodes);
		$countDataPerpage = 6;
		$countPage = ceil( $countData / $countDataPerpage ); 
		$activePage = ( isset($_GET["page"]) ) ? $_GET["page"] : 1;
		$firstData = ( $countDataPerpage * $activePage ) - $countDataPerpage;
		$getEpisodes = array_slice($getEpisodes,$firstData,$countDataPerpage);


		$data = array(
			'title' => $detailEps['judul_video'].' - Episode '.$detailEps['urutan'],
			'isi' 	=> 'detail_episode',
			'detailEps' => $detailEps,
			'getActor' => $getActor,
			'getEpisodes' => $getEpisodes,
			'dataSeries' => $dataSeries,
			'count_page' => $countPage,
			'active_page' => $activePage
		);
		
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function category($categories)
	{
		function getFilm($url,$categories){
			$var = $categories;
			$getUrl = $url.'?cat='.$var;
			$data = file_get_contents($getUrl);
			$data = json_decode($data, true);
			if ($data['status'] === 'true') {
				$dataFilm = $data['result'];
				return $dataFilm;
			}
		}
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
		$categories = $categories;
		$url = 'http://localhost/film_rest/rest/data';
		$dataFilm = getFilm($url,$categories);
		$dataCategory = getCategory($url);
		$category = urldecode($categories);
		
		$data = array(
			'title' => 'Category - '.$category,
			'isi' 	=> 'category',
			'dataFilm' => $dataFilm,
			'category' => $category,
			'dataCategory' => $dataCategory
		);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
}
