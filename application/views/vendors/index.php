<h3>Vendors</h3>
<p><?php echo anchor('vendors/add', 'Add a vendor'); ?></p>
<table>
  <?php foreach ($vendors as $vendor): ?>
  <tr>
    <td><?php echo $vendor->name; ?></td>
    <td>
      <?php echo anchor('vendors/edit/' . $vendor->id, 'Edit'); ?>
      <?php echo anchor('vendors/delete/' . $vendor->id, 'Delete'); ?>
    </td>
  </tr>
  <?php endforeach; ?>
</table>