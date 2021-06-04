<?php
/**********************************************************/
/* File        : Mahasiswa_model.php                      */
/* Lokasi File : ./application/models/Mahasiswa_model.php  */
/* Copyright   : Yosef Murya & Badiyanto                  */
/* Publish     : Penerbit Langit Inspirasi                */
/*--------------------------------------------------------*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Deklarasi pembuatan class Mahasiswa_model
class Mahasiswa_model extends CI_Model
{
	// Property yang bersifat public   
    public $table = 'mahasiswa';
    public $id = 'nim';
    public $order = 'DESC';
    
	// Konstrutor    
    function __construct()
    {
        parent::__construct();
    }
	
	// Tabel data dengan nama mahasiswa
    function json() {
		$username    = $this->session->userdata['username'];
        $this->datatables->select("nim, nama_lengkap, alamat, email, telp, IF(jenis_kelamin = 'P', 'Perempuan', 'Laki-laki') as jenisKelamin");
        $this->datatables->from('mahasiswa');
		$this->datatables->where('nim ='.$username);
        $this->datatables->add_column('action', anchor(site_url('mahasiswa/read/$1'),'<button type="button" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button>')."  ".anchor(site_url('mahasiswa/update/$1'),'<button type="button" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button>'), 'nim');
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
        $this->db->like('nim', $q);
		$this->db->or_like('nim', $q);
		$this->db->or_like('nama_lengkap', $q);
		$this->db->or_like('nama_panggilan', $q);
		$this->db->or_like('alamat', $q);
		$this->db->or_like('email', $q);
		$this->db->or_like('telp', $q);
		$this->db->or_like('tempat_lahir', $q);
		$this->db->or_like('tgl_lahir', $q);
		$this->db->or_like('jenis_kelamin', $q);
		$this->db->or_like('agama', $q);		
		$this->db->or_like('id_prodi', $q);
		$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // Menampilkan data dengan jumlah limit
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('nim', $q);
		$this->db->or_like('nim', $q);
		$this->db->or_like('nama_lengkap', $q);
		$this->db->or_like('nama_panggilan', $q);
		$this->db->or_like('alamat', $q);
		$this->db->or_like('email', $q);
		$this->db->or_like('telp', $q);
		$this->db->or_like('tempat_lahir', $q);
		$this->db->or_like('tgl_lahir', $q);
		$this->db->or_like('jenis_kelamin', $q);
		$this->db->or_like('agama', $q);		
		$this->db->or_like('id_prodi', $q);
		$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // Merubah data kedalam database
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

   

}

/* End of file Mahasiswa_model.php */
/* Location: ./application/models/Mahasiswa_model.php */
/* Please DO NOT modify this information : */