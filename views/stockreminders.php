<?php
/*session_start();
$row= $_SESSION['reminderitem_suppliers'];*/
include 'clerk_sidebar.php';
require '../controller/inventory_maintain.php';
//session_start();
$row= $_SESSION['reminderitem_suppliers'];

?>

<head>
<link rel="stylesheet" href="../public/css/update.css">
<link rel="stylesheet" href="../public/css/reminderitems.css">
</head>
  <div class="content"style="width:auto;">
  <h1 id="tbl-heading"> SUPPLIERS</h1>
  
  <div class="search">
    <input type="text" placeholder="Search..">
  </div>


<div class="view-tbl">
      <table>
        <thead>
          <tr>
            <th>Supplier</th>
            <th scope="col">Address</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
            <th scope="col" colspan=3 border=0></th>
          </tr>
        </thead>
        <tbody>
        <?php


?>
<tr> 

<?php if($row["item_status"]=='1'){?>
    <td><?php echo $row["sup_name"] ?></td>
    <td><?php echo $row["address"] ?></td>
    <td><?php echo $row["p_cost"] ?></td>
    <td><a href = "email.php"  class="view"><button>View</button> </td>
    <!--?php
    foreach ($sql as $k => $v){

    {?-->
    <td><a href="../controller/inventory_maintain.php?action=delete_reminder_suppliers&id=<?php echo str_replace('#','%23',$row["serial_no"]); ?>" class="view"><button>Delete</button></a></td>
    <td><a href = "reminderitems.php"  class="view"><button>Back</button> </td><?php }?>
  <!--?php  $row["active_status"]=='0' ;?-->
    <!--td><button class="update">Delete</button> </td-->
</tr>
      </tbody>
  </table> 
      </div>
      <div class="footerh">
			<p>© Tactota Solutions All rights reserved </p>
      </div>
    </div>
</body>
