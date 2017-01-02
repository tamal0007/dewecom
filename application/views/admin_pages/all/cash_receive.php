
<div id="container">
    <table border="1" align="center" cellspacing="5" class="table">
<?php echo form_open('main_controller'); ?>
<thead><h1 align="center">Cash Receive</h1></thead>
<tr>
<td>
<?php echo form_label ('Company Name. :'); ?>
</td>
<?php $options=array();?>
<td>
<?php echo form_dropdown("cbo_company_name",$options);?>
</td>
</tr>

<tr>
<td>
<?php echo form_label('Journal Id:'); ?>
</td>
<td>
<?php echo form_input(array('id' => 'txt_jid', 'name' => 'txt_jid')); ?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('Company Name:'); ?>
</td>
<td>
<?php echo form_input(array('id' => 'txt_cname', 'name' => 'txt_cname')); ?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('A/C Year:'); ?>
</td>
<td>
<?php echo form_input(array('id' => 'txt_ac_year', 'name' => 'txt_ac_year','type'=>'date')); ?>
</td>
</tr>
<tr>
<td>
<?php echo form_label ('Journal Type. :'); ?>
</td>
<?php $options=array(1=>"Opening/Closing Journal",
2=>"Credit Purchase Journal",
3=>"Credit Sales Journal",
4=>"Cash withdrawn Journal",
5=>"Cash Deposit Journal",
6=>"Cash Receive Journal",
7=>"Bank Receive Journal",
8=>"Cash Payment Journal",
9=>"Export Realization Journal",
10=>"Bank Payment Journal",
11=>"Adjustment Journal",
12=>"Provisional Journal",
14=>"Rectifying Journal",
15=>"General Journal")
;?>
<td>
<?php echo form_dropdown("cbo_journal type",$options);?>
</td>
</tr><tr>
<td>
<?php echo form_label('Journal Date:'); ?>
</td>
<td>
<?php echo form_input(array('id' => 'txt_journal_date', 'name' => 'txt_journal_date','type'=>'date')); ?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('A/C Code:'); ?>
</td>
<td>
<?php echo form_input(array('id' => 'txt_a_c_code', 'name' => 'txt_a_c_code','type'=>'number')); ?>
</td>
</tr>
<tr>
<td>
<?php echo form_label ('A/C Head. :'); ?>
</td>
<?php $options=array();?>
<td>
<?php echo form_dropdown("cbo_a/c_head",$options);?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('Rec Amount:'); ?>
</td>
<td>
<?php echo form_input(array('id' => 'txt_rec_amount', 'name' => 'txt_rec_amount','type'=>'number')); ?>
</td>
</tr>
<tr>
<td>
<?php echo form_label ('Profit center. :'); ?>
</td>
<?php $options=array();?>
<td>
<?php echo form_dropdown("cbo_profit_center",$options);?>
</td>
</tr>
<tr>
<td>
<?php echo form_label('Voucher Narration:'); ?>
</td>
<td>
<?php echo form_textarea(array('id' => 'txt_vouch_narration', 'name' => 'txt_vouch_narration')); ?>
</td>
</tr>
<tr align="center">
<th colspan="2">
<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit'));?>
</th>
</tr>
</table>
</div>
