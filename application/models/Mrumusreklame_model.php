<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mrumusreklame_model extends CI_Model
{

    public $table = 'sipd_mrumusreklame';
    public $id = 'ThnPeriode';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
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
    function total_rows($q = NULL) {
        $this->db->like('ThnPeriode', $q);
	$this->db->or_like('Thn_', $q);
	$this->db->or_like('Bln_', $q);
	$this->db->or_like('Minggu_', $q);
	$this->db->or_like('Hari_', $q);
	$this->db->or_like('JlnNegara', $q);
	$this->db->or_like('JlnKabupaten', $q);
	$this->db->or_like('JlnLingkungan', $q);
	$this->db->or_like('SdtPandang>2', $q);
	$this->db->or_like('SdtPandang2', $q);
	$this->db->or_like('SdtPandang1', $q);
	$this->db->or_like('LokasiKhusus', $q);
	$this->db->or_like('LokasiBiasa', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('ThnPeriode', $q);
	$this->db->or_like('Thn_', $q);
	$this->db->or_like('Bln_', $q);
	$this->db->or_like('Minggu_', $q);
	$this->db->or_like('Hari_', $q);
	$this->db->or_like('JlnNegara', $q);
	$this->db->or_like('JlnKabupaten', $q);
	$this->db->or_like('JlnLingkungan', $q);
	$this->db->or_like('SdtPandang>2', $q);
	$this->db->or_like('SdtPandang2', $q);
	$this->db->or_like('SdtPandang1', $q);
	$this->db->or_like('LokasiKhusus', $q);
	$this->db->or_like('LokasiBiasa', $q);
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

/* End of file Mrumusreklame_model.php */
/* Location: ./application/models/Mrumusreklame_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-03-21 15:38:52 */
/* http://harviacode.com */