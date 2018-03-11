<?php
class Items extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('item_model');
  }

  function index() {
    $data['items'] = $this->item_model->find_by_company($this->session->userdata('company_id'));
    $this->layout->view('items/index', $data);
  }

  function add() {
    if ($this->input->post()) {
      $item = item_form();
      $this->item_model->save($item);
      redirect('items');
    }
    $this->layout->view('items/add');
  }

  function edit($id) {
    if ($this->input->post()) {
      $item = item_form();
      $this->item_model->update($item, $id);
      redirect('items');
    }
    $data['item'] = $this->item_model->read($id);
    $this->layout->view('items/edit', $data);
  }

  function delete($id) {
    $this->item_model->delete($id);
    redirect('items');
  }
}