<?php
function user_form() {
  $obj = &get_instance();
  return array(
    'name' => $obj->input->post('name'),
    'password' => $obj->input->post('password'),
  );
}

function profile_form() {
  $obj = &get_instance();
  $user = array(
    'name' => $obj->input->post('name'),
    'username' => $obj->input->post('username'),
    'email' => $obj->input->post('email'),
  );
  if ($obj->input->post('password')) {
    $user['password'] = $obj->input->post('password');
  }
  return $user;
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