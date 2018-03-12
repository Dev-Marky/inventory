<?php
class Account extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->model('company_model');
  }

  function login() {
    redirect_if($this->session->userdata('user_id'), 'account/dashboard');
    $data = array('message' => '');
    if ($this->input->post()) {
      list($name, $password) = login_form();
      $user = $this->user_model->read_by_username_and_password($name, $password);
      if ($user) {
        $company = $this->company_model->read_by_user($user->id);
        $this->session->set_userdata('user_id', $user->id);
        $this->session->set_userdata('user_name', $user->name);
        $this->session->set_userdata('user_email', $user->email);
        $this->session->set_userdata('company_id', $company->id);
        redirect('account/dashboard');
      } else {
        $data['message'] = 'Invalid user name or password. Please try again!';
      }
    }
    $this->load->view('account/login', $data);
  }

  function dashboard() {
    redirect_if(!$this->session->userdata('user_id'), 'login');
    $this->layout->view('account/dashboard');
  }

  function profile() {
    redirect_if(!$this->session->userdata('user_id'), 'login');
    if ($this->input->post()) {
      $user = profile_form($this->session->userdata('company_id'));
      $this->user_model->update($user, $this->session->userdata('user_id'));
      $this->session->set_userdata('user_name', $user['name']);
      $this->session->set_userdata('user_email', $user['email']);
    }
    $data['user'] = $this->user_model->read($this->session->userdata('user_id'));
    $this->layout->view('account/profile', $data);
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