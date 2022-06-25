<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class create_film extends CI_Model {
	function getDataFilm() {
		$query = $this->db->get('film');
		return $query->result();
	}
function insertDataFilm($data) {
		$this->db->insert('film',$data);
	}
function getDataFilmDetail($id_film) {
		$this->db->where('nim',$nim);
		$query = $this->db->get('film');
		return $query->row();
	}
}