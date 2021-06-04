<?php 
/*******************************************************/
/* File        : Prodi.php                             */
/* Lokasi File : ./application/controllers/Prodi.php   */
/* Copyright   : Yosef Murya & Badiyanto               */
/* Publish     : Penerbit Langit Inspirasi             */
/*-----------------------------------------------------*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Deklarasi pembuatan class Prodi
class Prodi extends CI_Controller
{
    // Konstruktor	
	function __construct()
    {
        parent::__construct();
        $this->load->model('Prodi_model'); // Memanggil Prodi_model yang terdapat pada models
		$this->load->model('Users_model'); // Memanggil Users_model yang terdapat pada models
        $this->load->library('form_validation'); // Memanggil form_validation yang terdapat pada library
		$this->load->library('datatables'); // Memanggil datatables yang terdapat pada library
    }
	
	// Fungsi untuk menampilkan halaman prodi 
    public function index(){
		
		// Jika session data username tidak ada maka akan dialihkan kehalaman login			
		if (!isset($this->session->userdata['username'])) {
			redirect(base_url("login"));
		}
		
		// Menampilkan data berdasarkan id-nya yaitu username
		$row = $this->Users_model->get_by_id($this->session->userdata['username']);
		$data = array(	
			'wa'       => 'Web administrator',
			'univ'     => 'Universitas Langit Inspirasi',
			'username' => $row->username,
			'email'    => $row->email,
			'level'    => $row->level,
		);		
		
		$this->load->view('header_list',$data); // Menampilkan bagian header dan object data users 
        $this->load->view('prodi/prodi_list'); // Menampilkan halaman prodi (program studi)
		$this->load->view('footer_list'); // Menampilkan bagian footer
    }
	
	// Fungsi JSON
	public function json() {
        header('Content-Type: application/json');
        echo $this->Prodi_model->json();
    }
	
	
	// Fungsi menampilkan form Create Prodi
    public function create(){
	  // Jika session data username tidak ada maka akan dialihkan kehalaman login			
	 if (!isset($this->session->userdata['username'])) {
		redirect(base_url("login"));
	 }
	 
	 // Menampilkan data berdasarkan id-nya yaitu username
	 $row = $this->Users_model->get_by_id($this->session->userdata['username']);
		$dataAdm = array(	
			'wa'       => 'Web administrator',
			'univ'     => 'Universitas Langit Inspirasi',
			'username' => $row->username,
			'email'    => $row->email,
			'level'    => $row->level,
		);	
		
	 // Menampung data yang diinputkan	
     $data = array(
        'button' => 'Create',
		'back'   => site_url('prodi'),
        'action' => site_url('prodi/create_action'),
	    'id_prodi' => set_value('id_prodi'),
	    'kode_prodi' => set_value('kode_prodi'),
		'nama_prodi' => set_value('nama_prodi'),
		'id_jurusan' => set_value('id_jurusan'),
	 );
	 
     $this->load->view('header', $dataAdm); // Menampilkan bagian header dan object data users 
	 $this->load->view('prodi/prodi_form', $data); // Menampilkan halaman utama yaitu form prodi 
	 $this->load->view('footer'); // Menampilkan bagian footer
    }
    
	// Fungsi untuk melakukan aksi simpan data
    public function create_action(){
		// Jika session data username tidak ada maka akan dialihkan kehalaman login			
		if (!isset($this->session->userdata['username'])) {
			redirect(base_url("login"));
		}
	
        $this->_rules(); // Rules atau aturan bahwa setiap form harus diisi
		
		// Jika form prodi belum diisi dengan benar 
		// maka sistem akan meminta user untuk menginput ulang
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } 
		// Jika form prodi telah diisi dengan benar 
		// maka sistem akan menyimpan kedalam database
		else {
            $data = array(
			'id_prodi' => $this->input->post('id_prodi',TRUE),
			'kode_prodi' => $this->input->post('kode_prodi',TRUE),
			'nama_prodi' => $this->input->post('nama_prodi',TRUE),
			'id_jurusan' => $this->input->post('id_jurusan',TRUE),
		);
           
          $this->Prodi_model->insert($data); 
          $this->session->set_flashdata('message', 'Create Record Success');
          redirect(site_url('prodi'));
        }
    }
    
	// Fungsi menampilkan form Update Prodi
    public function update($id){
		// Jika session data username tidak ada maka akan dialihkan kehalaman login			
		if (!isset($this->session->userdata['username'])) {
			redirect(base_url("login"));
		}
	
		// Menampilkan data berdasarkan id-nya yaitu username
		$rowAdm = $this->Users_model->get_by_id($this->session->userdata['username']);
		$dataAdm = array(	
			'wa'       => 'Web administrator',
			'univ'     => 'Universitas Langit Inspirasi',
			'username' => $rowAdm->username,
			'email'    => $rowAdm->email,
			'level'    => $rowAdm->level,
		);	
		// Menampilkan data berdasarkan id-nya yaitu id_prodi
        $row = $this->Prodi_model->get_by_id($id);
		
		// Jika id-nya dipilih maka data prodi ditampilkan ke form edit prodi
        if ($row) {
            $data = array(
                'button' => 'Update',
				'back'   => site_url('prodi'),
                'action' => site_url('prodi/update_action'),
				'id_prodi' => set_value('id_prodi', $row->id_prodi),
				'kode_prodi' => set_value('kode_prodi', $row->kode_prodi),
				'nama_prodi' => set_value('nama_prodi', $row->nama_prodi),
				'id_jurusan' => set_value('id_jurusan', $row->id_jurusan),
				);
			
			$this->load->view('header',$dataAdm); // Menampilkan bagian header dan object data users 
            $this->load->view('prodi/prodi_form', $data); // Menampilkan form prodi
			$this->load->view('footer'); // Menampilkan bagian footer
        } 
		// Jika id-nya yang dipilih tidak ada maka akan menampilkan pesan 'Record Not Found'
		else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('prodi'));
        }
    }
    
	// Fungsi untuk melakukan aksi update data
    public function update_action(){
		// Jika session data username tidak ada maka akan dialihkan kehalaman login			
		if (!isset($this->session->userdata['username'])) {
			redirect(base_url("login"));
		}
	
        $this->_rules(); // Rules atau aturan bahwa setiap form harus diisi	 
		
		// Jika form prodi belum diisi dengan benar 
		// maka sistem akan meminta user untuk menginput ulang
        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_prodi', TRUE));
        } 
		// Jika form prodi telah diisi dengan benar 
		// maka sistem akan melakukan update data prodi kedalam database
		else {
            $data = array(
			'id_prodi' => $this->input->post('id_prodi',TRUE),
			'kode_prodi' => $this->input->post('kode_prodi',TRUE),
			'nama_prodi' => $this->input->post('nama_prodi',TRUE),
			'id_jurusan' => $this->input->post('id_jurusan',TRUE),
			);

            $this->Prodi_model->update($this->input->post('id_prodi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('prodi'));
        }
    }
    
	// Fungsi untuk melakukan aksi delete data berdasarkan id yang dipilih
    public function delete($id){
		// Jika session data username tidak ada maka akan dialihkan kehalaman login			
		if (!isset($this->session->userdata['username'])) {
			redirect(base_url("login"));
		}
	
        $row = $this->Prodi_model->get_by_id($id);
		
		//jika id jurusan yang dipilih tersedia maka akan dihapus
        if ($row) {
            $this->Prodi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('prodi'));
        } 
		//jika id jurusan yang dipilih tidak tersedia maka akan muncul pesan 'Record Not Found'
		else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('prodi'));
        }
    }
	
	// Fungsi rules atau aturan untuk pengisian pada form (create/input dan update)
    public function _rules() 
    {
	$this->form_validation->set_rules('id_prodi', 'id prodi', 'trim|required');
	$this->form_validation->set_rules('kode_prodi', 'kode prodi', 'trim|required');
	$this->form_validation->set_rules('nama_prodi', 'nama prodi', 'trim|required');
	$this->form_validation->set_rules('id_jurusan', 'id jurusan', 'trim|required');

	$this->form_validation->set_rules('id_prodi', 'id_prodi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Prodi.php */
/* Location: ./application/controllers/Prodi.php */
/* Please DO NOT modify this information : */
?>