<div id="content-container">
  <div id="page-head">
    <div id="page-title">
      <h1 class="page-header text-overflow">Trackings</h1>
    </div>
    <ol class="breadcrumb">
      <li><a href="#"><i class="demo-pli-home"></i></a></li>
      <li><a href="#">Dashboard</a></li>
      <li class="active">Trackings</li>
    </ol>
  </div>

  <div id="page-content">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Trackings</h3>
      </div>
      <div class="panel-body">
        <div class="pad-btm form-inline">
          <div class="row">
            <div class="col-sm-6 table-toolbar-left">
              <?php echo anchor('trackings/add', '<i class="demo-pli-add"></i> Add', 'id="demo-btn-addrow" class="btn btn-purple"'); ?>
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
                    <li><?php echo anchor('trackings/add', 'Add a tracking'); ?></li>
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
                <th>Tracking</th>
                <th>Customer</th>
                <th>Item</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($trackings as $tracking): ?>
              <tr>
                <td><?php echo $tracking->tracking_number; ?></td>
                <td><?php echo $tracking->customer_name; ?></td>
                <td><?php echo $tracking->item; ?></td>
                <td>
                  <?php echo anchor('trackings/edit/' . $tracking->id, 'Edit'); ?>
                  <?php echo anchor('trackings/delete/' . $tracking->id, 'Delete'); ?>
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