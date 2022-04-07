<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../css/tabled.css" rel="stylesheet">
	<style type="text/css">
		a { text-decoration: none; }
	</style>
</head>
<body>

<script>
	function DeleteNotice(id){
		if(confirm("You want to delete this record ?")){
			window.location.href="delete_drive.php?id="+id;
		}
	}
</script>
<?php 
	$q=mysqli_query($conn,"select * from placement ");
	$rr=mysqli_num_rows($q);
	if(!$rr){
		echo "<h2 style='color:red'>No any drive found !!!</h2>";
	}else{
		?>
		<center><h2 style="color: #D1EFF5">All Drives</h2></center>

		<table class="rwd-table">
			<tr>
				<th colspan="10"><a href="index.php?page=add_drive" style="color:#E0FFFF;">Add New Drive</a></th>
			</tr>
			<Tr class="success">
				<th>Sr.No</th>
				<th>Company</th>
				<th>Drive Date</th>
				<th>Departments</th>
				<th>Date</th>
				<th>Criteria(Program)</th>
				<th>Criteria(CGPA)</th>
				<th>Google Form</th>		
				<th>Update</th>
				<th>Delete</th>
			</Tr>
			<?php 

				$i=1;
				while($row=mysqli_fetch_assoc($q))
				{

				echo "<Tr>";
				echo "<td>".$i."</td>";
				echo "<td>".$row['company_name']."</td>";
				echo "<td>".$row['date_of_placement']."</td>";
				if($row['dept_code']==1){
					echo "<td>IT</td>";
				}elseif($row['dept_code']==2){
					echo "<td>CS</td>";
				}elseif($row['dept_code']==3){
					echo "<td>EXTC</td>";
				}elseif($row['dept_code']==4){
					echo "<td>IT,CS</td>";
				}elseif($row['dept_code']==5){
					echo "<td>IT,EXTC</td>";
				}elseif($row['dept_code']==6){
					echo "<td>CS,EXTC</td>";
				}elseif($row['dept_code']==7){
					echo "<td>IT,CS,EXTC</td>";
				}elseif($row['dept_code']==8){
					echo "<td>IT,CS,EXTC</td>";
				}else{}
				echo "<td>".$row['Date']."</td>";
				echo "<td>".$row['criteria_program']."</td>";
				echo "<td>".$row['criteria_cgpa']."</td>";
				echo "<td><a target='_blank' href=https://".$row['form_link'].">Link</a></td>";

				echo "<Td><a href='index.php?page=update_drive&placement_id=".$row['placement_id']."' style='color:green'><span class='fa fa-edit'></span></a></td>";
			?>

			<Td><a href="javascript:DeleteNotice('<?php echo $row['placement_id']; ?>')" style='color:Red'><span class='fa fa-trash'></span></a></td>


			<?php
				echo "</Tr>";
				$i++;
			}
		?>
		
	</table>
<?php }?>
</body>
</html>