<div id="content-container">
  <div id="page-head">
    <div id="page-title">
      <h1 class="page-header text-overflow">Customers</h1>
    </div>
    <ol class="breadcrumb">
      <li><a href="#"><i class="demo-pli-home"></i></a></li>
      <li><a href="#">Dashboard</a></li>
      <li class="active">Customers</li>
    </ol>
  </div>

  <div id="page-content">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Customers</h3>
      </div>
      <div class="panel-body">
        <div class="pad-btm form-inline">
          <div class="row">
            <div class="col-sm-6 table-toolbar-left">
              <?php echo anchor('customers/add', '<i class="demo-pli-add"></i> Add', 'id="demo-btn-addrow" class="btn btn-purple"'); ?>
              <!-- <button class="btn btn-default"><i class="demo-pli-printer"></i></button>
              <div class="btn-group">
                <button class="btn btn-default"><i class="demo-pli-exclamation"></i></button>
                <button class="btn btn-default"><i class="demo-pli-recycling"></i></button>
              </div> -->
            </div>
            <div class="col-sm-6 table-toolbar-right">
              <div class="form-group">
                <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
              </div>
              <div class="btn-group">
                <!-- <button class="btn btn-default"><i class="demo-pli-download-from-cloud"></i></button> -->
                <div class="btn-group dropdown">
                  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                    <i class="demo-pli-gear"></i>
                    <span class="caret"></span>
                  </button>
                  <ul role="menu" class="dropdown-menu dropdown-menu-right">
                    <li><?php echo anchor('customers/add', 'Add a customer'); ?></li>
                    <!-- <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($customers as $customer): ?>
              <tr>
                <td><?php echo $customer->name; ?></td>
                <td><?php echo $customer->phone; ?></td>
                <td><?php echo $customer->email; ?></td>
                <td>
                  <?php echo anchor('customers/edit/' . $customer->id, 'Edit'); ?>
                  <?php echo anchor('customers/delete/' . $customer->id, 'Delete'); ?>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>