<?php
function item_form($company_id) {
  $obj = &get_instance();
  return array(
    'company_id' => $company_id,
    'code' => $obj->input->post('code'),
    'name' => $obj->input->post('name'),
    'description' => $obj->input->post('description'),
    'price' => $obj->input->post('price'),
    'cost' => $obj->input->post('cost'),
  );
}