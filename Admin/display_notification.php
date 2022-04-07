<!DOCTYPE html>
<html>
<head>
	<title>Notifications</title>
	<link href="../css/tabled.css" rel="stylesheet">
	
    <!-- Search -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
    </script>
    <!-- \\ Search -->

    <style type="text/css">
    	#myInput {
          background-image: url('/css/searchicon.png');
          background-position: 10px 10px;
          background-repeat: no-repeat;
          width: 80%;
          font-size: 16px;
          padding: 12px 20px 12px 40px;
          border: 1px solid #ddd;
          margin-bottom: 12px;
        }
    </style>
</head>
<body>
	<br><br>
	<!--Toastr -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<!-- \\Toastr -->

    <?php
        if(isset($_GET['del'])){
        	if($_GET['del']=='success'){
        		echo "<script> 
                  		toastr.success('DELETED SUCCESSFULLY');
             	  		</script>";
            }
    	}
    ?>
	<script>
	function DeleteNotice(id){
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_notification.php?id="+id;
		}
	}
	</script>

	<?php 
		$q=mysqli_query($conn,"select * from notice ");
		$rr=mysqli_num_rows($q);
		if(!$rr){
			echo "<h2 style='color:red'>No any Notice found !!!</h2>";
		}else{ ?>
			<center>
			<h2 style="color: #D1EFF5">All Notice</h2>
			<br><br>
			<input id="myInput" type="text" placeholder="Search.."><br>
			</center>
			<table class="rwd-table" id="myTable">
				<tr>
					<th colspan="7"><a href="index.php?page=add_notice" style="color:#E0FFFF;">Add 	New notice</a></th>
				</tr>
				<Tr class="success">
					<th>Sr.No</th>
					<th>Subject</th>
					<th>Details</th>
					<th>Departments</th>
					<th>Date</th>		
					<th>Update</th>
					<th>Delete</th>
				</Tr>
				<?php 
					$i=1;
					while($row=mysqli_fetch_assoc($q)){

						echo "<Tr>";
						echo "<td>".$i."</td>";
						echo "<td>".$row['subject']."</td>";
						echo "<td>".$row['description']."</td>";
						if($row['department_code']==1){
							echo "<td>IT</td>";
						}elseif($row['department_code']==2){
							echo "<td>CS</td>";
						}elseif($row['department_code']==3){
							echo "<td>EXTC</td>";
						}elseif($row['department_code']==4){
							echo "<td>IT,CS</td>";
						}elseif($row['department_code']==5){
							echo "<td>IT,EXTC</td>";
						}elseif($row['department_code']==6){
							echo "<td>CS,EXTC</td>";
						}elseif($row['department_code']==7){
							echo "<td>IT,CS,EXTC</td>";
						}elseif($row['department_code']==8){
							echo "<td>IT,CS,EXTC</td>";
						}else{}
						echo "<td>".$row['Date']."</td>";

						echo "<Td><a href='index.php?page=update_notice&notice_id=".$row['notice_id']."' style='color:green'><span class='fa fa-edit'></span></a></td>";

				?>

				<Td><a href="javascript:DeleteNotice('<?php echo $row['notice_id']; ?>')" style='color:Red'><span class='fa fa-trash'></span></a></td>


				<?php 
						echo "</Tr>";
						$i++;
					}
				?>
		
			</table>
		<?php }?>
		<br><br>
</body>
</html>