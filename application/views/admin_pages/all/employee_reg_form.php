<!DOCTYPE html>
<html>
<head></head>
<body>
<div id="container">
<table border="1" align="center" cellspacing="5">
<?php echo form_open('main_controller'); ?>
<thead><h1 align="center">Employee Form</h1></thead>
<tr>
<td>
<?php echo form_label('First Name:'); ?>
</td>
<td>
<?php echo form_input(array('id' => 'fname', 'name' => 'txt_fname')); ?>
</td>
</tr>

<tr>
<td>
<?php echo form_label('Last Name :'); ?>
</td>
<td>
<?php echo form_input(array('id' => 'lname', 'name' => 'txt_lname')); ?>
</td>
</tr>
<tr>
<td>
<?php echo form_label ('Designation. :'); ?>
</td>
<?php $options=array("gm"=>"General Manager","m"=>"Manager","se"=>"Software Engineer");?>
<td>
<?php echo form_dropdown("com_designation",$options);?>
</td>
</tr>
<tr>
<td>
<?php echo form_label ('Salary.:');?>
</td>
<td>
<?php echo form_input(array('id' => 'sal', 'name' => 'sal','type'=>'number')); ?>
</td>
</tr>
<td>
<?php echo form_label('Date of birth:'); ?>
</td>
<td>
<?php echo form_input(array('id' => 'dob', 'name' => 'dob','type'=>'date')); ?>
</td>
<tr>
<td>
<?php echo form_label('Religion.:');?>
</td>
<?php $options=array("Is"=>"Islam","Hi"=>"Hindu","chris"=>"christan","Ot"=>"Others");?>
<td>
<?php echo form_dropdown("com_religion",$options);?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('Address:');?>
</td>
<td>
<?php echo form_input(array('id'=>'add', 'name'=>'add','type'=>'string'));?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('Picture:');?>
</td>
<td>
<?php echo form_upload(array('id'=>'pic','name'=>'pic'));?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('Increment. :');?>
</td>
<td>
<?php echo form_input(array('id'=>'incre','name'=>'txt_incre'));?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('Employee Id. :');?>
</td>
<td>
<?php echo form_input(array('id'=>'eid','name'=>'txt_eid'));?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('Join Date. :');?>
</td>
<td>
<?php echo form_input(array('id'=>'Jd','name'=>'txt_Jd','type'=>'date'));?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('End Date. :');?>
</td>
<td>
<?php echo form_input(array('id'=>'ed','name'=>'txt_ed','type'=>'date'));?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('Phone number. :');?>
</td>
<td>
<?php echo form_input(array('id'=>'Ph number','name'=>'txt_Ph number','type'=>'number'));?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('Email Address. :');?>
</td>
<td>
<?php echo form_input(array('id'=>'ead','name'=>'txt_ead','type'=>'email'));?>	
</td>
</tr>
<tr align="center">
<th colspan="2">
<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
</th>
</tr>
<?php echo form_close(); ?>
</table>
</div>
</body>
</html>