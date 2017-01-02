<div class="col-md-12">

    <div class="box box-info" style="padding:0px 0px;">

        <form action="#" method="post" class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Category Name</label>

                    <div class="col-sm-9">
                        
                         <?php 
                         $options=array("ch"=>"choose","lp"=>"Laptop","ds"=>"Desktop","ms"=>"Monitor","cp"=>"CPU","tb"=>"Tablet","mb"=>"Mobile","sc"=>"scanner","gp"=>"Game Pad");
                         echo form_dropdown("cbo_category",$options,'','class="form-control"');
                         ?>
                    </div>
                </div>
                 <div class="form-group">
                    <label  class="col-sm-2 control-label">Brand:</label>

                    <div class="col-sm-9">
                        
                         <?php 
                         $options=array( "ch"=>"Choose","ap"=>"Apple","ac"=>"acer","sn"=>"Sony via","Bn"=>"BenQ","dl"=>"Dell","hp"=>"HP","fj"=>"FUJITSU","ibm"=>"IBM","gt"=>"Gateway","hcl"=>"HCL","lg"=>"LG","lenovo"=>"Lenovo");
                         echo form_dropdown("cbo_brand",$options,'','class="form-control"');
                         ?>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Product Name</label>


                    <div class="col-sm-9">

                        <?php
                        $data1 = array(
                            'type' => 'text',
                            'name' => 'txt_product',
                            'id' => 'txt_product',
                            'class' => 'form-control'
                        );

                        echo form_input($data1);
                        ?>

                    </div>
                </div>


               
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Short Description:</label>

                    <div class="col-sm-9">
                        <div class="">


                            <?php echo form_textarea(array('id' => 'txt_description', 'name' => 'txt_description', 'class' => 'textarea form-control', 'type' => 'text()', 'rows' => 5, 'cols' => 21,)); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Long Description:</label>

                    <div class="col-sm-9">
                        <div class="">


                            <?php echo form_textarea(array('id' => 'txt_description', 'name' => 'txt_description', 'class' => 'textarea form-control', 'type' => 'text()', 'rows' => 7, 'cols' => 21,)); ?>
                        </div>
                    </div>
                </div>
                 
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Meta Key:</label>

                    <div class="col-sm-9">

                        <?php
                        $data = array(
                            'type' => 'text',
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
                        <?php echo form_upload(array('id' => 'icn', 'name' => 'icn', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-9"> 

                        <?php echo form_submit(array('id' => 'submit', 'value' => 'Save', 'class' => 'btn btn-success')); ?>
                        <?php echo form_submit(array('id' => 'submit', 'value' => 'update', 'class' => 'btn btn-primary')); ?>
                        <?php echo form_submit(array('id' => 'submit', 'value' => 'delete', 'class' => 'btn btn-danger')); ?>

                    </div>
                </div>
            </div>

        </form>

    </div>

</div>
