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
        <h3 class="box-title">Purches Report List</h3>
    </div>
     
    
     <div class="box-body">
              <div class="row">
                  <form action="" method="post">
          
                     <div class="col-xs-2"></div>
                <div class="col-xs-2">
                    <h4>Invoice No.</h4>
                  <?php
                        $data = array(
                            'type' => 'text',
                            'name' => 'txt_curr_sales_price',
                            'id' => 'txt_curr_sales_price',
                            'class' => 'form-control'
                        );

                        echo form_input($data);
                        ?>
                </div>
                <div class="col-xs-2">
                    <h4>From Date</h4>
                  <?php
                        $data1 = array(
                            'type' => 'text',
                            'name' => 'txt_curr_sales_price',
                            'id' => 'txt_curr_sales_price',
                            'class' => 'form-control'
                        );

                        echo form_input($data1);
                        ?>
                </div>
                <div class="col-xs-2">
                    <h4> To Date</h4>
                  <?php
                        $data2 = array(
                            'type' => 'text',
                            'name' => 'txt_curr_sales_price',
                            'id' => 'txt_curr_sales_price',
                            'class' => 'form-control'
                        );

                        echo form_input($data2);
                        ?>
               
                </div>
                <div class="col-xs-3">
                    <h4>Search</h4><?php echo form_submit(array('id' => 'submit', 'value' => 'Search', 'class' => 'btn btn-success')); ?>
                </div>
                      
                  
                   
              </form>
              </div>
            </div>
    
   
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <table class="table well text-center">
                <tr>
                   <th>Invoice No.</th>
                    <th>Date</th> 
                    <th>Suplier Info</th> 
                </tr>
                <tr>
                    <td>
                        <h4><?php echo $purchase_details[0]->invoice_number; ?></h4>
                    </td>
                    <td>
                        <h4><?php echo date('Y-m-d',strtotime($purchase_details[0]->purchase_date)); ?></h4>
                    </td>
                    <td>
                        <p><?php echo $purchase_details[0]->supplier_name; ?></p>
                    </td>
                </tr>
               
            </table>
        </div>
        </div>

    
    <!-- /.box-header -->
    <div class="box-body">    
        <form>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Rate</th>
                    <th>Quantity</th>
                    <th>Return Quantity</th>
                    <th>Return Amount</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                foreach ($purchase_items as $value) {     
            ?>
                    <tr>
                        <td><?php echo $value->product_name ;?></td> 
                        <td><?php echo $value->purchase_rate ;?></td> 
                        <td><?php echo $value->purchase_qty ;?></td> 
                        <td><input type="number" name="return_quantity[]"/></td>
                        <td></td> 

                    
                    </tr>

            <?php
                }
            ?>

            </tbody>
            <tfoot>
              
            </tfoot>
        </table>
        
        <input class="btn btn-success pull-right" type="submit" value="Return">
    </form>
    </div>
    <!-- /.box-body -->
</div>