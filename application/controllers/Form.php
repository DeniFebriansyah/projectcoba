<?php
// Class Karyawan mengextends CI_Controller
class Form extends CI_Controller{


	// Membuat function index untuk menampilkan halaman index
		public function index(){
			$data['title'] = 'Beranda';
			// Mengambil data karyawan untuk ditampilkan di table index
			// $data['coranmas'] = $this->form_model->get_data();

			// Memanggil header, footer dan halaman index di views
			$this->load->view('templates/headers', $data);
			$this->load->view('form/index', $data);
			$this->load->view('templates/footers');
		}
		// Membuat function create untuk menampilkan halaman create data
		public function create(){
			$data['title'] = 'Form Data';
			// Membuat validasi Form
			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/headers', $data);
				$this->load->view('form/formulir', $data);
				$this->load->view('templates/footers');
			}else{
				// Memanggil fungsi create data dari model
				$this->form_model->create_data();
				// Flash data adalah notif ketika berhasil input data
				$this->session->set_flashdata('data_created', 'Data Berhasil Di Buat');
				redirect('form');
			}
		}
		// Membuat function index untuk menampilkan halaman index
		public function statistik(){
			$data['title'] = 'Statistik';
			// Mengambil data karyawan untuk ditampilkan di table index
			// $data['coranmas'] = $this->form_model->get_data();

			// Memanggil header, footer dan halaman index di views
			$this->load->view('templates/headers', $data);
			$this->load->view('form/statistik', $data);
			$this->load->view('templates/footers');
		}

		// public function create(){
		// $form = $this->form_model; //objek model
        // $validation = $this->form_validation; //objek form validation
        // $validation->set_rules($form->rules()); //menerapkan rules validasi pada mahasiswa_model
        // //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada mahasiswa_model
        // if ($validation->run()) {
        //     $form->save();
        //     $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //     Data Mahasiswa berhasil disimpan. 
        //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">&times;</span>
        //   </button></div>');
        //     redirect("form");
        // }
        // $data["title"] = "Tambah Data Mahasiswa";
        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/menu');
        // $this->load->view('mahasiswa/add', $data);
        // $this->load->view('templates/footer');

        // Membuat function edit untuk mengambil data yang akan di edit(single data) lalu ditampilkan di halaman
		public function edit($id){
			$data['title'] = 'Edit Data';
			// Mengambil id
			$where = array('id' =>$id);
			// Menampilkan single data dari id
			$data['karyawan'] = $this->karyawan_model->edit_data($where, 'karyawan')->result();

			$this->load->view('templates/header');
			$this->load->view('karyawan/edit', $data);
			$this->load->view('templates/footer');
		}

		// Membuat function update untuk mengupdate data
		public function update(){
			// Memasukan data update yang dikirim dari form ke variable
            $id				= $this->input->post('id');
            $no_pegawai   = $this->input->post('no_pegawai');
            $nama = $this->input->post('nama');
            $jk = $this->input->post('jk');
            $status = $this->input->post('status');
            $tgllahir = $this->input->post('tgllahir');
            $alamat = $this->input->post('alamat');
			$nohp = $this->input->post('nohp');


			// Membuat array untuk mengupdate data
			$data = array(

                'no_pegawai' => $no_pegawai,
                'nama' => $nama,
                'jk' => $jk,
                'status' => $status,
                'tgllahir' => $tgllahir,
                'alamat' => $alamat,
				'nohp' => $nohp
			);

			// Mengupdate data dengan index id
			$where = array(
				'id'	=>$id
			);
			// Memanggil function update dari model
			$this->karyawan_model->update($where,$data, 'karyawan');
			$this->session->set_flashdata('data_updated', 'Data Berhasil Di update');
			redirect('karyawan');
		}
		
		// Membuat function delete untuk menghapus data
		public function delete($id)
		{
			// Mengambil id yang akan dihapus
			$where = array('id' => $id);
			// Mengambil function delete dari model
			$this->karyawan_model->delete($where, 'karyawan');
			$this->session->set_flashdata('data_deleted', 'Data Berhasil Di Hapus');
			redirect('karyawan');
		}

		// Membuat function export untuk mengekspor data ke PDF
		public function export(){
			// Load Library dompdf
			$this->load->library('dompdf_gen');

			// Mengambil data yang akan diPDF kan disini saya akan ambil semuanya jadi pakai function get_karyawan() yang berada di model
			$data['karyawan'] = $this->karyawan_model->get_karyawan();

			// Memanggil view
			$this->load->view('karyawan/laporan_pdf', $data);

			// ukuran kertas dan orientasi nya potrait/landscape
			$paper_size = 'A4';
			$orientation = 'potrait';

			// Ekspor to PDF
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orientation);

			$this->dompdf->load_html($html);
			$this->dompdf->render();
			// Menamakan Output file nya
			$this->dompdf->stream("Laporankaryawan.pdf", array('Attachment' =>0));
		}


		// Membuat function search untuk mencari data yang diinginkan
        public function search(){
            $data['title'] = 'Data Karyawan';
            $keyword = $this->input->post('keyword');
			// Mengeksekusi function get_keyword yang berada di model
            $data['karyawan'] = $this->karyawan_model->get_keyword($keyword);
        
            $this->load->view('templates/header');
			$this->load->view('karyawan/search', $data);
			$this->load->view('templates/footer');
        }


	}
