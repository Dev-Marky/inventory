<h3>Edit an item</h3>
<?php echo form_open('items/edit/' . $item->id); ?>
<p>
  Code<br>
  <?php echo form_input('code', $item->code); ?>
</p>
<p>
  Name<br>
  <?php echo form_input('name', $item->name); ?>
</p>
<p>
  Description<br>
  <?php echo form_textarea('description', $item->description); ?>
</p>
<p>
  Price<br>
  <?php echo form_input('price', $item->price); ?>
</p>
<p>
  Cost<br>
  <?php echo form_input('cost', $item->cost); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save item'); ?>
  or <?php echo anchor('items', 'cancel'); ?>
</p>
</form>