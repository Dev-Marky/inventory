<h3>Edit a company</h3>
<?php echo form_open('companies/edit/' . $company->id); ?>
<p>
  Name<br>
  <?php echo form_input('name', $company->name); ?>
</p>
<p>
  Description<br>
  <?php echo form_textarea('address', $company->address); ?>
</p>
<p>
  Phone<br>
  <?php echo form_input('phone', $company->phone); ?>
</p>
<p>
  Email<br>
  <?php echo form_input('email', $company->email); ?>
</p>
<p>
  TIN<br>
  <?php echo form_input('tin', $company->tin); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save company'); ?>
  or <?php echo anchor('companies', 'cancel'); ?>
</p>
</form>