<div class="col-md-12">

    <div class="box box-info" style="padding:50px 0px;">
       
        <form action="<?php echo base_url();?>Category/update_category" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Category Name</label>

                     <div class="col-sm-9">

                        <?php
                        $data1 = array(
                            'type' => 'text',
                            'value' => "$select_category_by_id->category_name",
                            'name' => 'txt_category',
                            'id' => 'txt_category',
                            'class' => 'form-control'
                        );

                        echo form_input($data1);
                            
                        $data2 = array(
                            'type' => 'hidden',
                            'name' => 'category_id',
                            'value' => "$select_category_by_id->category_id",
                            'class' => 'form-control'
                        );

                        echo form_input($data2);
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
                    
                <?php // echo form_submit(array('id'=>'submit','value' => 'Save','class' => 'btn btn-success'));?>
                <?php echo form_submit(array('id'=>'submit','value'=>'update','class' => 'btn btn-primary'));?>
                <?php echo form_submit(array('id'=>'submit','value'=>'delete','class' => 'btn btn-danger'));?>
                                        
                </div>
                </div>
            </div>

        </form>
   
    </div>

</div>

