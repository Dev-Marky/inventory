<?php
function vendor_form($company_id) {
  $obj = &get_instance();
  return array(
    'company_id' => $company_id,
    'name' => $obj->input->post('name'),
    'address' => $obj->input->post('address'),
    'phone' => $obj->input->post('phone'),
    'email' => $obj->input->post('email'),
  );
}