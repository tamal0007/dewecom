<!DOCTYPE html>
<html>
<head></head>
<body>
<div id="container">
<table class="tb_search" align="center" style="border:1px solid #a3a375">
<?php echo form_open('main_controller'); ?>
<thead><h1 align="center">Bank Transection</h1></thead>
<tr>
<td>
<?php echo form_label('Bank Name:'); ?>
</td>
<td>
<?php echo form_textarea(array('id' => 'txt_bname', 'name' => 'txt_bname','type'=>'text','rows' => 1,'cols' => 21)); ?>
</td>
</tr>
<tr>
<td>
<?php echo form_label ('Bank Branch:');?>
</td>
<td>
<?php echo form_textarea(array('id' => 'txt_bb', 'name' => 'txt_bb','rows' => 1,'cols' => 21)); ?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('Account No :');?>
</td>
<td>
<?php echo form_textarea(array('id'=>'txt_ano','name'=>'txt_ano','type'=>'number','rows' => 1,'cols' => 21));?>	
</td>
</tr>
<tr>
<td>
<?php echo form_label('Amount:');?>
</td>
<td>
<?php echo form_textarea(array('id'=>'txt_amount','name'=>'txt_amount','type'=>'number','rows' => 1,'cols' => 21));?>
</td>
</tr>
<tr>
<td>
<?php echo form_label ('Transection Type. :'); ?>
</td>
<?php $options=array("cout"=>"cash in","cin"=>"Cash out");?>
<td>
<?php echo form_dropdown("com_ttype",$options);?>
</td>
</tr>
<tr>
<td>
<?php echo form_label ('Pay Type. :'); ?>
</td>
<?php $options=array("che"=>"cheque","ch"=>"Cash");?>
<td>
<?php echo form_dropdown("com_ptype",$options);?>
</td>
</tr><tr>
<td>
<?php echo form_label('Mobile number. :');?>
</td>
<td>
<?php echo form_input(array('id'=>'mb number','name'=>'txt_mb number','type'=>'number'));?>
</td>
</tr>


<?php echo form_close(); ?>
</table>
</div>
</body>
</html>
