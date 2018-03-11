<?php if ($message): ?>
<p><?php echo $message; ?></p>
<?php endif; ?>
<h3>Login</h3>
<?php echo form_open('account/login'); ?>
<p>
  Name<br>
  <?php echo form_input('name'); ?>
</p>
<p>
  Password<br>
  <?php echo form_password('password'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Login'); ?>
</form>