<style>
    .my_ddown .dropdown-menu{
        min-width: 80px;
    }
</style>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Product List</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Category Name</th>
                    <th>Brand Name</th>
                    <th>Product Name</th>
                    <th>image</th>
                    <th>Short Description</th>
                    <th>Long Description</th>

                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($select_all_product as $v_product) {

//    echo '<pre>';
//     print_r($v_product);
//    exit();
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $v_product->category_name ?></td>
                        <td><?php echo $v_product->brand_name ?></td>
                        <td><?php echo $v_product->product_name ?></td>
                        <td><img width="50" height="50" src="<?php echo base_url() . $v_product->product_img ?>"></td>
                        <td><?php echo $v_product->product_short_des ?></td>
                        <td><?php echo $v_product->product_long_des ?></td>
                        <td>
                            <?php
                            if ($v_product->is_active == 1) {
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
                                        if ($v_product->is_active == 1) {
                                            ?>
                                            <a href="<?php echo base_url(); ?>Product/inactive/<?php echo $v_product->product_id ?>" data-toggle="tooltip" data-placement="bottom" title="Inactive"><button class="btn btn-danger"><span class="fa fa-lock"></span></button></a> 
                                        <?php
                                        } else {
                                            ?>
                                            <a href="<?php echo base_url(); ?>Product/active/<?php echo $v_product->product_id ?>" data-toggle="tooltip" data-placement="bottom" title="Active"><button class="btn btn-success"><span class="fa fa-unlock"></span></button></a>  

                                        <?php } ?>
                                    </li>
                                    <li><a href="<?php echo base_url(); ?>Product/edit_product/<?php echo $v_product->product_id ?>"  data-toggle="tooltip" data-placement="bottom" title="Edit"><button class="btn btn-primary"><span class="fa fa-edit"></span></button></a> </li>
                                    <li><a href="<?php echo base_url(); ?>Product/delete_product/<?php echo $v_product->product_id ?>" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="return confirm('Are you sure you want to delete this category?');"><button class="btn btn-danger"><span class="fa fa-trash"></span></button></a></li>
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
                    <th>Brand Name</th>
                    <th>Product Name</th>
                    <th>image</th>
                    <th>Short Description</th>
                    <th>Long Description</th>

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