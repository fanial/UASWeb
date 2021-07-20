<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Deklarasi pembuatan class Nilai
class Nilai extends CI_Controller
{
  
  // Konstruktor	
  function __construct()
    {
        parent::__construct();
        $this->load->model('Transkrip_model'); // Memanggil Transkrip_model yang terdapat pada models
		$this->load->model('Users_model'); // Memanggil Users_model yang terdapat pada models
        $this->load->library('form_validation'); // Memanggil form_validation yang terdapat pada library
		$this->load->helper('my_function'); // Memanggil fungsi my_function yang terdapat pada helper	
    }
  
  // Fungsi untuk menampilkan halaman nilai 
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
	  
	  // Menampung data yang diberi nilai
      $data = array(
        'button' => 'Proses',		
        'action' => site_url('nilai/nilaiKhs_action'),
	    'nim' => set_value('nim'),
		'id_thn_akad' => set_value('id_thn_akad'),
	  );
				
        $this->load->view('header',$dataAdm ); // Menampilkan bagian header dan object data users 
        $this->load->view('nilai/nilaiKhs_form', $data); // Menampilkan halaman utama yaitu form nilai 
		$this->load->view('footer'); // Menampilkan bagian footer
    }
	
	// Fungsi untuk melakukan aksi menampilkan data nilai
    public function nilaiKhs_action(){
		// Jika session data username tidak ada maka akan dialihkan kehalaman login			
		if (!isset($this->session->userdata['username'])) {
			redirect(base_url("login"));
		}
	
		$this->_rulesKhs(); // Rules atau aturan bahwa setiap form harus diisi
	
		// Jika form nilai belum diisi dengan benar 
		// maka sistem akan meminta user untuk menginput ulang
		if ($this->form_validation->run() == FALSE) {
				$this->nilaiKhs_action();
		} 
		// Jika form nilai telah diisi dengan benar 
		// maka sistem akan menyimpan kedalam database
		else {
			$nim=$this->input->post('nim',TRUE);
			$thn_akad=$this->input->post('id_thn_akad',TRUE);
			
			// Query menampilkan KRS berdasarkan nim dan tahun akademik
			$sql = "SELECT krs.id_thn_akad
						 , krs.kode_matakuliah
						 , matakuliah.nama_matakuliah
						 , matakuliah.sks
						 , krs.nilai
					FROM
					   krs
					INNER JOIN matakuliah 
					ON (krs.kode_matakuliah = matakuliah.kode_matakuliah)
					WHERE krs.nim=$nim AND krs.id_thn_akad=$thn_akad";		     
			  $query = $this->db->query($sql)->result();
			  
			  $smt = $this->db->select('thn_akad, semester')
							  ->from('thn_akad_semester')
							  ->where(array('id_thn_akad'=>$thn_akad))->get()->row();	 
			  
			  // Query menampilkan mahasiswa dan program studi berdasarkan id_prodi	  
			  $query_str="SELECT mahasiswa.nim
							 , mahasiswa.nama_lengkap
							 , prodi.nama_prodi
						  FROM
							 mahasiswa
							INNER JOIN prodi 
							ON (mahasiswa.id_prodi = prodi.id_prodi);";
			  $mhs=$this->db->query($query_str)->row();
			  
			  // Mengkonversi semester dalam bentuk integer ke string
			  if($smt->semester == 1){
				  $tampilSemester ="Ganjil";
			  }
			  else{
				  $tampilSemester ="Genap";
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
			  
			  // Menampung data dari tabel mahasiswa dan program studi
			  $data = array('button' => 'Detail',
							'back'   => site_url('nilai'),
							'mhs_data'=>$query,
							'mhs_nim'=>$nim,
							'mhs_nama'=>$mhs->nama_lengkap,
							'mhs_prodi'=>$mhs->nama_prodi,
							'thn_akad'=>$smt->thn_akad."(". $tampilSemester.")"
							);
						  
			$this->load->view('header',$dataAdm); // Menampilkan bagian header dan object data users 
			$this->load->view('nilai/khs',$data); // Menampilkan halaman khs
			$this->load->view('footer'); // Menampilkan bagian footer
		}
   }
   
    // Fungsi rules atau aturan untuk pengisian pada form (create/input dan update) KHS
    public function _rulesKhs(){
	 $this->form_validation->set_rules('nim', 'nim', 'trim|required|min_length[10]|max_length[10]');
	 $this->form_validation->set_rules('id_thn_akad','id_thn_akad', 'trim|required');
	}
	
	// Fungsi rules atau aturan untuk pengisian pada form (create/input dan update) Transkrip
	public function _rulesTranskrip(){
	 	
	 $this->form_validation->set_rules('nim', 'nim', 'trim|required|min_length[10]|max_length[10]');
	}
	
	// Fungsi untuk membuat Transkrip
	public function buatTranskrip(){
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
	  
      // Menampung data berdasarkan nim yang diinputkan  
      $data = array(
        'button' => 'Proses',
        'action' => site_url('nilai/buatTranskrip_action'),
	    'nim' => set_value('nim')		
	    );
				
        $this->load->view('header',$dataAdm); // Menampilkan bagian header dan object data users 	
        $this->load->view('nilai/buatTranskrip_form', $data); // Menampilkan halaman form buat transkrip
		$this->load->view('footer'); // Menampilkan bagian footer
    }
	
	// Fungsi untuk melakukan aksi buat transkrip
	public function buatTranskrip_action(){
		// Jika session data username tidak ada maka akan dialihkan kehalaman login			
		if (!isset($this->session->userdata['username'])) {
			redirect(base_url("login"));
		}
	
		$this->_rulesTranskrip(); // Rules atau aturan bahwa setiap form harus diisi
		
		// Jika form buat transkrip belum diisi dengan benar 
		// maka sistem akan meminta user untuk menginput ulang
		if ($this->form_validation->run() == FALSE) {
				$this->buatTranskrip();
		} 
		// Jika form buat transkrip telah diisi dengan benar 
		// maka sistem akan menyimpan kedalam database
		else {
			$nim=$this->input->post('nim',TRUE);
			
			// Query menampilkan semua data pada tabel krs
			$this->db->select('*');
			$this->db->from('krs');
			$this->db->where('nim', $nim);
			$query=$this->db->get();
			foreach ($query->result() as $value)
			{				
                // Melakukan pengecekan pada tabel krs, 
				// jika terdapat belum ada nilai maka tambahkan nilai tersebut/	
                // Jika sudah ada nilai pada tabel krs maka yang diinput adalah nilai yang terbesar				
				cekNilai($value->nim,$value->kode_matakuliah,$value->nilai);
				  
			}
			
			// Query menampilkan data traskrip nilai berdasarkan matakuliah 
			$this->db->select('t.kode_matakuliah,m.nama_matakuliah,m.sks,t.nilai');
			$this->db->from('transkrip as t');
			$this->db->join('matakuliah as m','m.kode_matakuliah = t.kode_matakuliah');
			$trans = $this->db->get()->result();
			
			// Query menampilkan data mahasiswa
			$mhs=$this->db->select('nama_lengkap,id_prodi')
							->from('mahasiswa')
							->where(array('nim'=>$nim))
							->get()->row();
			
			// Query menampilkan data program studi
			$prodi=$this->db->select('nama_prodi')
							->from('prodi')
							->where(array('id_prodi'=>$mhs->id_prodi))
							->get()->row()->nama_prodi;		
			
			// Menampung data berdasarkan nim, nama dan prodi 
			$data=array('trans'=>$trans,
						'nim'=>$nim,
						'nama'=>$mhs->nama_lengkap,
						'prodi'=>$prodi);
			
			// Menampilkan data berdasarkan id-nya yaitu username
			$rowAdm = $this->Users_model->get_by_id($this->session->userdata['username']);
			$dataAdm = array(	
					'wa'       => 'Web administrator',
					'univ'     => 'STMIK Mardira Indonesia',
					'username' => $rowAdm->username,
					'email'    => $rowAdm->email,
					'level'    => $rowAdm->level,
				);  
					
			$this->load->view('header',$dataAdm); // Menampilkan bagian header dan object data users 
			$this->load->view('nilai/buatTranskrip',$data); // Menampilkan form membuat transkrip
			$this->load->view('footer'); // Menampilkan bagian footer
		}
   }
   
   // Fungsi menampilkan form Input Nilai
    public function inputNilai(){
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
	  
	  // Menampung data yang diinputkan
      $data = array(
        'button' => 'Proses',
		'back'   => site_url('nilai/inputNilai'),
        'action' => site_url('nilai/inputNilai_action'),
	    'kode_matakuliah' => set_value('kode_matakuliah'),
		'id_thn_akad' => set_value('id_thn_akad'),
	    );		
		
        $this->load->view('header',$dataAdm); // Menampilkan bagian header dan object data users	 
        $this->load->view('nilai/inputNilai_form', $data); // Menampilkan halaman form input nilai
		$this->load->view('footer'); // Menampilkan bagian footer
    }
	
	// Fungsi untuk melakukan aksi menampilkan nilai 
	public function inputNilai_action(){  
	 // Jika session data username tidak ada maka akan dialihkan kehalaman login			
	 if (!isset($this->session->userdata['username'])) {
		redirect(base_url("login"));
	 }
	
	 $this->_rulesInputNilai(); // Rules atau aturan bahwa setiap form harus diisi
		
		// Jika form nilai belum diisi dengan benar 
		// maka sistem akan meminta user untuk menginput ulang
		if ($this->form_validation->run() == FALSE) {
				$this->inputNilai();
		} 
		// Jika form nilai telah diisi dengan benar 
		// maka sistem akan menyimpan kedalam database
		else {
		  $kode_mk =$this->input->post('kode_matakuliah',TRUE);
		  $id_thn_akad=$this->input->post('id_thn_akad',TRUE);		 
		 
		  $this->db->select('k.id_krs, k.nim, m.nama_lengkap, k.nilai, d.nama_matakuliah' );
		  $this->db->from('krs as k');
		  $this->db->join('mahasiswa as m','m.nim = k.nim');
		  $this->db->join('matakuliah as d','k.kode_matakuliah = d.kode_matakuliah');		   
		  $this->db->where('k.id_thn_akad', $id_thn_akad);
		  $this->db->where('k.kode_matakuliah',$kode_mk);
		  $qry=$this->db->get()->result();
		  
		  // Menampung data yang diinputkan berdasarkan kode matakuliah dan id tahun akademik
		  $data=array('button' => 'Input',
					  'back'   => site_url('nilai/inputNilai'),
		              'list_nilai'=>$qry,
					  'action' => site_url('nilai/simpan_action'),
					  'kode_matakuliah'=>$kode_mk,
					  'id_thn_akad'=>$id_thn_akad);
		  
		  // Menampilkan data berdasarkan id-nya yaitu username
		  $rowAdm = $this->Users_model->get_by_id($this->session->userdata['username']);
		  $dataAdm = array(	
			'wa'       => 'Web administrator',
			'univ'     => 'STMIK Mardira Indonesia',
			'username' => $rowAdm->username,
			'email'    => $rowAdm->email,
			'level'    => $rowAdm->level,
			);
		
		  $this->load->view('header',$dataAdm); // Menampilkan bagian header dan object data users
		  $this->load->view('nilai/listNilai',$data); // Menampilkan halaman list nilai
		  $this->load->view('footer'); // Menampilkan bagian footer
		 }
	 
	}
	
	// Fungsi untuk melakukan aksi simpan data
	public function simpan_action(){
     // Jika session data username tidak ada maka akan dialihkan kehalaman login			
	 if (!isset($this->session->userdata['username'])) {
		redirect(base_url("login"));
	 }	
	 
	 $nilaiLis=array();	 
	 $id_krs = $_POST['id_krs']; // input data berdasarkan id_krs	  
	 $nilai  = $_POST['nilai'];  // input data berdasarkan nilai
	 	
     for ($i=0; $i<sizeof($id_krs); $i++)
     {
 	   
	   $this->db->set('nilai',$nilai[$i])->where('id_krs',$id_krs[$i])->update('krs');	 
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
     // Menampung data yang diinputkan	
	 $data=array(
				 'id_krs'=>$id_krs,
				 'button' => 'Input',
			     'back'   => site_url('nilai/inputNilai'),
				 );
	 
	 $this->load->view('header',$dataAdm); // Menampilkan bagian header dan object data users 	
	 $this->load->view('nilai/nilai',$data); // Menampilkan halaman form nilai
	 $this->load->view('footer'); // Menampilkan bagian footer
	}
	
	public function _rulesInputNilai()
    {
	 $this->form_validation->set_rules('kode_matakuliah', 'kode_matakuliah', 'trim|required');
	 $this->form_validation->set_rules('id_thn_akad','id_thn_akad', 'trim|required');
	}
}

/* End of file Nilai.php */
/* Location: ./application/controllers/Nilai.php */
/* Please DO NOT modify this information : */
?>
