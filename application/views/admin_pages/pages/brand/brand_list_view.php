<?php 
//echo '<pre>'; 
//print_r($select_all_brand); 
//exit();
?>

<style>
    .my_ddown .dropdown-menu{
        min-width: 80px;
    }
</style>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Brand List</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Category Name</th>
                    <th>Brand Name</th>
                    <th>Brand Icon</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($select_all_brand as $v_brand) {
  
//     echo '<pre>';
//    print_r($v_brand);
//     exit();
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $v_brand->category_name ?></td>
                        <td><?php echo $v_brand->brand_name ?></td>
                        <td><img width="50" height="50" src="<?php echo base_url(). $v_brand->brand_icon ?>"></td>
                        <td>
                            <?php
                            if ($v_brand->is_active == 1) {
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
                                        if($v_brand->is_active == 1){
                                            
                                       
                                        ?>
                                        <a href="<?php echo base_url();?>Brand/inactive/<?php echo $v_brand->brand_id?>" data-toggle="tooltip" data-placement="bottom" title="Inactive"><button class="btn btn-danger"><span class="fa fa-lock"></span></button></a> 
                                        <?php }
 else {
                                        
                                        ?>
                                        <a href="<?php echo base_url();?>Brand/active/<?php echo $v_brand->brand_id?>" data-toggle="tooltip" data-placement="bottom" title="Active"><button class="btn btn-success"><span class="fa fa-unlock"></span></button></a>  
                                        
 <?php }?>
                                    </li>
                                    <li><a href="<?php echo base_url();?>Brand/edit_brand/<?php echo $v_brand->brand_id?>"  data-toggle="tooltip" data-placement="bottom" title="Edit"><button class="btn btn-primary"><span class="fa fa-edit"></span></button></a> </li>
                                    <li><a href="<?php echo base_url();?>Brand/delete_brand/<?php echo $v_brand->brand_id?>" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="return confirm('Are you sure you want to delete this brand?');"><button class="btn btn-danger"><span class="fa fa-trash"></span></button></a></li>
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
                    <th>Brand Name</th>
               
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