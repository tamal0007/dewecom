<?php
//echo '<pre>';
//print_r($select_brand_by_id);
//exit();
?>


<div class="col-md-12">

    <div class="box box-info" style="padding:50px 0px;">
        <h4 style="color: yellowgreen;" class="text-center">
            <?php
            $msg = $this->session->userdata('message');
            if ($msg) {
                echo $msg;
                $this->session->unset_userdata('message');
            }
            ?>
        </h4>
        <form name="edit_form" action="<?php echo base_url();?>Brand/update_brand" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Category Name</label>

                    <div class="col-sm-9">
                        
                         <?php  
                         
                         
                       //  $options=array("ch"=>"choose","lp"=>"Laptop","ds"=>"Desktop","ms"=>"Monitor","cp"=>"CPU","tb"=>"Tablet","mb"=>"Mobile","sc"=>"scanner","gp"=>"Game Pad");
                         $select_all_pub_category= array("0"=>"--choose--")+$select_all_pub_category;
                         echo form_dropdown("cbo_category",$select_all_pub_category,"$select_brand_by_id->category_id",'class="form-control"');
                         ?>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Brand:</label>

                    <div class="col-sm-9">

                        <?php
                        $data = array(
                            'type' =>'text',
                            'name' =>'txt_brand',
                            'value' =>"$select_brand_by_id->brand_name",
                            'id' =>'txt_brand',
                            'class' =>'form-control'
                        );

                        echo form_input($data);
                        
                         $data2 = array(
                            'type' => 'hidden',
                            'name' => 'brand_id',
                            'value' => "$select_brand_by_id->brand_id",
                            'class' => 'form-control'
                        );

                        echo form_input($data2);
                        ?>
                     

                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Icon:</label>

                    <div class="col-sm-9">
                        <?php echo form_upload(array('id'=>'icn','name'=>'icn','class'=>'form-control'));?>
                    </div>
                </div>
                <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-9"> 
                    
            <?php // echo form_submit(array('id'=>'submit','value' => 'Save','class' => 'btn btn-success'));?>
                <?php echo form_submit(array('id'=>'submit','value'=>'update','class' => 'btn btn-primary'));?>
                <?php echo form_submit(array('id'=>'submit','value'=>'delete','class' => 'btn btn-danger'));?>
                                        
                </div>
                </div>
            </div>

        </form>
   
    </div>

</div>
