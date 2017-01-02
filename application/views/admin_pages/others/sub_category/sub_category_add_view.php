<div class="col-md-12">

    <div class="box box-info" style="padding:50px 0px;">
       
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
