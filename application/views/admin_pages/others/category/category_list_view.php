<style>
    .my_ddown .dropdown-menu{
        min-width: 80px;
    }
</style>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Category List</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Category Name</th>
                    <th>Category Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($select_all_category as $v_category) {
//     
//     echo '<pre>';
//     print_r($v_category);
//     exit();
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $v_category->category_name ?></td>
                        <td><?php echo $v_category->category_description ?></td>
                        <td>
                            <?php
                            if ($v_category->status == 1) {
                                echo "<span class='label label-success'>Publish</span>";
                            } else {
                                echo "<span class='label label-danger'>Unpublish</span>";
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
                                        if($v_category->status == 1){
                                            
                                       
                                        ?>
                                        <a data-toggle="tooltip" data-placement="bottom" title="Unpublished"><button class="btn btn-danger"><span class="fa fa-lock"></span></button></a> 
                                        <?php }
 else {
                                        
                                        ?>
                                        <a data-toggle="tooltip" data-placement="bottom" title="Published"><button class="btn btn-success"><span class="fa fa-unlock"></span></button></a>  
                                        
 <?php }?>
                                    </li>
                                    <li><a data-toggle="tooltip" data-placement="bottom" title="Edit"><button class="btn btn-primary"><span class="fa fa-edit"></span></button></a> </li>
                                    <li><a data-toggle="tooltip" data-placement="bottom" title="Delete"><button class="btn btn-danger"><span class="fa fa-trash"></span></button></a></li>
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
                    <th>Category Description</th>
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