<?php
class Companies extends CI_Controller {
  function __construct() {
    parent::__construct();
    
    redirect_if(!$this->session->userdata('user_id'), 'login');
    $this->load->model('company_model');
  }

  function index() {
    $data['companies'] = $this->company_model->find_all();
    $this->load->view('companies/index', $data);
  }

  function add() {
    if ($this->input->post()) {
      $company = company_form();
      $this->company_model->save($company);
      redirect('companies');
    }
    $this->load->view('companies/add');
  }

  function edit($id) {
    if ($this->input->post()) {
      $company = company_form();
      $this->company_model->update($company, $id);
      redirect('companies');
    }
    $data['company'] = $this->company_model->read($id);
    $this->load->view('companies/edit', $data);
  }

  function delete($id) {
    $this->company_model->delete($id);
    redirect('companies');
  }
}