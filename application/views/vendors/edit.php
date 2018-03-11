<h3>Edit a vendor</h3>
<?php echo form_open('vendors/edit/' . $vendor->id); ?>
<p>
  Name<br>
  <?php echo form_input('name', $vendor->name); ?>
</p>
<p>
  Description<br>
  <?php echo form_textarea('address', $vendor->address); ?>
</p>
<p>
  Price<br>
  <?php echo form_input('phone', $vendor->phone); ?>
</p>
<p>
  Cost<br>
  <?php echo form_input('email', $vendor->email); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save vendor'); ?>
  or <?php echo anchor('vendors', 'cancel'); ?>
</p>
</form>