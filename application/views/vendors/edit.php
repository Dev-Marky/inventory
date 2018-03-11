<div id="content-container">
  <div id="page-head">
    <div id="page-title">
      <h1 class="page-header text-overflow">Edit a vendor</h1>
    </div>
    <ol class="breadcrumb">
      <li><a href="#"><i class="demo-pli-home"></i></a></li>
      <li><a href="#">Dashboard</a></li>
      <li class="active">Vendors</li>
    </ol>
  </div>

  <div id="page-content">
    <div class="row">
      <div class="col-lg-6">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Edit a vendor</h3>
          </div>
          <?php echo form_open('vendors/edit/' . $vendor->id, array('method' => 'post', 'class' => 'form-horizontal')); ?>
            <div class="panel-body">
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-6">
                  <?php echo form_input('name', $vendor->name, 'placeholder="Name" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Address</label>
                <div class="col-sm-6">
                  <?php echo form_textarea('address', $vendor->address, 'placeholder="Address" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Phone</label>
                <div class="col-sm-6">
                  <?php echo form_input('phone', $vendor->phone, 'placeholder="Phone" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-6">
                  <?php echo form_input('email', $vendor->email, 'placeholder="Email" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-sm-9 col-sm-offset-3">
                  <?php echo form_submit('submit', 'Save a vendor', 'class="btn btn-mint"'); ?>
                  <?php echo anchor('vendors', 'Cancel', 'class="btn btn-warning"'); ?>
                </div>
              </div>
            </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
