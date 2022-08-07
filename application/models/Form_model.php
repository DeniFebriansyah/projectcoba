<?php

// Menbuat class Karyawan model yang mengextends CI_Model
class Form_model extends CI_Model{

		// Construct untuk Meng-load Database
		public function __construct()
		{
			$this->load->database();
		}

		// Membuat Function get_karyawan untuk mengambil data dari mysql menggunakan query
		public function get_data(){
			return $this->db->query("SELECT * FROM coranmas ORDER BY nik DESC")->result_array();
		}

		// Membuat function edit untuk mengambil 1 data yang akan di edit
		public function edit_data($where,$table){
			return $this->db->get_where($table,$where);
		}

		// Membuat function create data untuk menginputkan data ke mysql
		public function create_data(){
			// Membuat array inputan yang nantinya akan di inputkan
			$data = array(
                'nik' => $this->input->post('nik'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'jenis_pelayanan' => $this->input->post('jenis_pelayanan'),
                'kepuasan' => $this->input->post('kepuasan'),
                'komentar' => $this->input->post('komentar'),
            );
			return $this->db->insert('coranmas', $data);
		}

		// Membuat function update untuk mengupdate data di mysql
		public function update($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		// Membuat function delete untuk menghapus data di mysql
		public function delete($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		// membuat function hitung
		public function countData($table){
			$sql = "SELECT * FROM $table";
			$result = $this->db->query($sql)->num_rows();
			return $result;
		}	  

		// Membuat function get_keyword untuk mencari data yang ada di database
		public function get_keyword($keyword){
			$this->db->select('*');
			$this->db->from('coranmas');
			$this->db->like('nik', $keyword);
			// or like = ketika data tidak ada di kolom no_pegawai maka akan mencari di kolom yang lainnya
			$this->db->or_like('nama', $keyword);
			$this->db->or_like('alamat', $keyword);
			$this->db->or_like('jenis_pelayanan', $keyword);
			$this->db->or_like('kepuasan', $keyword);
			$this->db->or_like('komentar', $keyword);
			return $this->db->get()->result_array();
		}

	}
