<h3>Add a company</h3>
<?php echo form_open('companies/add'); ?>
<p>
  Name<br>
  <?php echo form_input('name'); ?>
</p>
<p>
  Address<br>
  <?php echo form_textarea('address'); ?>
</p>
<p>
  Phone<br>
  <?php echo form_input('phone'); ?>
</p>
<p>
  Email<br>
  <?php echo form_input('email'); ?>
</p>
<p>
  TIN<br>
  <?php echo form_input('tin'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save company'); ?>
  or <?php echo anchor('companies', 'cancel'); ?>
</p>
</form>