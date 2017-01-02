<script type="text/javascript">
var base_url='<?php echo base_url(); ?>';
var total_amount=0;


function make_unit_type_option_menu()
{
    var selectValues={<?php echo $unit_type_js_array; ?>}
    var out_put='<select name="cbo_unit_type">';
    $.each(selectValues, function(key, value) 
    {   
        out_put+='<option value="'+key+'">'+value+'</option>';
    });
    out_put+='</select>';
    return out_put;
}


function purchase_cost_key_up(item)
{
        $('.purchase_cost').each(function()
        {
            console.log("looping->"+this);
            row_total(item);
            grand_total();

        });

}

function row_total(row)
{
    console.log("row_total");
    var purchase_qty=row.closest('tr.purchase_row').find('td > input.purchase_quantity').val();
    //var purchase_qty=row.closest('input.purchase_quantity').val();
    console.log("pq->"+purchase_qty);
    //var purchase_cost=row.closest('input.purchase_cost').val();
    var purchase_cost=row.closest('tr.purchase_row').find('td > input.purchase_cost').val();
    console.log("pc->"+purchase_cost);

    row.closest('tr.purchase_row').find('td > span.row_total').html(purchase_cost*purchase_qty);
}

function grand_total()
{
    console.log("grand_total");
    var total=0;
    $('.row_total').each(function(){
        total+=parseFloat($(this).html());
    });
    $('.grand_total').html(total);
    $('.sub_total_hidden').val(total);


}

function search_item(item_name)
{
    console.log(item_name);
        var c_name=item_name;
        if(c_name!="")
        {
        $.ajax({
                type: "POST",
                url: base_url+'index.php/search/product_search_for_purchase',
                data:
                {
                    search_text:c_name
                },
                beforeSend: function()
                {
                    $("#search-box").show();
                    $("#search-box").css("background","#FFF url("+base_url+"upload_image/ajax-loader.gif) no-repeat");
                },
                success: function(data)
                {
                    //$("#search-box").show();
                    $("#search-box").html(data);
                    $("#search-box").css("background","#FFF");
                }
            
            
        });
        }else 
        {
            $("#search-box").hide();
        }
        $('#hidden_customer_id').val('');
        $('#txt_cell').val('');
        $('#txt_address').val('');
        

}


function remove_row(row)
{
    row.closest('tr').remove();
    grand_total();
}

function on_search_item_click(item)
{
    var product_id=item.attr('product_id');
    var product_name=item.attr('product_name');

    //var row_exists=$('.purchase_table').siblings().find('.id').val();
    //console.log(row_exists);

    if($('.purchase_table').find('input.id').length){

    $('.purchase_table').find('input.id').each(function(){

        if($(this).val()==product_id)
        {
            alert("Product Already in Row!");
            console.log("alert!!");
            return false;

        }else{
            console.log("inner if");

    $('.purchase_table').append('<tr class="purchase_row"><td>'
                                    +'<input class="id" type="hidden" name="product_id[]" value="'+product_id+'"/>'
                                    +product_name
                                    +'</td><td>'
                                    +'<input name="cost_price[]" type="text" onkeyup="return purchase_cost_key_up($(this));" class="purchase_cost" />'
                                    +'</td><td>'
                                    +'<input name="sales_price[]" type="text" class="sales_price" />'
                                    +'</td><td>'
                                    +'<input name="quantity[]" type="text" class="purchase_quantity" onkeyup="return purchase_cost_key_up($(this));" />'
                                    +'</td><td>'
                                    +make_unit_type_option_menu()
                                    +'</td><td>'
                                    +'<span class="row_total">0</span>'
                                    +'</td><td width="50">'
                                    +'<a class="btn btn-danger remove_purchase_row" title="Close" onclick="return remove_row($(this));">&times;</a>'
                                    +'</td></tr>');

        }//else end
        

        });//each end
}else{
    console.log("outer if");

    $('.purchase_table').append('<tr class="purchase_row"><td>'
                                    +'<input class="id" type="hidden" name="product_id[]" value="'+product_id+'"/>'
                                    +product_name
                                    +'</td><td>'
                                    +'<input name="cost_price[]" type="text" onkeyup="return purchase_cost_key_up($(this));" class="purchase_cost" />'
                                    +'</td><td>'
                                    +'<input name="sales_price[]" type="text" class="sales_price" />'
                                    +'</td><td>'
                                    +'<input name="quantity[]" type="text" class="purchase_quantity" onkeyup="return purchase_cost_key_up($(this));" />'
                                    +'</td><td>'
                                    +make_unit_type_option_menu()
                                    +'</td><td>'
                                    +'<span class="row_total">0</span>'
                                    +'</td><td width="50">'
                                    +'<a class="btn btn-danger remove_purchase_row" title="Close" onclick="return remove_row($(this));">&times;</a>'
                                    +'</td></tr>');

        }//else end
        

//func end
    //console.log(customer_id+"-"+customer_cell+"-"+customer_address+"-"+customer_name);

    

    $('.purchase_search').val('');
    
    $('#search-box').hide();
}
</script>
<form action="http://localhost/ecommerce/purchase/save" method="post">
<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title">Heading</h3>
    </div>
    <div class="box-body">
        <div class="row" style="padding: 10px">
            <form action="" method="post">
                <fieldset style="padding: 10px">

                <div class="col-xs-2">
                  
                    <?php
                    $data1 = array(
                        'type' => 'text',
                        'value' => "",
                        'name' => 'txt_invoice_number',
                        'id' => 'txt_invoice_number',
                        'placeholder' => 'Invoice Number',
                        'class' => 'form-control'
                    );

                    echo form_input($data1);
                   
                    ?>

                </div>
                <div class="col-xs-2">
                
                    <?php
                    $data2 = array(
                        'type' => 'text',
                        'value' => "",
                        'name' => 'txt_purchase_date',
                        'id' => '',
                        'placeholder' => 'Date',
                        'class' => 'form-control'
                    );

                    echo form_input($data2);
                    ?>
                </div>
               
                <div class="col-xs-2">
               
                    <?php
                    $data4 = array(
                        'type' => 'text',
                        'name' => '',
                        'id' => '',
                        'placeholder' => 'Search Supplier',
                        'class' => 'form-control'
                    );

                    echo form_input($data4);

                    $data4 = array(
                        'type' => 'hidden',
                        'name' => 'txt_id_supplier',
                        'id' => 'txt_id_supplier',
                        'placeholder' => 'Search Supplier',
                        'class' => 'form-control',
                        'value' => 1
                    );

                    echo form_input($data4);
                    ?>
                </div>
              
                <div class="col-xs-1">
               
                    <?php echo form_submit(array('id' => 'submit', 'value' => 'Add', 'class' => 'fa fa-user-plus btn btn-success pull-right')); ?>
                </div>
                

               
                </fieldset>
                <table class="table purchase_table" style="margin: 10px;">
                    <tr>
                        <th>Product name</th>
                        <th>Cost Price</th>
                        <th>Sales Price</th>
                        <th>Quantity</th>
                        <th>Unit Type</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
 </table>   
 <table class="table" style="margin: 10px;">                
<tr>
                       
                        <td></td>
                        <td  width="150"></td>
                        <td  width="150"></td>
                        <td width="150" style="text-align: right"><b>Discount</b></td> 
                        <td width="100" ><input name="txt_discount_perct" id="txt_discount_perct" type="text" class="form-control" placeholder="%"></td>
                        <td width="100"><input name="txt_discount_tk" id="txt_discount_tk" type="text" class="form-control" placeholder="TK"></td>
                        <td width="50"></td>
                      
                    </tr>
                    <tr>
                       
                        <td></td>
                        <td  width="150"></td>
                        <td  width="150"></td>
                        <td width="150" style="text-align: right"><b>Vat</b></td> 
                        <td width="100" ><input name="txt_vat_perct" id="txt_vat_perct" type="text" class="form-control" placeholder="%"></td>
                        <td width="100"><input name="txt_vat_tk" id="txt_vat_tk" type="text" class="form-control" placeholder="TK"></td>
                        <td width="50"></td>
                      
                    </tr>
                    <tr>
                       
                        <td></td>
                        <td  width="150"></td>
                        <td  width="150"></td>
                        <td width="150" style="text-align: right">
                            <b>Tax</b></td> 
                       <td width="100" ><input name="txt_tax_perct" id="txt_tax_perct" type="text"  class="form-control" placeholder="%"></td>
                        <td width="100"><input name="txt_tax_tk" id="txt_tax_tk" type="text" class="form-control" placeholder="TK"></td>
                        <td width="50"></td>
                      
                    </tr>
                    <tr>
                       
                        <td></td>
                        <td  width="150"></td>
                        <td  width="150"></td>
                        <td width="150" style="text-align: right"><b>Total</b></td>
                        <td width="50" ></td>
                        <td width="150" colspan=""><input name="txt_total" id="txt_total" type="text" class="form-control" ></td>
                        <td width="50"></td>
                      
                    </tr>
                    <tr>
                       
                        <td></td>
                        <td  width="150"></td>
                        <td  width="150"></td>
                        <td width="150" style="text-align: right"><b>Paid</b></td> 
                        <td width="50" ></td>
                        <td width="150"><input name="txt_paid" id="txt_paid" type="text" class="form-control" ></td>
                        <td width="50"></td>
                      
                    </tr>
                    <tr>
                       
                        <td></td>
                        <td  width="150"></td>
                        <td  width="150"></td>
                        <td width="150" style="text-align: right"><b>Due</b></td> 
                        <td width="50" ></td>
                        <td width="150" style=""><input name="txt_due" id="txt_due" type="text" class="form-control" ></td>
                        <td width="50"></td>
                      
                    </tr>
                </table>
                
            </form>
            
        </div>
        <div class="row">
            <div class="col-md-offset-10">
                <input type="hidden" name="txt_sub_total" class="sub_total_hidden">
                <span>Grand Total</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="grand_total">0</span>
            </div>
        </div>
        <div class="row" style="padding-left: 10px">
            <div class="col-md-4">
                 <input onkeyup="return search_item(this.value);" type="text" class="form-control purchase_search" placeholder="Search Product....">
                 <div id="search-box"></div>
            </div>
           
        </div>
    </div>
    <!-- /.box-body -->
</div>
</form>