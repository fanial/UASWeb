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
			'univ'     => 'Universitas Langit Inspirasi',
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
	
	// Fungsi untuk menampilkan halaman matakuliah secara detail
    public function read($id){
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
		
		// Query untuk menampilkan matakuliah dan program studinya
		$sql   = "SELECT * FROM prodi, matakuliah 
		          WHERE prodi.id_prodi = matakuliah.id_prodi
				  AND matakuliah.kode_matakuliah = '$id'";		
		$row = $this->db->query($sql)->row();			
		
		// Jika data matakuliah tersedia maka akan ditampilkan
        if ($row) {
			
            $data = array(
			'button' => 'Read',
			'back'   => site_url('matakuliah'),
			'kode_matakuliah' => $row->kode_matakuliah,
			'nama_matakuliah' => $row->nama_matakuliah,
			'sks' => $row->sks,
			'semester' => $row->semester,
			'jenis' => $row->jenis,
			'nama_prodi' => $row->nama_prodi,
			);
			
			$this->load->view('header',$dataAdm);
            $this->load->view('matakuliah/matakuliah_read', $data);
			$this->load->view('footer');
        } 
		// Jika data matakuliah tidak tersedia maka akan ditampilkan informasi 'Record Not Found'
		else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('matakuliah'));
        }
    }
	
	// Fungsi menampilkan form Create Matakuliah
    public function create(){
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
		
		// Menampung data yang diinputkan
        $data = array(
            'button' => 'Create',
			'back'   => site_url('matakuliah'),
            'action' => site_url('matakuliah/create_action'),
			'kode_matakuliah' => set_value('kode_matakuliah'),
			'nama_matakuliah' => set_value('nama_matakuliah'),
			'sks' => set_value('sks'),
			'semester' => set_value('semester'),
			'jenis' => set_value('jenis'),
			'id_prodi' => set_value('id_prodi'),
		);
		$this->load->view('header',$dataAdm); // Menampilkan bagian header dan object data users 	
        $this->load->view('matakuliah/matakuliah_form', $data); // Menampilkan halaman form matakuliah
		$this->load->view('footer'); // Menampilkan bagian footer
    }
    
	// Fungsi untuk melakukan aksi simpan data
    public function create_action(){
		// Jika session data username tidak ada maka akan dialihkan kehalaman login			
		if (!isset($this->session->userdata['username'])) {
			redirect(base_url("login"));
		}
	
        $this->_rules(); // Rules atau aturan bahwa setiap form harus diisi
		
		// Jika form matakuliah belum diisi dengan benar 
		// maka sistem akan meminta user untuk menginput ulang
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } 
		// Jika form matakuliah telah diisi dengan benar 
		// maka sistem akan menyimpan kedalam database
		else {
            $data = array(
			'kode_matakuliah' => $this->input->post('kode_matakuliah',TRUE),
			'nama_matakuliah' => $this->input->post('nama_matakuliah',TRUE),
			'sks' => $this->input->post('sks',TRUE),
			'semester' => $this->input->post('semester',TRUE),
			'jenis' => $this->input->post('jenis',TRUE),
			'id_prodi' => $this->input->post('id_prodi',TRUE),
			);
           
            $this->Matakuliah_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('matakuliah'));
        }
    }
    
	// Fungsi menampilkan form Update Matakuliah
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
		
		// Menampilkan data berdasarkan id-nya yaitu kode_matakuliah
        $row = $this->Matakuliah_model->get_by_id($id);
		
		// Jika id-nya dipilih maka data matakuliah ditampilkan ke form edit matakuliah
        if ($row) {
            $data = array(
                'button' => 'Update',
				'back'   => site_url('matakuliah'),
                'action' => site_url('matakuliah/update_action'),
				'kode_matakuliah' => set_value('kode_matakuliah', $row->kode_matakuliah),
				'nama_matakuliah' => set_value('nama_matakuliah', $row->nama_matakuliah),
				'sks' => set_value('sks', $row->sks),
				'semester' => set_value('semester', $row->semester),
				'jenis' => set_value('jenis', $row->jenis),
				'id_prodi' => set_value('id_prodi', $row->id_prodi),
				);
			$this->load->view('header',$dataAdm); // Menampilkan bagian header dan object data users 	
            $this->load->view('matakuliah/matakuliah_form', $data); // Menampilkan form matakuliah
			$this->load->view('footer'); // Menampilkan bagian footer
        } 
		// Jika id-nya yang dipilih tidak ada maka akan menampilkan pesan 'Record Not Found'
		else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('matakuliah'));
        }
    }
    
	// Fungsi untuk melakukan aksi update data
    public function update_action(){
		// Jika session data username tidak ada maka akan dialihkan kehalaman login			
		if (!isset($this->session->userdata['username'])) {
			redirect(base_url("login"));
		}
	
        $this->_rules(); // Rules atau aturan bahwa setiap form harus diisi	
		
		// Jika form matakuliah belum diisi dengan benar 
		// maka sistem akan meminta user untuk menginput ulang
        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_matakuliah', TRUE));
        } 
		// Jika form matakuliah telah diisi dengan benar 
		// maka sistem akan melakukan update data matakuliah kedalam database
		else {
            $data = array(
			'kode_matakuliah' => $this->input->post('kode_matakuliah',TRUE),
			'nama_matakuliah' => $this->input->post('nama_matakuliah',TRUE),
			'sks' => $this->input->post('sks',TRUE),
			'semester' => $this->input->post('semester',TRUE),
			'jenis' => $this->input->post('jenis',TRUE),
			'id_prodi' => $this->input->post('id_prodi',TRUE),
			);

            $this->Matakuliah_model->update($this->input->post('kode_matakuliah', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('matakuliah'));
        }
    }
    
	// Fungsi untuk melakukan aksi delete data berdasarkan id yang dipilih
    public function delete($id){
		// Jika session data username tidak ada maka akan dialihkan kehalaman login			
		if (!isset($this->session->userdata['username'])) {
			redirect(base_url("login"));
		}
	
        $row = $this->Matakuliah_model->get_by_id($id);
		
		//jika id matakuliah yang dipilih tersedia maka akan dihapus
        if ($row) {
            $this->Matakuliah_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('matakuliah'));
        } 
		//jika id matakuliah yang dipilih tidak tersedia maka akan muncul pesan 'Record Not Found'
		else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('matakuliah'));
        }
    }
	
	// Fungsi rules atau aturan untuk pengisian pada form (create/input dan update)
    public function _rules() 
    {
	$this->form_validation->set_rules('kode_matakuliah', 'kode matakuliah', 'trim|required');
	$this->form_validation->set_rules('nama_matakuliah', 'nama matakuliah', 'trim|required');
	$this->form_validation->set_rules('sks', 'sks', 'trim|required');
	$this->form_validation->set_rules('semester', 'semester', 'trim|required');
	$this->form_validation->set_rules('jenis', 'jenis', 'trim|required');
	$this->form_validation->set_rules('id_prodi', 'id prodi', 'trim|required');

	$this->form_validation->set_rules('kode_matakuliah', 'kode_matakuliah', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Matakuliah.php */
/* Location: ./application/controllers/Matakuliah.php */
/* Please DO NOT modify this information : */
?>