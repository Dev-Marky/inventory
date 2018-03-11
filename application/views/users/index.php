<h3>Users</h3>
<p><?php echo anchor('users/add', 'Add an user'); ?></p>
<table>
  <?php foreach ($users as $user): ?>
  <tr>
    <td><?php echo $user->name; ?></td>
    <td>
      <?php echo anchor('users/edit/' . $user->id, 'Edit'); ?>
      <?php echo anchor('users/delete/' . $user->id, 'Delete'); ?>
    </td>
  </tr>
  <?php endforeach; ?>
</table>