<h3>Edit an user</h3>
<?php echo form_open('users/edit/' . $user->id); ?>
<p>
  Name<br>
  <?php echo form_input('name', $user->name); ?>
</p>
<p>
  Password<br>
  <?php echo form_password('password', $user->password); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save user'); ?>
  or <?php echo anchor('users', 'cancel'); ?>
</p>
</form>