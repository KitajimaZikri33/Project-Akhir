<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct() {
		parent::__construct();	
		$this->load->model('create_film');
	}
	public function __construct2() {
		parent::__construct();
		$this->load->model('m_jadwal');
	}
	public function index()
	{
		$queryAllDataFilm = $this->create_film->getDataFilm();
		$data = array('queryAllDataFilm' => $queryAllDataFilm);
		$this->load->view('home',$data);
	}
	public function create_film()
	{
		$this->load->view('create_film');
	}
	public function jadwal()
	{
		$queryAllDataJadwal = $this->m_jadwal->getDataJadwal();
		$data = array('queryAllDataJadwal' => $queryAllDataJadwal);
		$this->load->view('jadwal',$data);
	}
	public function fungsiTambah() 
	{
		$id_film = $this->input->post('id_film');
		$judul = $this->input->post('judul');
		$genre = $this->input->post('genre');
		$rating = $this->input->post('rating');
		$produksi = $this->input->post('produksi');
		$distributor = $this->input->post('distributor');
		$durasi = $this->input->post('durasi');
		$country = $this->input->post('country');

		$arrInsert = array(
						'id_film' => $id_film,
						'judul' => $judul,
						'genre' => $genre,
						'rating' => $rating,
						'produksi' => $produksi,
						'distributor' => $distributor,
						'durasi' => $durasi,
						'country' => $country
					);
		$this->create_film->insertDataFilm($arrInsert);
		redirect(base_url(''));

	}
	public function halaman_edit($id_film)
	{
		$queryDataFilmDetail = $this->create_film->getDataFilmDetail();
		echo "<pre>";
		print_r($queryDataFilmDetail);
		echo "</pre>";
		//$this->load->view('edit');
	}
}
