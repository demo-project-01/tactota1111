<?php
include 'admin_sidebar.php';
require '../controller/inventory_maintain.php';
$data = new inventory_maintain();
$sql=$data->view_categories();
$sql1=$data->view_brands();
$sql2=$data->view_models();
$sql3=$data->current_stock();
?>


<head>
<link rel="stylesheet" href="../public/css/update.css"></link>
<link rel="stylesheet" href="../public/css/report.css"></link>

</head>

<div class="content" style="width:auto;">
  <h1 id="tbl-heading">View Stock Reports</h1>
  <div class="nav-bar">
      <table class="selection">
        <tr>
          <td><label for="category" class="date-lbl">Category</label></td>
          <td><label for="brand" class="date-lbl">Brand</label></td>
          <td><label for="model" class="date-lbl">Model</label></td>
        </tr>
        <tr>
          <td>
            <select name="category" id="category">
              <option value="0">All</option>
              <?php  
              if(!empty($sql)){
                foreach ($sql as $k => $v){  ?>
                  <option value="<?php echo $sql[$k]["category_id"] ?>"> <?php 
                    echo $sql[$k]["category_name"] ?>
                  </option>   <?php
                   }
                }
              ?>
            </select>
          </td>
          <td>
            <select name="brand" id="brand">
              <option value="0">All</option>
              <?php
                 if(!empty($sql1)){
                foreach ($sql1 as $k => $v){  ?>
                  <option value="<?php echo $sql1[$k]["brand_id"] ?>"> <?php 
                    echo $sql1[$k]["brand_name"] ?>
                  </option>   <?php
                 }
                }
              ?>
            </select>
          </td>
          <td>
            <select name="model" id="model">
              <option value="0">All</option>
              <?php 
                 if(!empty($sql2)){
                foreach ($sql2 as $k => $v){  ?>
                  <option value="<?php echo $sql2[$k]["model_id"] ?>"> <?php 
                    echo $sql2[$k]["model_name"] ?>
                  </option>   <?php
                 }
                }
              ?>
            </select>
          </td>
        </tr>
        
        <tr>
          <td colspan=3>
            <a class="button" href="#">Search </a>
          </td>
        </tr>
      </table>
    </div>
  
  <div class="page">

  <h1 id="h1">Current Stock</h1>

  <div class="view-tbl" id="view-tbl1">
  <table>
      <thead>
        <tr>
          <th>Product ID</th>
          <th>Category Name</th>
          <th>Brand Name</th>
          <th>Model Name</th>
          <th>Quantity</th>
        </tr>
      </thead>
      <tbody>
      <?php
       if(!empty($sql3)){
foreach ($sql3 as $k => $v)
{
    ?>
    <tr>
        
        <td><?php echo $sql3[$k]["p_id"] ?></td>
        <td><?php echo $sql3[$k]["category_name"] ?></td>
        <td><?php echo $sql3[$k]["brand_name"] ?></td>
        <td><?php echo $sql3[$k]["model_name"] ?></td>
        <td><?php echo $sql3[$k]["total_quantity"] ?></td>
    </tr>
    <?php
   }
} ?>
        
      </tbody>
    </table>
</div>
<table>
        <tr>
          <td class="center-btn">
            <a class="button" href="admin.php" style="float:left;"><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp&nbspBack</i></a>
          </td>
          <td class="center-btn">
            <a class="button" href="../controller/inventory_maintain.php?action=current_stock_report_download" style="float:right;"><i class="fa fa-download" aria-hidden="true">&nbsp&nbspDownload Report</i></a>
          </td>
        </tr>
      </table>
  </div>
<div class="footer">
	<p>© Tactota Solutions All rights reserved </p>
</div>
</div>



