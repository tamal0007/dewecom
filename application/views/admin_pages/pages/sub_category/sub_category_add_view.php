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

        <form  action="<?php echo base_url(); ?>Sub_Category/sub_category_save" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Category Name</label>

                    <div class="col-sm-9">


                        <?php
                        //  $options=array("ch"=>"choose","lp"=>"Laptop","ds"=>"Desktop","ms"=>"Monitor","cp"=>"CPU","tb"=>"Tablet","mb"=>"Mobile","sc"=>"scanner","gp"=>"Game Pad");
                        $select_all_pub_category = array("0" => "--choose--") + $select_all_pub_category;
                        echo form_dropdown("cbo_category", $select_all_pub_category, '', 'class="form-control"');
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Sub Category Name</label>

                    <div class="col-sm-9">

                        <?php
                        $data1 = array(
                            'type' => 'text',
                            'name' => 'txt_sub_category',
                            'id' => 'txt_sub_category',
                            'class' => 'form-control'
                        );

                        echo form_input($data1);
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
                        <?php echo form_upload(array('id' => 'icon', 'name' => 'icon', 'class' => 'form-control')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-9"> 

                        <?php echo form_submit(array('id' => 'submit', 'value' => 'Save', 'class' => 'btn btn-success')); ?>
                        <?php // echo form_submit(array('id'=>'submit','value'=>'update','class' => 'btn btn-primary')); ?>
                        <?php echo form_submit(array('id' => 'submit', 'value' => 'delete', 'class' => 'btn btn-danger')); ?>

                    </div>
                </div>
            </div>

        </form>

    </div>

</div>
