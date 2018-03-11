<?php
class User_model extends CI_Model {
  function __construct() {
    parent::__construct();
    // $this->output->enable_profiler(TRUE);
  }

  function find_all() {
    return $this->db->get('users')->result();
  }

  function read($id) {
    return $this->db->get_where('users', array('id' => $id))->row();
  }

  function read_by_username_and_password($username, $password) {
    return $this->db->get_where('users', array('username' => $username, 'password' => $password))->row();
  }

  function save($user) {
    $this->db->insert('users', $user);
    return $this->db->insert_id();
  }

  function update($user, $id) {
    $this->db->update('users', $user, array('id' => $id));
  }

  function delete($id) {
    $this->db->delete('users', array('id' => $id));
  }
}