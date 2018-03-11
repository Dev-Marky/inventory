<h3>Add an user</h3>
<?php echo form_open('users/add'); ?>
<p>
  Name<br>
  <?php echo form_input('name'); ?>
</p>
<p>
  Password<br>
  <?php echo form_password('password'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save user'); ?>
  or <?php echo anchor('users', 'cancel'); ?>
</p>
</form>