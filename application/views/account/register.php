<h3>Register</h3>
<?php echo form_open('account/register'); ?>
<p>
  Username<br>
  <?php echo form_input('username'); ?>
</p>
<p>
  Password<br>
  <?php echo form_password('password'); ?>
</p>
<p>
  Confirm Password<br>
  <?php echo form_password('confirm_password'); ?>
</p>
<p>
  Company Name<br>
  <?php echo form_input('company_name'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Login'); ?>
</form>