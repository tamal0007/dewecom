<style>
    .my_ddown .dropdown-menu{
        min-width: 80px;
    }
</style>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Purches Report</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Invoice</th>
                    <th>Supplier</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              <?php
                foreach ($get_purchase_list as $value) {
                   
               
              ?>
                    <tr>
                        <td><?php echo $value->purchase_date;?></td> 
                        <td><?php echo $value->invoice_number;?></td> 
                        <td><?php echo $value->supplier_name ;?></td> 
                        <td><?php echo $value->total_amount ;?></td>

                        <td>
                            <div class="dropdown my_ddown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    
                                   
                                    <li>
                                        <a 
                                            href="<?php echo base_url();?>purchase_return/<?php echo $value->purchase_id ?>"  
                                            data-toggle="tooltip" 
                                            data-placement="bottom" 
                                            title="Return">
                                                <button class="btn btn-info">
                                                    <span class="fa fa-lock"></span>
                                                </button>
                                        </a>
                                    </li>
                                    <li>
                                        <a 
                                            href=""  
                                            data-toggle="tooltip" 
                                            data-placement="bottom" 
                                            title="Edit">
                                            <button class="btn btn-primary">
                                                <span class="fa fa-edit"></span>
                                            </button>
                                        </a>
                                    </li>

                                    <li>
                                        <a 
                                            href="" 
                                            data-toggle="tooltip" 
                                            data-placement="bottom" 
                                            title="Delete" >
                                                <button class="btn btn-danger">
                                                    <span class="fa fa-trash"></span>
                                                </button>
                                        </a>
                                    </li>
                                </ul>
                            </div>


                        </td>
                    </tr>

                <?php 
                    }
                 ?>

            </tbody>
            <tfoot>
              
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