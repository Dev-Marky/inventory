<?php
function tracking_form($company_id) {
  $obj = &get_instance();
  return array(
    'company_id' => $company_id,
    'date_ordered' => $obj->input->post('date_ordered'),
    'item_image' => $obj->input->post('item_image'),
    'date_shipped' => $obj->input->post('date_shipped'),
    'customer_id' => $obj->input->post('customer_id'),
    'item' => $obj->input->post('item'),
    'notes' => $obj->input->post('notes'),
    'tracking_number' => $obj->input->post('tracking_number'),
    'date_delivered' => $obj->input->post('date_delivered'),
  );
}