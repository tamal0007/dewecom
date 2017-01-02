
<div id="container">
<table align="center" style="border:1px solid #a3a375">
<?php echo form_open(''); ?>
<thead><h1 align="center">User create</h1></thead>
<tr>
<td>
<?php echo form_label('Name:'); ?>
</td>
<td>
<?php echo form_input(array('id' => 'txt_name', 'name' => 'txt_name')); ?>
</td>
</tr>

<tr>
<td>
<?php echo form_label('User_id :'); ?>
</td>
<td>
<?php echo form_input(array('id' => 'txt_uid', 'name' => 'txt_uid')); ?>
</td>
</tr>
<tr>
<td>
<?php echo form_label ('Password.:');?>
</td>
<td>
<?php echo form_input(array('id' => 'pass', 'name' => 'pass','type'=>'password')); ?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('confirm password:'); ?>
</td>
<td>
<?php echo form_input(array('id' => 'cpass', 'name' => 'cpass','type'=>'password')); ?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('User type.:');?>
</td>
<?php $options=array("Is"=>"1","Hi"=>"2","chris"=>"3","Ot"=>"4");?>
<td>
<?php echo form_dropdown("com_religion",$options);?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('Is Active.:');?>
</td>
<?php $options=array("Is"=>"Active","Hi"=>"Inactive");?>
<td>
<?php echo form_dropdown("com_religion",$options);?>
</td>
</tr>
<tr align="center">
<th colspan="3">
<?php echo form_submit(array('id' => 'submit', 'value' => 'Create User')); ?>
</th>
</tr>
<?php echo form_close(); ?>
</table>
</div>
     