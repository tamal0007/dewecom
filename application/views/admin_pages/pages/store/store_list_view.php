<style>
    .my_ddown .dropdown-menu{
        min-width: 80px;
    }
</style>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Store List</h3>
       <br/> <br/>
        <a class="btn btn-success" href="<?php echo base_url();?>store_entry">Add Store</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Store Name</th>
                    <th>Store Icon</th>
                    <th>Store Slogan</th>
                    <th>Store Address</th>
                    <th>Store Lat/Lang</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($select_all_store as $store_row) {
  
//     echo '<pre>';
//     print_r($store_row);
//     exit();
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $store_row->store_name ?></td>

                        <td><img width="50" height="50" src="<?php echo base_url(). $store_row->store_logo; ?>"></td>
                        <td><?php echo $store_row->store_slogan; ?></td>
                        <td><?php echo $store_row->store_address; ?></td>
                        <td><?php echo $store_row->store_lat." / ".$store_row->store_lang;  ?></td>

                        <td>
                            <?php
                            if ($store_row->is_active == 1) 
                            {
                                echo "<span class='label label-success'>Active</span>";
                            } else {
                                echo "<span class='label label-danger'>Inactive</span>";
                            }
                            ?>
                        </td>

                        <td>
                            <div class="dropdown my_ddown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    
                                    <li>
                                        <?php 
                                       // if($store_row->is_active == 1){
                                            
                                       
                                        ?>
                                         
                                            <?php 
                                                if ($store_row->is_active == 1) 
                                                {
                                            ?>
                                                <a
                                               title="Inactive" href="<?php echo base_url()."store_entry/inactive/".$store_row->store_id;?>" data-toggle="tooltip" data-placement="bottom" title="Inactive"><button class="btn btn-danger"><span class="fa fa-lock"></span></button></a>


                                            <?php }else{ ?>

                                                <a
                                                 title="Active" href="<?php echo base_url()."store_entry/active/".$store_row->store_id ;?>" data-toggle="tooltip" data-placement="bottom" title="Activate"><button class="btn btn-success"><span class="fa fa-unlock"></span></button></a>

                                             <?php } ?>

                                        

                                    </li>
                                    <li><a href="<?php echo base_url()."store_entry/edit/".$store_row->store_id;?>"  data-toggle="tooltip" data-placement="bottom" title="Edit"><button class="btn btn-primary"><span class="fa fa-edit"></span></button></a> </li>

                                    <li><a href="<?php echo base_url()."store_entry/delete/".$store_row->store_id;?>" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="return confirm('Are you sure you want to delete this category?');"><button class="btn btn-danger"><span class="fa fa-trash"></span></button></a></li>
                                </ul>
                            </div>


                        </td>
                    </tr>
    <?php
    $i++;
    ?>   
                <?php } ?>


            </tbody>
            <tfoot>
                <tr>
                    <th>Sl</th>
                    <th>Store Name</th>
                    <th>Store Icon</th>
                    <th>Store Slogan</th>
                    <th>Store Address</th>
                    <th>Store Lat/Lang</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>