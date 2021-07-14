<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Deklarasi pembuatan class Jurusan
class Jurusan extends CI_Controller
{
	// Konstrutor 
    function __construct()
    {
        parent::__construct();
        $this->load->model('Jurusan_model'); // Memanggil Jurusan_model yang terdapat pada models
		$this->load->model('Users_model'); // Memanggil Users_model yang terdapat pada models
        $this->load->library('form_validation'); // Memanggil form_validation yang terdapat pada library        
		$this->load->library('datatables'); // Memanggil datatables yang terdapat pada library
    }
	
	// Fungsi untuk menampilkan halaman utama jurusan
    public function index()
    {
		// Jika session data username tidak ada maka akan dialihkan kehalaman login			
		if (!isset($this->session->userdata['username'])) {
			redirect(base_url("login"));
		}
		
		// Menampilkan data berdasarkan id-nya yaitu username
		$row = $this->Users_model->get_by_id($this->session->userdata['username']);
		$data = array(	
			'wa'       => 'Web administrator',
			'univ'     => 'STMIK Mardira Indonesia',
			'username' => $row->username,
			'email'    => $row->email,
			'level'    => $row->level,
		);		
		$this->load->view('header_list',$data); // Menampilkan bagian header dan object data users 
        $this->load->view('jurusan/jurusan_list'); // Menampilkan halaman utama jurusan
		$this->load->view('footer_list'); // Menampilkan bagian footer		 
    } 
    
	// Fungsi JSON
    public function json() {
        header('Content-Type: application/json');
        echo $this->Jurusan_model->json(); // Menampilkan data json yang terdapat pada Jurusan_model
    }
	
	// Fungsi menampilkan form Create Jurusan
    public function create() 
    {
		// Jika session data username tidak ada maka akan dialihkan kehalaman login			
		if (!isset($this->session->userdata['username'])) {
			redirect(base_url("login"));
		}
	
		// Menampilkan data berdasarkan id-nya yaitu username
		$row = $this->Users_model->get_by_id($this->session->userdata['username']);
		$dataAdm = array(	
			'wa'       => 'Web administrator',
			'univ'     => 'STMIK Mardira Indonesia',
			'username' => $row->username,
			'email'    => $row->email,
			'level'    => $row->level,
		);	
		
		// Menampung data yang diinputkan 
        $data = array(
            'button' => 'Create',
			'back'   => site_url('jurusan'),
            'action' => site_url('jurusan/create_action'),
			'id_jurusan' => set_value('id_jurusan'),
			'kode_jurusan' => set_value('kode_jurusan'),
			'nama_jurusan' => set_value('nama_jurusan'),
	);
		$this->load->view('header', $dataAdm); // Menampilkan bagian header dan object data users 
        $this->load->view('jurusan/jurusan_form', $data); // Menampilkan form jurusan
		$this->load->view('footer'); // Menampilkan bagian footer
    }
    
	// Fungsi untuk melakukan aksi simpan data
    public function create_action() 
    {
		// Jika session data username tidak ada maka akan dialihkan kehalaman login			
		if (!isset($this->session->userdata['username'])) {
			redirect(base_url("login"));
		}
		
        $this->_rules(); // Rules atau aturan bahwa setiap form harus diisi
		
		// Jika form jurusan belum diisi dengan benar 
		// maka sistem akan meminta user untuk menginput ulang
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } 
		// Jika form jurusan telah diisi dengan benar 
		// maka sistem akan menyimpan kedalam database
		else {
            $data = array(
				'kode_jurusan' => $this->input->post('kode_jurusan',TRUE),
				'nama_jurusan' => $this->input->post('nama_jurusan',TRUE),
	    );

            $this->Jurusan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jurusan'));
        }
    }
    
	// Fungsi menampilkan form Update Jurusan
    public function update($id) 
    {	
		// Jika session data username tidak ada maka akan dialihkan kehalaman login			
		if (!isset($this->session->userdata['username'])) {
			redirect(base_url("login"));
		}
		
		// Menampilkan data berdasarkan id-nya yaitu username
		$rowAdm = $this->Users_model->get_by_id($this->session->userdata['username']);
		$dataAdm = array(	
				'wa'       => 'Web administrator',
				'univ'     => 'STMIK Mardira Indonesia',
				'username' => $rowAdm->username,
				'email'    => $rowAdm->email,
				'level'    => $rowAdm->level,
		);	
		
		// Menampilkan data berdasarkan id-nya yaitu jurusan
        $row = $this->Jurusan_model->get_by_id($id);
		
		// Jika id-nya dipilih maka data jurusan ditampilkan ke form edit jurusan
        if ($row) {
			
            $data = array(
                'button' => 'Update',
				'back'   => site_url('jurusan'),
                'action' => site_url('jurusan/update_action'),
				'id_jurusan' => set_value('id_jurusan', $row->id_jurusan), 
				'kode_jurusan' => set_value('kode_jurusan', $row->kode_jurusan),
				'nama_jurusan' => set_value('nama_jurusan', $row->nama_jurusan),
	    );
			$this->load->view('header',$dataAdm); // Menampilkan bagian header dan object data users 
            $this->load->view('jurusan/jurusan_form', $data); // Menampilkan form jurusan 
			$this->load->view('footer'); // Menampilkan bagian footer
        } 
		// Jika id-nya yang dipilih tidak ada maka akan menampilkan pesan 'Record Not Found'
		else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jurusan'));
        }
    }
    
	// Fungsi untuk melakukan aksi update data
    public function update_action() 
    {
		// Jika session data username tidak ada maka akan dialihkan kehalaman login			
		if (!isset($this->session->userdata['username'])) {
			redirect(base_url("login"));
		}
		
        $this->_rules(); // Rules atau aturan bahwa setiap form harus diisi
		
		// Jika form jurusan belum diisi dengan benar 
		// maka sistem akan meminta user untuk menginput ulang
        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_jurusan', TRUE));
        } 
		// Jika form jurusan telah diisi dengan benar 
		// maka sistem akan melakukan update data jurusan kedalam database
		else {			
		    $data = array(
				'kode_jurusan' => $this->input->post('kode_jurusan',TRUE),
				'nama_jurusan' => $this->input->post('nama_jurusan',TRUE),
			);

            $this->Jurusan_model->update($this->input->post('id_jurusan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jurusan'));
        }
    }
    
	// Fungsi untuk melakukan aksi delete data berdasarkan id yang dipilih
    public function delete($id) 
    {
		// Jika session data username tidak ada maka akan dialihkan kehalaman login			
		if (!isset($this->session->userdata['username'])) {
			redirect(base_url("login"));
		}
		
        $row = $this->Jurusan_model->get_by_id($id);
		
		//jika id jurusan yang dipilih tersedia maka akan dihapus
        if ($row) {
            $this->Jurusan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jurusan'));
        } 
		//jika id jurusan yang dipilih tidak tersedia maka akan muncul pesan 'Record Not Found'
		else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jurusan'));
        }
    }
	
	// Fungsi rules atau aturan untuk pengisian pada form (create/input dan update)
    public function _rules() 
    {
	$this->form_validation->set_rules('kode_jurusan', 'kode jurusan', 'trim|required');
	$this->form_validation->set_rules('nama_jurusan', 'nama jurusan', 'trim|required');

	$this->form_validation->set_rules('id_jurusan', 'id_jurusan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jurusan.php */
/* Location: ./application/controllers/Jurusan.php */
/* Please DO NOT modify this information : */
