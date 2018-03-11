<?php
function item_form() {
  $obj = &get_instance();
  return array(
    'code' => $obj->input->post('code'),
    'name' => $obj->input->post('name'),
    'description' => $obj->input->post('description'),
    'price' => $obj->input->post('price'),
    'cost' => $obj->input->post('cost'),
  );
}