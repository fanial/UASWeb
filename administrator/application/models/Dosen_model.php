<?php

/**********************************************************/
/* File        : Dosen_model.php                      */
/* Lokasi File : ./application/models/Dosen_model.php  */
/* Copyright   : Yosef Murya & Badiyanto                  */
/* Publish     : Penerbit Langit Inspirasi                */
/*--------------------------------------------------------*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Deklarasi pembuatan class Dosen_model
class Dosen_model extends CI_Model
{

    public $table = 'dosen';
    public $id = 'id_dosen';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json()
    {
        $this->datatables->select('id_dosen,nidn,nama_dosen,alamat,jenis_kelamin,email,telp,photo');
        $this->datatables->from('dosen');
        $this->datatables->add_column('action', anchor(site_url('dosen/read/$1'), '<button type="button" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button>') . "  " . anchor(site_url('dosen/update/$1'), '<button type="button" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button>') . "  " . anchor(site_url('dosen/delete/$1'), '<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id_dosen');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL)
    {
        $this->db->like('id_dosen', $q);
        $this->db->or_like('nidn', $q);
        $this->db->or_like('nama_dosen', $q);
        $this->db->or_like('alamat', $q);
        $this->db->or_like('jenis_kelamin', $q);
        $this->db->or_like('email', $q);
        $this->db->or_like('telp', $q);
        $this->db->or_like('photo', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_dosen', $q);
        $this->db->or_like('nidn', $q);
        $this->db->or_like('nama_dosen', $q);
        $this->db->or_like('alamat', $q);
        $this->db->or_like('jenis_kelamin', $q);
        $this->db->or_like('email', $q);
        $this->db->or_like('telp', $q);
        $this->db->or_like('photo', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}

/* End of file Dosen_model.php */
/* Location: ./application/models/Dosen_model.php */
/* Please DO NOT modify this information : */