<?php 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Deklarasi pembuatan class Matakuliah
class Matakuliah extends CI_Controller
{
    // Konstruktor	
	function __construct()
    {
        parent::__construct();
        $this->load->model('Matakuliah_model'); // Memanggil Matakuliah_model yang terdapat pada models
		$this->load->model('Users_model'); // Memanggil Users_model yang terdapat pada models
        $this->load->library('form_validation'); // Memanggil form_validation yang terdapat pada library
		$this->load->library('datatables'); // Memanggil datatables yang terdapat pada library
    }
	
	// Fungsi untuk menampilkan halaman matakuliah
    public function index(){	
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
        $this->load->view('matakuliah/matakuliah_list'); // Menampilkan halaman utama matakuliah
		$this->load->view('footer_list'); // Menampilkan bagian footer
    }
	
	// Fungsi JSON
	public function json() {
        header('Content-Type: application/json');
        echo $this->Matakuliah_model->json();
    }	

}

/* End of file Matakuliah.php */
/* Location: ./application/controllers/Matakuliah.php */
/* Please DO NOT modify this information : */
?>
