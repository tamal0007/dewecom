
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
        <form action="<?php echo base_url();?>store_entry/update" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Store Name:</label>

                    <div class="col-sm-9">

                        <?php
                        $data = array(
                            'type' => 'text',
                            'name' => 'txt_store_name',
                            'value' => $select_store_by_id->store_name,
                            'id' => 'txt_store_name',
                            'class' => 'form-control'
                        );

                        echo form_input($data);
                        ?>

                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Store Slogan:</label>

                    <div class="col-sm-9">

                        <?php
                        $data = array(
                            'type' => 'text',
                            'name' => 'txt_store_slogan',
                            'value' => $select_store_by_id->store_slogan,
                            'id' => 'txt_store_slogan',
                            'class' => 'form-control'
                        );

                        echo form_input($data);
                        ?>

                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Store Address:</label>

                    <div class="col-sm-9">

                        <?php
                        $data = array(
                            'type' => 'text',
                            'name' => 'txt_store_address',
                            'value' => $select_store_by_id->store_address,
                            'id' => 'txt_store_address',
                            'class' => 'form-control'
                        );

                        echo form_input($data);
                        ?>

                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Store Location Lat/Lang:</label>

                    <div class="col-sm-9">

                        <?php
                        $data = array(
                            'type' => 'text',
                            'name' => 'txt_store_lat',
                            'value' => $select_store_by_id->store_lat,
                            'id' => 'txt_store_lat',
                            'Placeholder'=>'Latitude',
                            'class' => 'form-control'
                        );

                        echo form_input($data);

                        $data = array(
                            'type' => 'text',
                            'name' => 'txt_store_lang',
                            'value' => $select_store_by_id->store_lang,
                            'id' => 'txt_store_lang',
                            'Placeholder'=>'Longiitude',
                            'class' => 'form-control'
                        );

                        echo form_input($data);
                        ?>

                    </div>
                </div>
                <div class="form-group">
                <label  class="col-sm-2 control-label"></label>
                    <div class="col-sm-9" style="padding-bottom: 0;">
                        <img class="thumbnail" src="<?php echo base_url().$select_store_by_id->store_logo;?>" height="80" />
                    </div>
                    <label  class="col-sm-2 control-label">Logo:</label>
                    
                    <div class="col-sm-9">
                        <?php echo form_upload(array(
                                                    'id'=>'file_logo',
                                                    'name'=>'file_logo',
                                                    'class'=>'form-control'
                                                    ));?>
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
