<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from order where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="SELECT * FROM `order`";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Order </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
                               <th>USERNAME</th>
							   <th>ADDRESS</th>
							   <th>CITY</th>
							   <th>PINCODE</th>
                               <th>PAYMENT TYPE</th>
                               <th>PRICE</th>
                               <th>PAYMENT STATUS</th>
                               <th>ORDER STATUS</th>
                               <th>ADDED ON</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['username']?></td>
							   <td><?php echo $row['address']?></td>
							   <td><?php echo $row['city']?></td>
							   <td><?php echo $row['pincode']?></td>
							   <td><?php echo $row['payment_type']?></td>
                               <td><?php echo $row['total_price']?></td>
                               <td><?php echo $row['payment_status']?></td>
                               <td><?php echo $row['order_status']?></td>
                               <td><?php echo $row['added_on']?></td>
							   <td>
								<?php
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Cancel Order</a></span>";
								?>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>