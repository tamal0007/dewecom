<!DOCTYPE html>
<html>
<head></head>
<body>

<div id="container">
<div class="boxed">

<table class="tb_search" align="center" style="border:1px solid #a3a375">
<?php echo form_open('main_controller'); ?>
<thead><h1 align="center"></h1></thead>

<table class="tb_search" align="center" style="border:1px solid #a3a375">

 <tr>
 <td colspan="1">
 
              <td align="right">
              
              <?php echo form_label('Sys ID:'); ?></td>

              <td colspan="1">
              
              <?php echo form_input(array('id' => 'txt_sid', 'name' => 'txt_sid','type'=>'number()'));?>
       </tr>
       <tr>

              <td align="right" colspan="1">
              
              <?php 
$attributes = array(
'class' => 'required1',
);

echo form_label ('Type :'); ?>

</td>
<?php $options=array( "ch"=>"Choose","tp1"=>"type1","tp2"=>"type2","tp3"=>"type3","tp4"=>"type4");?>
<td>
<?php echo form_dropdown("cbo_typename",$options);?>
              <td align="right">
                         
               <?php 
$attributes = array(
'class' => 'required1',
);
echo form_label ('Model. :'); ?>
</td>
<?php $options=array("ch"=>"choose","dl"=>"Dell1","dl1"=>"Dell2","sam1"=>"Samsung1");?>
<td>
<?php echo form_dropdown("cbo_model",$options);?>
</td>
              

       <tr>

              <td align="right">
             <?php 

$attributes = array(
'class' => 'required1',
);
echo form_label ('Category Name. :'); ?>
 <?php $options=array("ch"=>"choose","lp"=>"Laptop","ds"=>"Desktop","ms"=>"Monitor","cp"=>"CPU","tb"=>"Tablet","mb"=>"Mobile","sc"=>"scanner","gp"=>"Game Pad");?>
<td>
<?php echo form_dropdown("cbo_category",$options);?>
</td>

              <td align="right">
              <?php 

$attributes = array(
'class' => 'required1',
);
echo form_label ('Brand. :'); ?>
</td>
<?php $options=array( "ch"=>"Choose","ap"=>"Apple","ac"=>"acer","sn"=>"Sony via","Bn"=>"BenQ","dl"=>"Dell","hp"=>"HP","fj"=>"FUJITSU","ibm"=>"IBM","gt"=>"Gateway","hcl"=>"HCL","lg"=>"LG","lenovo"=>"Lenovo");?>
<td>
<?php echo form_dropdown("cbo_brand",$options);?>
</td>        
              
       
         <tr>

              <td align="right">
             <?php 
$attributes = array(
'class' => 'required1',
);

echo form_label ('Current Unit Price:','',$attributes)?>
              </td>
  
              <td>
              <?php echo form_input(array('id' => 'cup', 'name' => 'txt_cup','type'=>'number()','rows' => 1,'cols' => 21)); ?>
              </td>
              <td align="right">
             <?php echo form_label('Show Country');?>
              </td>
              <td>
              <?php echo form_input(array('id' => 'txt_show_country', 'name' => 'txt_show_country','type'=>'text()','rows' => 1,'cols' => 21)); ?>

              <td></td> 
			  <td></td>
        </tr>
         <tr>
           

              <td align="right">
              
           <?php echo form_label('Short Des:');?>
              </td>

              <td>
              
              <?php echo form_input(array('id' => 'txt_shrt_des', 'name' => 'txt_shrt_des','type'=>'text()','rows' => 1,'cols' => 21));?>
			  

        
         <tr>

              <td align="right">
            <?php echo form_label('Long Des:');?>
            	
            </td>

              <td>
              <?php echo form_textarea(array('id' => 'txt_lng_des', 'name' => 'txt_lng_des','type'=>'text()','rows' => 1,'cols' => 21)); ?>
			                       
   </tr>
   <tr>
   	<td align="right">
   	<?php echo form_label('Meta Key:')?>
   		
   	</td>
   	<td>
   	<?php echo form_input(array('id' => 'txt_mkey', 'name' => 'txt_mkey','type'=>'text()')); ?>
   	</td>
   	</tr>
   	<tr>
   	<td align="right">
   	<?php echo form_label('Description:')?>
   	</td>
   	   	<td>
   	   	<?php echo form_textarea(array('id' => 'txt_des', 'name' => 'txt_des','type'=>'text()','rows' => 1,'cols' => 21)); ?>   	   		
   	   	</td>
   	</tr>
   	<tr>
   	<td align="right">
   	<?php echo form_label('Photo:')?>
   	</td>
   	<td>
   	<?php echo form_upload(array('id'=>'pic','name'=>'pic'));?>
   	</tr>
   </tr>
            
<tr align="center">
<th colspan="2">
<?php echo form_submit(array('id' => 'submit', 'value' => 'Save'));
 ?>
 <?php echo form_submit(array('id'=>'submit','value'=>'update'));
 ?>
 <?php echo form_submit(array('id'=>'submit','value'=>'Delete'));
 ?>
</th>
</tr>
<?php echo form_close(); ?>
</table>
</div>
</div>
</body>
</html>
</html>