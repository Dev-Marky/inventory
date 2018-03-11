<?php
class Vendor_model extends CI_Model {
  function __construct() {
    parent::__construct();
    // $this->output->enable_profiler(TRUE);
  }

  function find_by_company($company_id) {
    return $this->db->get_where('vendors', array('company_id' => $company_id))->result();
  }

  function read($id) {
    return $this->db->get_where('vendors', array('id' => $id))->row();
  }

  function save($vendor) {
    $this->db->insert('vendors', $vendor);
  }

  function update($vendor, $id) {
    $this->db->update('vendors', $vendor, array('id' => $id));
  }

  function delete($id) {
    $this->db->delete('vendors', array('id' => $id));
  }
}