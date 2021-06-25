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
		$this->datatables->select("m.kode_matakuliah, m.nama_matakuliah, p.nama_prodi, m.jenis, (CASE WHEN m.jenis ='U' THEN 'Umum' WHEN m.jenis ='W' THEN 'Wajib' ELSE 'Pilihan' END) as namaJenis");
        $this->datatables->from(' matakuliah as m');
        //add this line for join
        $this->datatables->join('prodi as p','m.id_prodi= p.id_prodi');
        $this->datatables->add_column('action', anchor(site_url('matakuliah/read/$1'),'<button type="button" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button>')."  ".anchor(site_url('matakuliah/update/$1'),'<button type="button" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button>')."  ".anchor(site_url('matakuliah/delete/$1'),'<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'kode_matakuliah');
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

    // Menambahkan data kedalam database
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // Merubah data kedalam database
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // Menghapus data kedalam database
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}
