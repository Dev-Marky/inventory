<?php
function bill_form($company_id) {
  $obj = &get_instance();
  return array(
    'company_id' => $company_id,
    'date' => $obj->input->post('date'),
    'vendor_id' => $obj->input->post('vendor_id'),
  );
}