
<div id="container">
<table class="tb_search table" align="center" style="border:1px solid #a3a375">
<?php echo form_open('main_controller'); ?>
<thead><h1 align="center">Customer Form</h1></thead>
<tr>
<td>
<?php echo form_label('Customer ID:'); ?>
</td>
<td>
<?php echo form_input(array('id' => 'txt_cid', 'name' => 'txt_cid','type'=>'number')); ?>
</td>
</tr>
<tr>
<td>
<?php echo form_label ('Customer Name.:');?>
</td>
<td>
<?php echo form_textarea(array('id' => 'txt_cname', 'name' => 'txt_cname','rows' => 1,'cols' => 21)); ?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('Email Address. :');?>
</td>
<td>
<?php echo form_textarea(array('id'=>'ead','name'=>'txt_ead','type'=>'email','rows' => 1,'cols' => 21));?>	
</td>
</tr>
<tr>
<td>
<?php echo form_label('Photo:');?>
</td>
<td>
<?php echo form_upload(array('id'=>'pic','name'=>'pic'));?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('National Id. :');?>
</td>
<td>
<?php echo form_input(array('id'=>'txt_nid','name'=>'txt_nid','type'=>'number','rows' => 1,'cols' => 21));?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('Address:');?>
</td>
<td>
<?php echo form_textarea(array('id'=>'txt_add', 'name'=>'txt_add','type'=>'string','rows' => 1,'cols' => 21));?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('Contact Person. :');?>
</td>
<td>
<?php echo form_textarea(array('id'=>'txt_cp','name'=>'txt_cp','rows' => 1,'cols' => 21));?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('Mobile number. :');?>
</td>
<td>
<?php echo form_input(array('id'=>'mb number','name'=>'txt_mb number','type'=>'number'));?>
</td>
</tr>
<tr align="center">
<th colspan="2">
<?php echo form_submit(array('id' => 'submit', 'value' => 'Save'));
 ?>
 <?php echo form_submit(array('id'=>'submit','value'=>'update'));
 ?>
 <?php echo form_submit(array('id'=>'submit','value'=>'delete'));
 ?>
 
</th>
</tr>
<?php echo form_close(); ?>
</table>
</div>
