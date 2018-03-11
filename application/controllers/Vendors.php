<?php
class Vendors extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('vendor_model');
  }

  function index() {
    $data['vendors'] = $this->vendor_model->find_by_company($this->session->userdata('company_id'));
    $this->load->view('vendors/index', $data);
  }

  function add() {
    if ($this->input->post()) {
      $vendor = vendor_form();
      $this->vendor_model->save($vendor);
      redirect('vendors');
    }
    $this->load->view('vendors/add');
  }

  function edit($id) {
    if ($this->input->post()) {
      $vendor = vendor_form();
      $this->vendor_model->update($vendor, $id);
      redirect('vendors');
    }
    $data['vendor'] = $this->vendor_model->read($id);
    $this->load->view('vendors/edit', $data);
  }

  function delete($id) {
    $this->vendor_model->delete($id);
    redirect('vendors');
  }
}