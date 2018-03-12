<?php
class Tracking_model extends CI_Model {
  function __construct() {
    parent::__construct();
    // $this->output->enable_profiler(TRUE);
  }

  function find_by_company($company_id) {
    return $this->db->get_where('trackings', array('company_id' => $company_id))->result();
  }

  function read($id) {
    return $this->db->get_where('trackings', array('id' => $id))->row();
  }

  function save($tracking) {
    $this->db->insert('trackings', $tracking);
  }

  function update($tracking, $id) {
    $this->db->update('trackings', $tracking, array('id' => $id));
  }

  function delete($id) {
    $this->db->delete('trackings', array('id' => $id));
  }
}