<?php
class Trackings extends CI_Controller {
  function __construct() {
    parent::__construct();
    
    redirect_if(!$this->session->userdata('user_id'), 'login');
    $this->load->model('tracking_model');
    $this->load->model('customer_model');
  }

  function index() {
    $data['trackings'] = $this->tracking_model->find_by_company($this->session->userdata('company_id'));
    $this->layout->view('trackings/index', $data);
  }

  function add() {
    if ($this->input->post()) {
      $tracking = tracking_form($this->session->userdata('company_id'));
      $this->tracking_model->save($tracking);
      redirect('trackings');
    }
    $data['customers'] = $this->customer_model->find_by_company_for_dropdown($this->session->userdata('company_id'));
    $this->layout->view('trackings/add', $data);
  }

  function edit($id) {
    if ($this->input->post()) {
      $tracking = tracking_form($this->session->userdata('company_id'));
      $this->tracking_model->update($tracking, $id);
      redirect('trackings');
    }
    $data['tracking'] = $this->tracking_model->read($id);
    $data['customers'] = $this->customer_model->find_by_company_for_dropdown($this->session->userdata('company_id'));
    $this->layout->view('trackings/edit', $data);
  }

  function delete($id) {
    $this->tracking_model->delete($id);
    redirect('trackings');
  }
}