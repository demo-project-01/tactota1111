<?php
 session_start();
$sql=$_SESSION['supplier_details'];
//print_r($row[1]["sup_id"]);
//print_r($_SESSION['supplier_details']);
//print_r($sql);
?>

<table>
 <thead>
 <tr>

  <th>Supplier Name</th>
  <th>Email Address</th>
  <th>Address</th>
  <th>Contact Number</th>
  <th colspan=3>Action</th>
 </tr>
 </thead>
 <tbody>
 <?php  if(!empty($sql)){
 foreach ($sql as $k => $v)
 {
  ?>
  <tr>

   <td><?php echo $sql[$k]["sup_name"] ?></td>
   <td><?php echo $sql[$k]["email_address"] ?></td>
   <td><?php echo $sql[$k]["address"] ?></td>
   <td><?php echo $sql[$k]["telephone_no"] ?></td>

   <td><a href="../controller/inventory_maintain.php?action=supplier_profile&id=<?php
    echo $sql[$k]["sup_id"]; ?>" title="view"><i class="fa fa-eye" aria-hidden="true" id="tbl-icon"></i>
    </a></td>
   <td><a href="../controller/inventory_maintain.php?action=update_supplier_details&id=<?php echo $sql[$k]["sup_id"]; ?>" title="Update"><i class="fa fa-pencil" aria-hidden="true" id="tbl-icon"></i></a></td>
   <td><a href ="../controller/inventory_maintain.php?action=delete_supplier_details&id=<?php echo $sql[$k]["sup_id"]; ?>" title="Delete"><i class="fa fa-trash" aria-hidden="true" id="tbl-icon"></i></a></td>
  </tr>
  <?php
 }
 } ?>
 </tbody>
</table>
