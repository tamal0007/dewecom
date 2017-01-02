<?php 
//echo '<pre>'; 
//print_r($select_all_sub_category); 
//exit();
?>

<style>
    .my_ddown .dropdown-menu{
        min-width: 80px;
    }
</style>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Sub Category  List</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Category Name</th>
                    <th>Sub Category Name</th>
                    <th>Sub Category Icon</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($select_all_sub_category as $sub_category) {
  
//     echo '<pre>';
//    print_r($v_brand);
//     exit();
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $sub_category->category_name ?></td>
                        <td><?php echo $sub_category->sub_cat_name ?></td>
                        <td><img width="50" height="50" src="<?php echo base_url(). $sub_category->sub_cat_icon ?>"></td>
                        <td>
                            <?php
                            if ($sub_category->is_active == 1) {
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
                                        if($sub_category->is_active == 1){
                                            
                                       
                                        ?>
                                        <a href="<?php echo base_url();?>Sub_Category/inactive/<?php echo $sub_category->sub_category_id?>" data-toggle="tooltip" data-placement="bottom" title="Inactive"><button class="btn btn-danger"><span class="fa fa-lock"></span></button></a> 
                                        <?php }
 else {
                                        
                                        ?>
                                        <a href="<?php echo base_url();?>Sub_Category/active/<?php echo $sub_category->sub_category_id?>" data-toggle="tooltip" data-placement="bottom" title="Active"><button class="btn btn-success"><span class="fa fa-unlock"></span></button></a>  
                                        
 <?php }?>
                                    </li>
                                    <li><a href="<?php echo base_url();?>Sub_Category/edit_sub_category/<?php echo $sub_category->sub_category_id?>"  data-toggle="tooltip" data-placement="bottom" title="Edit"><button class="btn btn-primary"><span class="fa fa-edit"></span></button></a> </li>
                                    <li><a href="<?php echo base_url();?>Sub_Category/delete_sub_category/<?php echo $sub_category->sub_category_id?>" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="return confirm('Are you sure you want to delete this brand?');"><button class="btn btn-danger"><span class="fa fa-trash"></span></button></a></li>
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
                    <th>Category Name</th>
                    <th>Sub Category Name</th>
                    <th>Sub Category Icon</th>
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