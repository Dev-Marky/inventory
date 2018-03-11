<?php
class Vendors extends CI_Controller {
  function __construct() {
    parent::__construct();
    
    redirect_if(!$this->session->userdata('user_id'), 'login');
    $this->load->model('vendor_model');
  }

  function index() {
    $data['vendors'] = $this->vendor_model->find_by_company($this->session->userdata('company_id'));
    $this->layout->view('vendors/index', $data);
  }

  function add() {
    if ($this->input->post()) {
      $vendor = vendor_form($this->session->userdata('company_id'));
      $this->vendor_model->save($vendor);
      redirect('vendors');
    }
    $this->layout->view('vendors/add');
  }

  function edit($id) {
    if ($this->input->post()) {
      $vendor = vendor_form($this->session->userdata('company_id'));
      $this->vendor_model->update($vendor, $id);
      redirect('vendors');
    }
    $data['vendor'] = $this->vendor_model->read($id);
    $this->layout->view('vendors/edit', $data);
  }

  function delete($id) {
    $this->vendor_model->delete($id);
    redirect('vendors');
  }
}