<?php

//echo '<pre>';
//print_r($select_all_pub_brand);
//exit();
?>
<div class="col-md-12">

    <div class="box box-info" style="padding:0px 0px;">
 <h4 style="color: yellowgreen;" class="text-center">
            <?php
            $msg = $this->session->userdata('message');
            if ($msg) {
                echo $msg;
                $this->session->unset_userdata('message');
            }
            ?>
        </h4>
        <form action="<?php echo base_url();?>Product/update_product" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Category Name</label>

            
                         <div class="col-sm-9">
                        
                         <?php  
                         
                         
                       //  $options=array("ch"=>"choose","lp"=>"Laptop","ds"=>"Desktop","ms"=>"Monitor","cp"=>"CPU","tb"=>"Tablet","mb"=>"Mobile","sc"=>"scanner","gp"=>"Game Pad");
                         $select_all_pub_category= array("0"=>"--choose--")+$select_all_pub_category;
                         echo form_dropdown("cbo_category",$select_all_pub_category,"$select_product_by_id->category_id",'class="form-control"');
                         ?>
                   
                        </div>
                </div>
                 <div class="form-group">
                    <label  class="col-sm-2 control-label">Brand:</label>

                    <div class="col-sm-9">
                        
                         <?php 
                        // $options=array( "ch"=>"Choose","ap"=>"Apple","ac"=>"acer","sn"=>"Sony via","Bn"=>"BenQ","dl"=>"Dell","hp"=>"HP","fj"=>"FUJITSU","ibm"=>"IBM","gt"=>"Gateway","hcl"=>"HCL","lg"=>"LG","lenovo"=>"Lenovo");
                          $select_all_pub_brand= array("0"=>"--choose--")+$select_all_pub_brand;
                         echo form_dropdown("cbo_brand",$select_all_pub_brand,"$select_product_by_id->brand_id",'class="form-control"');
                        ?>
<!--                    <select class="form-control" id="cbo_brand" name="cbo_brand">
                        <option>--choose--</option>
                        <?php
                            foreach ($select_all_pub_brand as $v_brand) {
                                ?>
                        
                        <option value="<?php echo $v_brand->brand_id ;?>"> <?php echo $v_brand->brand_name ;?> </option>
                        
                            <?php  
                         
                            } ?>
                    </select>-->
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Product Name</label>


                    <div class="col-sm-9">

                        <?php
                        $data1 = array(
                            'type' => 'text',
                            'name' => 'txt_product',
                            'value' => "$select_product_by_id->product_name",
                            'id' => 'txt_product',
                            'class' => 'form-control'
                        );

                        echo form_input($data1);
                        $data = array(
                            'type' => 'hidden',
                            'name' => 'product_id',
                            'value' => "$select_product_by_id->product_id",
                            'id' => 'product_id',
                            'class' => 'form-control'
                        );

                        echo form_input($data);
                        ?>

                    </div>
                </div>


               
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Short Description:</label>

                    <div class="col-sm-9">
                        <div class="">


                            <?php echo form_textarea(array('id' => 'txt_short_description', 'value'=>"$select_product_by_id->product_short_des" ,'name' => 'txt_short_description', 'class' => 'textarea form-control', 'type' => 'text()', 'rows' => 5, 'cols' => 21,)); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Long Description:</label>

                    <div class="col-sm-9">
                        <div class="">


                            <?php echo form_textarea(array('id' => 'txt_long_description', 'name' => 'txt_long_description','value'=>"$select_product_by_id->product_long_des" , 'class' => 'textarea form-control', 'type' => 'text()', 'rows' => 7, 'cols' => 21,)); ?>
                        </div>
                    </div>
                </div>
                 
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Meta Key:</label>

                    <div class="col-sm-9">

                        <?php
                        $data = array(
                            'type' => 'text',
                            'value' => "$select_product_by_id->meta_key",
                            'name' => 'txt_meta_key',
                            'id' => 'txt_meta_key',
                            'class' => 'form-control'
                        );

                        echo form_input($data);
                        ?>

                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Product Image:</label>

                    <div class="col-sm-9">
                        <?php echo form_upload(array('id' => 'icon', 'name' => 'icon', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-9"> 

                        <?php // echo form_submit(array('id' => 'submit', 'value' => 'Save', 'class' => 'btn btn-success')); ?>
                        <?php echo form_submit(array('id' => 'submit', 'value' => 'update', 'class' => 'btn btn-primary')); ?>
                        <?php echo form_submit(array('id' => 'submit', 'value' => 'delete', 'class' => 'btn btn-danger')); ?>

                    </div>
                </div>
            </div>

        </form>

    </div>

</div>
