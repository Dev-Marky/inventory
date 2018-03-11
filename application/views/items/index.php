<h3>Items</h3>
<p><?php echo anchor('items/add', 'Add an item'); ?></p>
<table>
  <?php foreach ($items as $item): ?>
  <tr>
    <td><?php echo $item->name; ?></td>
    <td>
      <?php echo anchor('items/edit/' . $item->id, 'Edit'); ?>
      <?php echo anchor('items/delete/' . $item->id, 'Delete'); ?>
    </td>
  </tr>
  <?php endforeach; ?>
</table>