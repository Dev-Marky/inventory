<div id="content-container">
  <div id="page-head">
    <div id="page-title">
      <h1 class="page-header text-overflow">Edit a tracking</h1>
    </div>
    <ol class="breadcrumb">
      <li><a href="#"><i class="demo-pli-home"></i></a></li>
      <li><a href="#">Dashboard</a></li>
      <li class="active">Trackings</li>
    </ol>
  </div>

  <div id="page-content">
    <div class="row">
      <div class="col-lg-6">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Edit a tracking</h3>
          </div>
          <?php echo form_open('trackings/edit/' . $tracking->id, array('method' => 'post', 'class' => 'form-horizontal')); ?>
            <div class="panel-body">
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Date Ordered</label>
                <div class="col-sm-6">
                  <?php echo form_input('date_ordered', $tracking->date_ordered, 'placeholder="Date Ordered" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Customer</label>
                <div class="col-sm-6">
                  <?php echo form_dropdown('customer_id', $customers, $tracking->customer_id, ' class="form-control"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Image</label>
                <div class="col-sm-6">
                  <?php echo form_input('item_image', $tracking->item_image, 'placeholder="Image" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Date Shipped</label>
                <div class="col-sm-6">
                  <?php echo form_input('date_shipped', $tracking->date_shipped, 'placeholder="Date Shipped" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Item</label>
                <div class="col-sm-6">
                  <?php echo form_input('item', $tracking->item, 'placeholder="Item" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Notes</label>
                <div class="col-sm-6">
                  <?php echo form_textarea('notes', $tracking->notes, 'placeholder="Notes" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Tracking Number</label>
                <div class="col-sm-6">
                  <?php echo form_input('tracking_number', $tracking->tracking_number, 'placeholder="Tracking Number" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Date Delivered</label>
                <div class="col-sm-6">
                  <?php echo form_input('date_delivered', $tracking->date_delivered, 'placeholder="Date Delivered" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-sm-9 col-sm-offset-3">
                  <?php echo form_submit('submit', 'Save a tracking', 'class="btn btn-mint"'); ?>
                  <?php echo anchor('trackings', 'Cancel', 'class="btn btn-warning"'); ?>
                </div>
              </div>
            </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
