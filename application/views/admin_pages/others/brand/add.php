<div class="col-md-12">

    <div class="box box-info" style="padding:50px 0px;">
       
        <form action="#" method="post" class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Brand:</label>

                    <div class="col-sm-9">
                        
                         <?php 
                         $options=array( "ch"=>"Choose","ap"=>"Apple","ac"=>"acer","sn"=>"Sony via","Bn"=>"BenQ","dl"=>"Dell","hp"=>"HP","fj"=>"FUJITSU","ibm"=>"IBM","gt"=>"Gateway","hcl"=>"HCL","lg"=>"LG","lenovo"=>"Lenovo");
                         echo form_dropdown("cbo_brand",$options,'','class="form-control"');
                         ?>
                    </div>
                </div>

<!--                <div class="form-group">
                    <label  class="col-sm-2 control-label">Description:</label>

                    <div class="col-sm-9">
                        <div class="">

                            <textarea class="textarea" name="category_description" placeholder="Description here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

                        </div>
                    </div>
                </div>-->
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Icon:</label>

                    <div class="col-sm-9">
                        <?php echo form_upload(array('id'=>'icn','name'=>'icn','class'=>'form-control'));?>
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
-------------------------------
<div id="container">
<div class="boxed">

<table class="tb_search" align="center" style="border:1px solid #a3a375" >
<?php echo form_open('http://localhost/ci/index.php/Product/brand_entry'); ?>
<thead><h1 align="center"></h1></thead>
<tr>
<td>
<?php 
$attributes = array(
'class' => 'required1',
);
echo form_label ('Brand. :'); ?>
</td>
<?php $options1=array( "ch"=>"Choose","ap"=>"Apple","ac"=>"acer","sn"=>"Sony via","Bn"=>"BenQ","dl"=>"Dell","hp"=>"HP","fj"=>"FUJITSU","ibm"=>"IBM","gt"=>"Gateway","hcl"=>"HCL","lg"=>"LG","lenovo"=>"Lenovo");?>
<td>
<?php echo form_dropdown("cbo_brand",$options1);?>
</td>
</tr><tr>
<td>
<?php echo form_label('Icon:');?>
</td>
<td>
<?php echo form_upload(array('id'=>'icn','name'=>'icn'));?>
</td>
</tr>
<tr align="">
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
</div>
