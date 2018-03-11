<h3>Customers</h3>
<p><?php echo anchor('customers/add', 'Add a customer'); ?></p>
<table>
  <?php foreach ($customers as $customer): ?>
  <tr>
    <td><?php echo $customer->name; ?></td>
    <td>
      <?php echo anchor('customers/edit/' . $customer->id, 'Edit'); ?>
      <?php echo anchor('customers/delete/' . $customer->id, 'Delete'); ?>
    </td>
  </tr>
  <?php endforeach; ?>
</table>