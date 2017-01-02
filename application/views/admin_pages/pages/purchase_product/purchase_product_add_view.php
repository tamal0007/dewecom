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
