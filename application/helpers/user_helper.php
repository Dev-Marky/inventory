<?php
function user_form() {
  $obj = &get_instance();
  return array(
    'name' => $obj->input->post('name'),
    'password' => $obj->input->post('password'),
  );
}

function login_form() {
  $obj = &get_instance();
  return array(
    $obj->input->post('name'),
    $obj->input->post('password'),
  );
}

function register_form() {
  $obj = &get_instance();
  return array(
    array(
      'name' => $obj->input->post('username'),
      'password' => $obj->input->post('password'),
    ),
    array(
      'name' => $obj->input->post('company_name'),
    )
  );
}