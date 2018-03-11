<div id="content-container">
  <div id="page-head">
    <div id="page-title">
      <h1 class="page-header text-overflow">Add an item</h1>
    </div>
    <ol class="breadcrumb">
      <li><a href="#"><i class="demo-pli-home"></i></a></li>
      <li><a href="#">Dashboard</a></li>
      <li class="active">Items</li>
    </ol>
  </div>

  <div id="page-content">
    <div class="row">
      <div class="col-lg-6">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Add an item</h3>
          </div>
          <?php echo form_open('items/add', array('method' => 'post', 'class' => 'form-horizontal')); ?>
            <div class="panel-body">
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Item Code</label>
                <div class="col-sm-6">
                  <?php echo form_input('code', '', 'placeholder="Code" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-6">
                  <?php echo form_input('name', '', 'placeholder="Name" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Description</label>
                <div class="col-sm-6">
                  <?php echo form_textarea('description', '', 'placeholder="Description" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Price</label>
                <div class="col-sm-3">
                  <?php echo form_input('price', '', 'placeholder="Price" class="form-control"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Cost</label>
                <div class="col-sm-3">
                  <?php echo form_input('cost', '', 'placeholder="Cost" class="form-control"'); ?>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-sm-9 col-sm-offset-3">
                  <?php echo form_submit('submit', 'Save an item', 'class="btn btn-mint"'); ?>
                  <?php echo anchor('items', 'Cancel', 'class="btn btn-warning"'); ?>
                </div>
              </div>
            </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>