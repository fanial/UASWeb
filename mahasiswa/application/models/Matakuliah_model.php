<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Deklarasi pembuatan class Matakuliah_model
class Matakuliah_model extends CI_Model
{
    // Property yang bersifat public   
    public $table = 'matakuliah';
    public $id = 'kode_matakuliah';
    public $order = 'DESC';
	public $hasil='';
    
   // Konstrutor    
   function __construct()
    {
        parent::__construct();
    }

    // Tabel data dengan nama matakuliah dan prodi 
    function json() {       
		$username    = $this->session->userdata['username'];
		$this->datatables->select("matakuliah.sks, matakuliah.kode_matakuliah, matakuliah.nama_matakuliah, prodi.nama_prodi,matakuliah.jenis, (CASE WHEN matakuliah.jenis ='U' THEN 'Umum' WHEN matakuliah.jenis ='W' THEN 'Wajib' ELSE 'Pilihan' END) as namaJenis ");
        $this->datatables->from('matakuliah, prodi, mahasiswa');
        //add this line for join        
		$this->datatables->where('mahasiswa.nim = '.$username);  
        $this->datatables->where('mahasiswa.id_prodi = prodi.id_prodi');  	
		$this->datatables->where('matakuliah.id_prodi = mahasiswa.id_prodi');  	
        return $this->datatables->generate();
    }
   
   
   // Menampilkan semua data 
   function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // Menampilkan semua data berdasarkan id-nya
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
	// menampilkan jumlah data	
    function total_rows($q = NULL) {
        $this->db->like('kode_matakuliah', $q);
		$this->db->or_like('kode_matakuliah', $q);
		$this->db->or_like('nama_matakuliah', $q);
		$this->db->or_like('sks', $q);
		$this->db->or_like('semester', $q);
		$this->db->or_like('jenis', $q);
		$this->db->or_like('id_prodi', $q);
		$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // Menampilkan data dengan jumlah limit
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('kode_matakuliah', $q);
		$this->db->or_like('kode_matakuliah', $q);
		$this->db->or_like('nama_matakuliah', $q);
		$this->db->or_like('sks', $q);
		$this->db->or_like('semester', $q);
		$this->db->or_like('jenis', $q);
		$this->db->or_like('id_prodi', $q);
		$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }   

}

/* End of file Matakuliah_model.php */
/* Location: ./application/models/Matakuliah_model.php */
/* Please DO NOT modify this information : */
