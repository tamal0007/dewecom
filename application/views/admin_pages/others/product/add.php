<div class="col-md-12">

    <div class="box box-info" style="padding:50px 0px;">
       
        <form action="#" method="post" class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Type</label>

                    <div class="col-sm-9">
                        
                         <?php 
                         $options1=array( "ch"=>"Choose","tp1"=>"type1","tp2"=>"type2","tp3"=>"type3","tp4"=>"type4");
                         echo form_dropdown("cbo_type",$options1,'','class="form-control"');
                         ?>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Category Name</label>

                    <div class="col-sm-9">
                        
                         <?php 
                         $options2=array("ch"=>"choose","lp"=>"Laptop","ds"=>"Desktop","ms"=>"Monitor","cp"=>"CPU","tb"=>"Tablet","mb"=>"Mobile","sc"=>"scanner","gp"=>"Game Pad");
                         echo form_dropdown("cbo_category",$options2,'','class="form-control"');
                         ?>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Model:</label>

                    <div class="col-sm-9">
                        
                         <?php 
                         $options3=array("ch" => "choose", "dl" => "Dell1", "dl1" => "Dell2", "sam1" => "Samsung1");
                         echo form_dropdown("cbo_model",$options3,'','class="form-control"');
                         ?>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Brand:</label>

                    <div class="col-sm-9">
                        
                         <?php 
                         $options4=array( "ch"=>"Choose","ap"=>"Apple","ac"=>"acer","sn"=>"Sony via","Bn"=>"BenQ","dl"=>"Dell","hp"=>"HP","fj"=>"FUJITSU","ibm"=>"IBM","gt"=>"Gateway","hcl"=>"HCL","lg"=>"LG","lenovo"=>"Lenovo");
                         echo form_dropdown("cbo_category",$options4,'','class="form-control"');
                         ?>
                    </div>
                </div>

              
                <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-9"> 
                    
                <?php echo form_submit(array('id'=>'submit','value' => 'Save','class' => 'btn btn-success'));?>
                <?php echo form_submit(array('id'=>'submit','value'=>'update','class' => 'btn btn-primary'));?>
                <?php echo form_submit(array('id'=>'submit','value'=>'delete','class' => 'btn btn-danger'));?>
                                        
                </div>
                </div>
            </div>

        </form>
   
    </div>

</div>
--------------------------

<div id="container">
<div class="boxed">

<table class="tb_search" align="center" style="border:1px solid #a3a375">
<?php echo form_open('http://localhost/ci/index.php/Product/set_product_entry'); ?>
<thead><h1 align="center"></h1></thead>
<tr>
<td>
<?php 
$attributes = array(
'class' => 'required1',
);

echo form_label ('Type :'); ?>

</td>
<?php $options=array( "ch"=>"Choose","tp1"=>"type1","tp2"=>"type2","tp3"=>"type3","tp4"=>"type4");?>
<td>
<?php echo form_dropdown("cbo_typename",$options);?>
</td>
</tr>
<tr>
<td>
<?php
$attributes = array(
'class' => 'required1',
);
echo form_label ('Category Name. :'); ?>
 <?php $options=array("ch"=>"choose","lp"=>"Laptop","ds"=>"Desktop","ms"=>"Monitor","cp"=>"CPU","tb"=>"Tablet","mb"=>"Mobile","sc"=>"scanner","gp"=>"Game Pad");?>
<td>
<?php echo form_dropdown("cbo_category",$options);?>
</td>
</tr>

<tr>
<td>
<?php 

$attributes = array(
'class' => 'required1',
);
echo form_label ('Model :'); ?>
</td>
<?php $options=array("ch"=>"choose","dl"=>"Dell1","dl1"=>"Dell2","sam1"=>"Samsung1");?>
<td>
<?php echo form_dropdown("cbo_model",$options);?>
</td>
</tr>
<tr>
<td>
<?php 

$attributes = array(
'class' => 'required1',
);
echo form_label ('Brand :'); ?>
</td>
<?php $options=array( "ch"=>"Choose","ap"=>"Apple","ac"=>"acer","sn"=>"Sony via","Bn"=>"BenQ","dl"=>"Dell","hp"=>"HP","fj"=>"FUJITSU","ibm"=>"IBM","gt"=>"Gateway","hcl"=>"HCL","lg"=>"LG","lenovo"=>"Lenovo");?>
<td>
<?php echo form_dropdown("cbo_brand",$options);?>
</td>
</tr>
<tr align="center">
<th colspan="2">
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
<?php echo form_submit(array('id' => 'submit', 'value' => 'Save')); ?>
 <?php echo form_submit(array('id'=>'submit','value'=>'update'));
 ?>
</th>
</tr>
<?php echo form_close(); ?>
</table>
</div>
</div>
