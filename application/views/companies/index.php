<h3>Companies</h3>
<p><?php echo anchor('companies/add', 'Add an company'); ?></p>
<table>
  <?php foreach ($companies as $company): ?>
  <tr>
    <td><?php echo $company->name; ?></td>
    <td>
      <?php echo anchor('companies/edit/' . $company->id, 'Edit'); ?>
      <?php echo anchor('companies/delete/' . $company->id, 'Delete'); ?>
    </td>
  </tr>
  <?php endforeach; ?>
</table>