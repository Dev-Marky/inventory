<?php
class Bills extends CI_Controller {
  function __construct() {
    parent::__construct();
    
    redirect_if(!$this->session->userdata('user_id'), 'login');
    $this->load->model('bill_model');
    $this->load->model('vendor_model');
  }

  function index() {
    $data['bills'] = $this->bill_model->find_by_company($this->session->userdata('company_id'));
    $this->layout->view('bills/index', $data);
  }

  function add() {
    if ($this->input->post()) {
      $bill = bill_form($this->session->userdata('company_id'));
      $this->bill_model->save($bill);
      redirect('bills');
    }
    $data['vendors'] = $this->vendor_model->find_by_company_for_dropdown($this->session->userdata('company_id'));
    $this->layout->view('bills/add', $data);
  }

  function edit($id) {
    if ($this->input->post()) {
      $bill = bill_form($this->session->userdata('company_id'));
      $this->bill_model->update($bill, $id);
      redirect('bills');
    }
    $data['bill'] = $this->bill_model->read($id);
    $data['vendors'] = $this->vendor_model->find_by_company_for_dropdown($this->session->userdata('company_id'));
    $this->layout->view('bills/edit', $data);
  }

  function delete($id) {
    $this->bill_model->delete($id);
    redirect('bills');
  }
}