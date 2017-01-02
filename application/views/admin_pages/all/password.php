<!DOCTYPE html>
<html>
<head></head>
<body>
<div id="container">
<table align="center" style="border:1px solid #a3a375">
<?php echo form_open('main_controller'); ?>
<thead><h1 align="center">User create</h1></thead>
<tr>
<td>
<?php echo form_label('Password:'); ?>
</td>
<td>
<?php echo form_input(array('id' => 'pass', 'name' => 'cpass','type'=>'password')); ?>
</td>
</tr>

<tr>
<td>
<?php echo form_label('Confirm password :'); ?>
</td>
<td>
<?php echo form_input(array('id' => 'cpass', 'name' => 'cpass','type'=>'password')); ?>
</td>
</tr>
<tr>
<td>
<?php echo form_label (' Change Password.:');?>
</td>
<td>
<?php echo form_input(array('id' => 'ccpass', 'name' => 'ccpass','type'=>'password')); ?>
</td>
</tr>
<tr align="center">
<th colspan="3">
<?php echo form_submit(array('id' => 'submit', 'value' => 'Change Password')); ?>
</th>
</tr>
<?php echo form_close(); ?>
</table>
</div>
</body>
</html>