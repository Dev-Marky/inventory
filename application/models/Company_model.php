<?php
class Company_model extends CI_Model {
  function __construct() {
    parent::__construct();
    // $this->output->enable_profiler(TRUE);
  }

  function find_all() {
    return $this->db->get('companies')->result();
  }

  function read($id) {
    return $this->db->get_where('companies', array('id' => $id))->row();
  }

  function read_by_user($user_id) {
    return $this->db->get_where('companies', array('user_id' => $user_id))->row();
  }

  function save($company) {
    $this->db->insert('companies', $company);
  }

  function update($company, $id) {
    $this->db->update('companies', $company, array('id' => $id));
  }

  function delete($id) {
    $this->db->delete('companies', array('id' => $id));
  }
}