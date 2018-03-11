<?php
class Customers extends CI_Controller {
  function __construct() {
    parent::__construct();
    
    redirect_if(!$this->session->userdata('user_id'), 'login');
    $this->load->model('customer_model');
  }

  function index() {
    $data['customers'] = $this->customer_model->find_by_company($this->session->userdata('company_id'));
    $this->load->view('customers/index', $data);
  }

  function add() {
    if ($this->input->post()) {
      $customer = customer_form();
      $this->customer_model->save($customer);
      redirect('customers');
    }
    $this->load->view('customers/add');
  }

  function edit($id) {
    if ($this->input->post()) {
      $customer = customer_form();
      $this->customer_model->update($customer, $id);
      redirect('customers');
    }
    $data['customer'] = $this->customer_model->read($id);
    $this->load->view('customers/edit', $data);
  }

  function delete($id) {
    $this->customer_model->delete($id);
    redirect('customers');
  }
}