<h3>Add a vendor</h3>
<?php echo form_open('vendors/add'); ?>
<p>
  Name<br>
  <?php echo form_input('name'); ?>
</p>
<p>
  Description<br>
  <?php echo form_textarea('address'); ?>
</p>
<p>
  Price<br>
  <?php echo form_input('phone'); ?>
</p>
<p>
  Cost<br>
  <?php echo form_input('email'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save vendor'); ?>
  or <?php echo anchor('vendors', 'cancel'); ?>
</p>
</form>