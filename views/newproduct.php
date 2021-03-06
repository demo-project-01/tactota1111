<?php
include 'clerk_sidebar.php';

require '../controller/sales.php';
$data=new sales();

$sql=$data->get_supplier_names();
$sql1 = $data->get_category_name();
$sql2 = $data->get_brand_name();
$sql3 = $data->get_model_name();
//print_r($sql);
//session_start();
//print_r($_SESSION['addnewproduct']);
?>

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="../public/css/update.css">
    <link rel="stylesheet" href="../public/css/newproduct.css">
    <script src="../public/js/"></script>

</head>
<div class="content" style="width: auto;">
    <h1 id="tbl-heading"  >Add new Product</h1>
    <?php if(isset($_SESSION['addnewproduct'])): ?>
        <div class="alert" id="activate">
            <span class="activebtn">&times;</span>
            <strong><?php echo $_SESSION['addnewproduct']; ?></strong>
        </div>
    <?php endif; ?>
    <?php unset($_SESSION['addnewproduct']); ?>

    <form action="../controller/sales.php?action=add_product" id="myForm"  method="post">
        <div class="update-tbl">
            <table>
                <tbody>

                <tr>

                    <th>Category Name</th>
                    <td>
                    <select class="select_supplier" id="category" name="category" >
                      <?php

                            foreach ($sql1 as $k => $v){
                        ?>
                        <option value="<?php echo $sql1[$k]["category_id"] ?>"><?php echo $sql1[$k]["category_name"] ?></option>
                      <?php
                       }
                       ?>
                  </select>

                  </td>
                </tr>
                <tr>
                    <th>Brand Name</th>
                
                    <td>

                       <select class="select_supplier" id="brand" name="brand" >
                       <?php

                       foreach ($sql2 as $k => $v){
                       ?>
                         <option value="<?php echo $sql2[$k]["brand_id"] ?>"><?php echo $sql2[$k]["brand_name"] ?></option>
                       <?php
                       }
                      ?>
                    </select>

                      </td>
              
                <tr>
                    <th>Model Name</th>
                    <labal id="uname"> </labal>
                    <td>
                  
                            <select class="select_supplier" id="model" name="model" >
                       <?php

                          foreach ($sql3 as $k => $v){
                        ?>
                         <option value="<?php echo $sql3[$k]["model_id"] ?>"><?php echo $sql3[$k]["model_name"] ?></option>
                       <?php
                         }
                        ?>
                            </select>

                    </td>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <labal id="uname"> </labal>
                    <td><labal id="quantity1"> </labal>
                        <input class="text" id="quantity" min="1" type="number"  name="quantity" required="">

                    </td>
                </tr>
                <tr>
                    <th>Cost per Item (Rs.)</th>
                    <td>
                        <input class="text" id="product_cost" type="number" min="1" name="product_cost" required="">

                    </td>
                </tr>
        
                <tr>
                    <th>Warranty (months)</th>
                    <td>
                        <input class="text" id="warranty" type="number" min="1" name="warranty" required="">

                    </td>
                </tr>

                <tr>
                    <th>Supplier</th>
                    <td>

                                <select class="select_supplier" id="supplier" name="supplier" >
                                    <?php

                                    foreach ($sql as $k => $v){
                                        ?>
                                 <option value="<?php echo $sql[$k]["sup_id"] ?>"><?php echo $sql[$k]["sup_name"] ?></option>
                                        <?php
                                    }
                                    ?>
                         </select>
                    </td>
                </tr>

                <tr>
                    <th>Serial Number</th>
                    <td>
                        <table id="mytable">
                            <tbody>
                            <tr id="template">
                                <td>
                                    <input class="text" id type="text" name="serial_number[]" required="" />
                                </td>
                            </tr>
                            </tbody>

                        </table>
                        <button id="add" style="float: right;">Add new row</button>

                    </td>
                </tr>

                <tr>
                    <td colspan=2>
                        <a class="add_button" href="view_all_products.php"><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp&nbspBack</i></a>
                            &nbsp&nbsp
                        <input type="submit" id="submit" name="add_product" value="Add">
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </form>
    <div class="footer">
	    <p>© Tactota Solutions All rights reserved </p>
    </div>
</div>

<script>
    function create_custom_dropdowns() {
        $('select').each(function (i, select) {
            if (!$(this).next().hasClass('dropdown-select')) {
                $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
                var dropdown = $(this).next();
                var options = $(select).find('option');
                var selected = $(this).find('option:selected');
                dropdown.find('.current').html(selected.data('display-text') || selected.text());
                options.each(function (j, o) {
                    var display = $(o).data('display-text') || '';
                    dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
                });
            }
        });

        $('.dropdown-select ul').before('<div class="dd-search"><input id="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div>');
    }

    // Event listeners

    // Open/close
    $(document).on('click', '.dropdown-select', function (event) {
        if($(event.target).hasClass('dd-searchbox')){
            return;
        }
        $('.dropdown-select').not($(this)).removeClass('open');
        $(this).toggleClass('open');
        if ($(this).hasClass('open')) {
            $(this).find('.option').attr('tabindex', 0);
            $(this).find('.selected').focus();
        } else {
            $(this).find('.option').removeAttr('tabindex');
            $(this).focus();
        }
    });

    // Close when clicking outside
    $(document).on('click', function (event) {
        if ($(event.target).closest('.dropdown-select').length === 0) {
            $('.dropdown-select').removeClass('open');
            $('.dropdown-select .option').removeAttr('tabindex');
        }
        event.stopPropagation();
    });

    function filter(){
        var valThis = $('#txtSearchValue').val();
        $('.dropdown-select ul > li').each(function(){
            var text = $(this).text();
            (text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show() : $(this).hide();
        });
    };
    // Search

    // Option click
    $(document).on('click', '.dropdown-select .option', function (event) {
        $(this).closest('.list').find('.selected').removeClass('selected');
        $(this).addClass('selected');
        var text = $(this).data('display-text') || $(this).text();
        $(this).closest('.dropdown-select').find('.current').text(text);
        $(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
    });

    // Keyboard events
    $(document).on('keydown', '.dropdown-select', function (event) {
        var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
        // Space or Enter
        //if (event.keyCode == 32 || event.keyCode == 13) {
        if (event.keyCode == 13) {
            if ($(this).hasClass('open')) {
                focused_option.trigger('click');
            } else {
                $(this).trigger('click');
            }
            return false;
            // Down
        } else if (event.keyCode == 40) {
            if (!$(this).hasClass('open')) {
                $(this).trigger('click');
            } else {
                focused_option.next().focus();
            }
            return false;
            // Up
        } else if (event.keyCode == 38) {
            if (!$(this).hasClass('open')) {
                $(this).trigger('click');
            } else {
                var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
                focused_option.prev().focus();
            }
            return false;
            // Esc
        } else if (event.keyCode == 27) {
            if ($(this).hasClass('open')) {
                $(this).trigger('click');
            }
            return false;
        }
    });

    $(document).ready(function () {
        create_custom_dropdowns();
    });

</script>
<!--
<script>

    $(document).ready(function() {
        $("#add").click(function() {
            $('#mytable tbody>tr:last').clone(true).insertAfter('#mytable tbody>tr:last');
            $('#mytable tbody>tr:last #name').val('');
            return false;
        });
    });
</script>
-->
<script>
    var row = 2;
    $(function() {
        $('#add').click(function(e) {
                 var sa=$('#quantity').val();
              //   console.log(sa);
          if(sa >= row){
             //   $('#quantity1').html('need higher than sales cost ').css('color', 'red');
              //  console.log(sa);
              e.preventDefault();
              var template = $('#template')
                  .clone()                        // CLONE THE TEMPLATE
                  .attr('id', 'row' + (row++))    // MAKE THE ID UNIQUE
                  .appendTo($('#mytable tbody'))  // APPEND TO THE TABLE
                  .show();
              // SHOW IT
           //   $('#mytable tbody>tr:last #name').val('');
            }else{
              e.preventDefault();
              var template = $('#template')

          }


        });

    });
</script>
<script>
    $('#product_cost, #sales_price').on('keyup', function () {
        if (parseFloat($('#product_cost').val()) < parseFloat($('#sales_price').val())) {
            $('#sales_price1').html('').css('color', '');
        } else
            $('#sales_price1').html('need higher than sales cost ').css('color', 'red');

    });

    $('#quantity, #reorder').on('keyup', function () {
        if (parseFloat($('#reorder').val()) < parseFloat($('#quantity').val())) {
            $('#reorder1').html('').css('color', '');
        } else
            $('#reorder1').html('need to less than quantity').css('color', 'red');

    });

    $('#quantity').on('keyup', function () {
        if (parseFloat($('#quantity').val()) > 1 ) {
            $('#quantity1').html('').css('color', '');
        } else
            $('#quantity1').html('quantity value less than 0 ').css('color', 'red');

    });

</script>

<script>

    setTimeout(function() {
        let alert = document.querySelector(".alert");
        alert.remove();
    }, 1600);
</script>

<script>

$('document').ready(function() {
  
    $('#category,#brand,#model').on('blur', function(){
       
        var brand = $('#brand').val();
        var model = $('#model').val();
       if (brand == '') {
            return;
        }if (model == '') {
            return;
        }
        $.ajax({
            url: '../controller/sales.php?action=get_model_brand',
            type: 'post',
            data: {        
                'brand': brand,
                'model' : model
            },
           success: function(response){
            if (response == 'taken' ) {
                 
                    $('#uname').html('diffrent brand can not use same model').css('color','red');
                }else if (response == 'not_taken') {
                    $('#uname').html('diffrent brand can not use same model').css('color','red');
                }

            }
        });
    });
</script>


