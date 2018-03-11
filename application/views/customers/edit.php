<h3>Edit a customer</h3>
<?php echo form_open('customers/edit/' . $customer->id); ?>
<p>
  Name<br>
  <?php echo form_input('name', $customer->name); ?>
</p>
<p>
  Description<br>
  <?php echo form_textarea('address', $customer->address); ?>
</p>
<p>
  Price<br>
  <?php echo form_input('phone', $customer->phone); ?>
</p>
<p>
  Cost<br>
  <?php echo form_input('email', $customer->email); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save customer'); ?>
  or <?php echo anchor('customers', 'cancel'); ?>
</p>
</form>