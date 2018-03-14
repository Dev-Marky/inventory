<div id="content-container">
  <div id="page-head">
    <div id="page-title">
      <h1 class="page-header text-overflow">Create new bill</h1>
    </div>
    <ol class="breadcrumb">
      <li><a href="#"><i class="demo-pli-home"></i></a></li>
      <li><a href="#">Dashboard</a></li>
      <li class="active">Bills</li>
    </ol>
  </div>

  <div id="page-content">
    <div class="row">
      <div class="col-lg-6">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Create new bill</h3>
          </div>
          <?php echo form_open('bills/add', array('method' => 'post', 'class' => 'form-horizontal')); ?>
            <div class="panel-body">
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Date</label>
                <div class="col-sm-6">
                  <?php echo form_input('date', '', 'placeholder="Name" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Vendor</label>
                <div class="col-sm-6">
                  <?php echo form_dropdown('vendor_id', $vendors, '', 'class="form-control"'); ?>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-sm-9 col-sm-offset-3">
                  <?php echo form_submit('submit', 'Save a bill', 'class="btn btn-mint"'); ?>
                  <?php echo anchor('bills', 'Cancel', 'class="btn btn-warning"'); ?>
                </div>
              </div>
            </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>