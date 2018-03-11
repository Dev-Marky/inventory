<?php
class Account extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->model('company_model');
  }

  function login() {
    $data = array('message' => '');
    if ($this->input->post()) {
      list($name, $password) = login_form();
      $user = $this->user_model->read_by_username_and_password($name, $password);
      if ($user) {
        $company = $this->company_model->read_by_user($user->id);
        $this->session->set_userdata('user_id', $user->id);
        $this->session->set_userdata('company_id', $company->id);
        redirect('account/dashboard');
      } else {
        $data['message'] = 'Invalid user name or password. Please try again!';
      }
    }
    $this->load->view('account/login', $data);
  }

  function dashboard() {
    $this->layout->view('account/dashboard');
  }

  function register() {
    if ($this->input->post()) {
      list($user, $company) = register_form();
      $user_id = $this->user_model->save($user);
      $company['user_id'] = $user_id;
      $this->company_model->save($company);
      redirect('login');
    }
    $this->load->view('account/register');
  }

  function logout() {
    $this->session->sess_destroy();
    redirect('.');
  }
}