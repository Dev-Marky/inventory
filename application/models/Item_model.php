<?php
class Item_model extends CI_Model {
  function __construct() {
    parent::__construct();
    $this->output->enable_profiler(TRUE);
  }

  function find_by_company($company_id) {
    return $this->db->get_where('items', array('company_id' => $company_id))->result();
  }

  function read($id) {
    return $this->db->get_where('items', array('id' => $id))->row();
  }

  function save($item) {
    $this->db->insert('items', $item);
  }

  function update($item, $id) {
    $this->db->update('items', $item, array('id' => $id));
  }

  function delete($id) {
    $this->db->delete('items', array('id' => $id));
  }
}