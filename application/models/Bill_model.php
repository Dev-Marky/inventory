<?php
class Bill_model extends CI_Model {
  function __construct() {
    parent::__construct();
    // $this->output->enable_profiler(TRUE);
  }

  function find_by_company($company_id) {
    $this->db->select('b.*, v.name vendor_name, sum(bi.quantity * bi.amount) amount');
    $this->db->join('vendors v', 'v.id = b.vendor_id');
    $this->db->join('bill_items bi', 'bi.bill_id = b.id', 'left outer');
    return $this->db->get_where('bills b', array('b.company_id' => $company_id))->result();
  }

  function read($id) {
    return $this->db->get_where('bills', array('id' => $id))->row();
  }

  function save($bill) {
    $this->db->insert('bills', $bill);
  }

  function update($bill, $id) {
    $this->db->update('bills', $bill, array('id' => $id));
  }

  function delete($id) {
    $this->db->delete('bills', array('id' => $id));
  }
}