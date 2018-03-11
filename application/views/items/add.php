<h3>Add an item</h3>
<?php echo form_open('items/add'); ?>
<p>
  Code<br>
  <?php echo form_input('code'); ?>
</p>
<p>
  Name<br>
  <?php echo form_input('name'); ?>
</p>
<p>
  Description<br>
  <?php echo form_textarea('description'); ?>
</p>
<p>
  Price<br>
  <?php echo form_input('price'); ?>
</p>
<p>
  Cost<br>
  <?php echo form_input('cost'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save item'); ?>
  or <?php echo anchor('items', 'cancel'); ?>
</p>
</form>