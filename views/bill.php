<?php
include 'clerk_sidebar.php';

?>

  <link rel="stylesheet" href="../public/css/bill.css">
  <link rel="stylesheet" href="../public/css/view_user.css">

  <div class="content1">
 
     <div class="main-box1">
     <form action="../controller/sales.php?action=add_bill" method="post">
          <div class="row">
            <div class="col-50">

             <div class="sub-box1">

             

                  
                 <div class="row">
                    <div class="col-25">
                      <b><label1>Bill number</label1></b>
                    </div>
                    <div class="col-75">
                     <input type="text" id="product_name" name="product_name" required="">
                    </div>
                 </div>
    
                 <div class="row">
                   <div class="col-25">
                     <label1>Date</label1>
                   </div>
                   <div class="col-75">
                     <input type="text" id="date_time" name="date_time" required="">
                   </div>
                 </div>
    
    
         
      
               <div class="row">
           <div class="col-25">
            <label1>Bill amount</label1>
           </div>
           <div class="col-75">
            <input type="text" id="amount" name="amount" required="">
           </div>
               </div>


     </div>
      </div>

  <div class="col-50">
      <div class="sub-box1">


        <div class="row">
          <div class="col-25">
            <label1>Customer Name</label1>
          </div>
         <div class="col-75">
           <input type="text" id="cust_name" name="cust_name" required="">
         </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label1>Address</label1>
          </div>
         <div class="col-75">
           <input type="text" id="address" name="address" required="">
         </div>
        </div>

        <div class="row">
          <div class="col-25">
           <label1>Telephone No</label1>
          </div>
          <div class="col-75">
            <input type="text" id="telephone_no" name="telephone_no" required="">
          </div>
        </div>
    
        <div class="row">
          <div class="col-25">
            <label1>Email</label1>
          </div>
          <div class="col-75">
            <input type="text" id="email_address" name="email_address" required="">
          </div>
        </div>

      

     </div>
   
    
   </div> 
    

    <div class="view-tbl1">
  
    <table>
 
 <thead>
   <tr>
     <th>Product Name</th>
     <th scope="col">Brand Name</th>
     <th scope="col">Model Number</th>
     <th scope="col">serial Number</th>
     <th scope="col">Warrenty</th>
     <th scope="col">Quantity</th>
     <th scope="col">Sales Price</th>
     <th scope="col">Discount</th>
     <th scope="col">Total Price</th>

   </tr>
 </thead>

 <tbody>
   <tr>
   <td> <input class="text1" type="text1" name="product_number" placeholder="Product name" required=""></td>
     <td> <input class="text1" type="text1" name="brand_name" placeholder="Brand name" required=""></td>
     <td> <input class="text1" type="text1" name="Model_number" placeholder="Model number" required=""></td>
     <td> <input class="text1" type="text1" name="serial_number" placeholder="Serial number" required=""></td>
     <td> <input class="text1" type="text1" name="warrenty" placeholder="Warrenty" required=""></td>
     <td> <input class="text1" type="text1" name="quantity" placeholder="Qyantity" required=""></td>
     <td> <input class="text1" type="text1" name="sales_price" placeholder="sales price" required=""></td>
     <td> <input class="text1" type="text1" name="discount" placeholder="Discount" required=""></td>
     <td> <input class="text1" type="text1" name="total_price" placeholder="Total Price" required=""></td>

    
</tr>

<tr>
<td> <input class="text1" type="text1" name="product_number" placeholder="Product name" required=""></td>
     <td> <input class="text1" type="text1" name="brand_name" placeholder="Brand name" required=""></td>
     <td> <input class="text1" type="text1" name="Model_number" placeholder="Model number" required=""></td>
     <td> <input class="text1" type="text1" name="serial_number" placeholder="Serial number" required=""></td>
     <td> <input class="text1" type="text1" name="warrenty" placeholder="Warrenty" required=""></td>
     <td> <input class="text1" type="text1" name="quantity" placeholder="Qyantity" required=""></td>
     <td> <input class="text1" type="text1" name="sales_price" placeholder="sales price" required=""></td>
     <td> <input class="text1" type="text1" name="discount" placeholder="Discount" required=""></td>
     <td> <input class="text1" type="text1" name="total_price" placeholder="Total Price" required=""></td>

    
</tr>
<tr>
<td> <input class="text1" type="text1" name="product_number" placeholder="Product name" required=""></td>
     <td> <input class="text1" type="text1" name="brand_name" placeholder="Brand name" required=""></td>
     <td> <input class="text1" type="text1" name="Model_number" placeholder="Model number" required=""></td>
     <td> <input class="text1" type="text1" name="serial_number" placeholder="Serial number" required=""></td>
     <td> <input class="text1" type="text1" name="warrenty" placeholder="Warrenty" required=""></td>
     <td> <input class="text1" type="text1" name="quantity" placeholder="Qyantity" required=""></td>
     <td> <input class="text1" type="text1" name="sales_price" placeholder="sales price" required=""></td>
     <td> <input class="text1" type="text1" name="discount" placeholder="Discount" required=""></td>
     <td> <input class="text1" type="text1" name="total_price" placeholder="Total Price" required=""></td>

    
</tr>
<tr>
<td> <input class="text1" type="text1" name="product_number" placeholder="Product name" required=""></td>
     <td> <input class="text1" type="text1" name="brand_name" placeholder="Brand name" required=""></td>
     <td> <input class="text1" type="text1" name="Model_number" placeholder="Model number" required=""></td>
     <td> <input class="text1" type="text1" name="serial_number" placeholder="Serial number" required=""></td>
     <td> <input class="text1" type="text1" name="warrenty" placeholder="Warrenty" required=""></td>
     <td> <input class="text1" type="text1" name="quantity" placeholder="Qyantity" required=""></td>
     <td> <input class="text1" type="text1" name="sales_price" placeholder="sales price" required=""></td>
     <td> <input class="text1" type="text1" name="discount" placeholder="Discount" required=""></td>
     <td> <input class="text1" type="text1" name="total_price" placeholder="Total Price" required=""></td>

    
</tr>
<tr>
     <td> <input class="text1" type="text1" name="product_number" placeholder="Product name" required=""></td>
     <td> <input class="text1" type="text1" name="brand_name" placeholder="Brand name" required=""></td>
     <td> <input class="text1" type="text1" name="Model_number" placeholder="Model number" required=""></td>
     <td> <input class="text1" type="text1" name="serial_number" placeholder="Serial number" required=""></td>
     <td> <input class="text1" type="text1" name="warrenty" placeholder="Warrenty" required=""></td>
     <td> <input class="text1" type="text1" name="quantity" placeholder="Qyantity" required=""></td>
     <td> <input class="text1" type="text1" name="sales_price" placeholder="sales price" required=""></td>
     <td> <input class="text1" type="text1" name="discount" placeholder="Discount" required=""></td>
     <td> <input class="text1" type="text1" name="total_price" placeholder="Total Price" required=""></td>

    
</tr>

</table>
</div>


         <div class="box-down1">
        
         <div class="row">
         <h5 class="left">Payment Method</h5>
					<input id="payment_method" class="text" type="radio" name="payment_method" value="cash" required="">Cash
					<input id="payment_method" class="text" type="radio" name="payment_mehod" value="cheque" required="">Cheque
        </div>
    
        <b><h2>Cheque information</h2></b>

      
        <div class="row">
    <div class="col-25">
    <label1>Bank Name</label1>
    </div>
    <div class="col-75">
    <input  type="text" id="bank_name" name="bank_name" required="">
    <!--input id="address" class="text" type="text" name="address"required=""-->
    </div>
        </div>

       
        <div class="row">
    <div class="col-25">
    <label1>Cheque No</label1>
    </div>
    <div class="col-75">
    <input type="text" id="cheque_no" name="cheque_no" required="">
    </div>
        </div>
    
        <div class="row">
    <div class="col-25">
    <label1>Due Date</label1>
    </div>
    <div class="col-75">
    <input type="text" id="due_date" name="due_date" required="">
    </div>
        </div>
               
         <div class="row">
    <div class="col-25">
    <label1>Recived Date</label1>
    </div>
    <div class="col-75">
    <input type="text" id="recived_date" name="recived_date" required="">
    </div>
        </div>
    
        
        <div class="row">
    <div class="col-50">
    <input type="new-btn" value="Pay">
    </div>
    <div class="col-50">
    <input type="new-btn" value="Cancel">
    </div>
        </div>
  
        </div>
  </form>
</div>
 </div>
</body>


