<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Deklarasi pembuatan class Thn_akad_semester
class Thn_akad_semester extends CI_Controller
{
	// Konstruktor	
    function __construct()
    {
        parent::__construct();
        $this->load->model('Thn_akad_semester_model'); // Memanggil Thn_akad_semester_model yang terdapat pada models
		$this->load->model('Users_model'); // Memanggil Users_model yang terdapat pada models 
        $this->load->library('form_validation'); // Memanggil form_validation yang terdapat pada library        
		$this->load->library('datatables'); // Memanggil datatables yang terdapat pada library
    }
	
	// Fungsi untuk menampilkan halaman tahun akademik semester
    public function index(){
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
		
		$this->load->view('header_list',$dataAdm); // Menampilkan bagian header dan object data users 
        $this->load->view('thn_akad_semester/thn_akad_semester_list'); // Menampilkan halaman tahun akademik
		$this->load->view('footer_list'); // Menampilkan bagian footer
    } 
    
	// Fungsi JSON
    public function json() {
        header('Content-Type: application/json');
        echo $this->Thn_akad_semester_model->json();
    }
	
	// Fungsi menampilkan form Create Tahun akademik semester
    public function create(){
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
/* End of file Thn_akad_semester.php */
/* Location: ./application/controllers/Thn_akad_semester.php */
/* Please DO NOT modify this information : */
?>
