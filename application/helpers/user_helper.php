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
    $obj->input->post('username'),
    $obj->input->post('password'),
  );
}

function register_form() {
  $obj = &get_instance();
  return array(
    array(
      'username' => $obj->input->post('username'),
      'password' => $obj->input->post('password'),
      'email' => $obj->input->post('email'),
      'name' => $obj->input->post('name'),
    ),
    array(
      'name' => $obj->input->post('company_name'),
    )
  );
}