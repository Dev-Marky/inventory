<div id="content-container">
  <div id="page-head">
    <div id="page-title">
      <h1 class="page-header text-overflow">User Profile</h1>
    </div>
    <ol class="breadcrumb">
      <li><a href="#"><i class="demo-pli-home"></i></a></li>
      <li><a href="#">Dashboard</a></li>
      <li class="active">Profile</li>
    </ol>
  </div>

  <div id="page-content">
    <div class="row">
      <div class="col-lg-6">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">User Profile</h3>
          </div>
          <?php echo form_open('account/profile', array('method' => 'post', 'class' => 'form-horizontal')); ?>
            <div class="panel-body">
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Full name</label>
                <div class="col-sm-6">
                  <?php echo form_input('name', $user->name, 'placeholder="Full name" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-6">
                  <?php echo form_input('email', $user->email, 'placeholder="Email" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Username</label>
                <div class="col-sm-6">
                  <?php echo form_input('username', $user->username, 'placeholder="Username" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-6">
                  <?php echo form_password('password', '', 'placeholder="Password" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Confirm password</label>
                <div class="col-sm-6">
                  <?php echo form_password('confirm_password', '', 'placeholder="Confirm password" class="form-control" id="demo-is-inputnormal"'); ?>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-sm-9 col-sm-offset-3">
                  <?php echo form_submit('submit', 'Update profile', 'class="btn btn-mint"'); ?>
                </div>
              </div>
            </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>