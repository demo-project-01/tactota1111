<?php
   include 'shopkeeper_sidebar.php';
   require '../controller/sales.php';
   $data=new sales();
   $sql=$data->display_customers_details();
 
?>
<head>
<link rel="stylesheet" href="../public/css/update.css">
<link rel="stylesheet" href="../public/css/report.css"></link>
</head>
<div class="content" style="width:auto;">
    <h1 id="tbl-heading">Bills Details</h1><br/>
    <div class="search">
        <input type="text" placeholder="Search.."  id="search_text">
    </div>
    <div class="view-tbl" id="result">
       <table>
            <thead>
                <tr>
               
                    <th>Bill No</th>
                    <th>Customer Name</th>  
                    <th>Telephone Number</th>
                    <th>Date</th>
                    <th>View Details</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
       if(!empty($sql)){
            foreach ($sql as $k => $v)
            {
                ?>
                <tr>
                    <td><?php echo $sql[$k]["bill_no"] ?></td>
		            <td><?php echo $sql[$k]["cust_name"] ?></td>
                    <td><?php echo $sql[$k]["telephone_no"] ?></td>
                    <td><?php echo $sql[$k]["date_time"] ?></td>
                    <td><a href="../controller/sales.php?action=view_bill&id=<?php  echo $sql[$k]["bill_no"]?>" class="view" title="view"><i class="fa fa-eye" aria-hidden="true" id="tbl-icon">&nbsp&nbsp</i></a></td>
                </tr>
                <?php
            } 
        }?>
            </tbody>
       </table>
    </div>
    <div class="footer"  style="margin-top:500px;">
		<p>© Tactota Solutions All rights reserved </p>
    </div>  
</div>