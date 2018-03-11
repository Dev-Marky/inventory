<?php
function vendor_form() {
  $obj = &get_instance();
  return array(
    'name' => $obj->input->post('name'),
    'address' => $obj->input->post('address'),
    'phone' => $obj->input->post('phone'),
    'email' => $obj->input->post('email'),
  );
}