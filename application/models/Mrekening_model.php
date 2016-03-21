<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mrekening_model extends CI_Model
{

    public $table = 'sipd_mrekening';
    public $id = 'AkunID';
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
        $this->db->like('AkunID', $q);
	$this->db->or_like('Description', $q);
	$this->db->or_like('Stat_', $q);
	$this->db->or_like('DescriptionRekening', $q);
	$this->db->or_like('DescriptionSubject', $q);
	$this->db->or_like('DescriptionObject', $q);
	$this->db->or_like('DescriptionDetail', $q);
	$this->db->or_like('RekeningID', $q);
	$this->db->or_like('SubjectID', $q);
	$this->db->or_like('ObjectID', $q);
	$this->db->or_like('DetailID', $q);
	$this->db->or_like('Stat2_', $q);
	$this->db->or_like('Stat21_', $q);
	$this->db->or_like('StatRincian', $q);
	$this->db->or_like('StatHitung', $q);
	$this->db->or_like('Periode', $q);
	$this->db->or_like('Prosen', $q);
	$this->db->or_like('HargaDasar', $q);
	$this->db->or_like('Satuan', $q);
	$this->db->or_like('_pajak', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('AkunID', $q);
	$this->db->or_like('Description', $q);
	$this->db->or_like('Stat_', $q);
	$this->db->or_like('DescriptionRekening', $q);
	$this->db->or_like('DescriptionSubject', $q);
	$this->db->or_like('DescriptionObject', $q);
	$this->db->or_like('DescriptionDetail', $q);
	$this->db->or_like('RekeningID', $q);
	$this->db->or_like('SubjectID', $q);
	$this->db->or_like('ObjectID', $q);
	$this->db->or_like('DetailID', $q);
	$this->db->or_like('Stat2_', $q);
	$this->db->or_like('Stat21_', $q);
	$this->db->or_like('StatRincian', $q);
	$this->db->or_like('StatHitung', $q);
	$this->db->or_like('Periode', $q);
	$this->db->or_like('Prosen', $q);
	$this->db->or_like('HargaDasar', $q);
	$this->db->or_like('Satuan', $q);
	$this->db->or_like('_pajak', $q);
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

/* End of file Mrekening_model.php */
/* Location: ./application/models/Mrekening_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-03-21 15:38:39 */
/* http://harviacode.com */