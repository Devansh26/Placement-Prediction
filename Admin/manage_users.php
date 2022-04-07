<?php 
    session_start();
    include('../connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Users</title>
    
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>        
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
        .filter a{
            color: #D1EFF5;           
        }
        a{
            color: #09CAF1;
        }
        .capital{
            text-transform:uppercase;
        }        
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
  <?php include('navbar.php'); ?>
    
<?php 

if(isset($_GET['users'])){
	if($_GET['users']=='all'){
		$q=mysqli_query($conn,"select * from users ");
	}elseif($_GET['users']=='placed'){
		$q=mysqli_query($conn,"select * from users where status='Placed'");
	}elseif($_GET['users']=='unplaced'){
		$q=mysqli_query($conn,"select * from users where status='Unplaced'");
	}else{
		$q=mysqli_query($conn,"select * from users ");
	}
}else{
	$q=mysqli_query($conn,"select * from users ");
}

$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any user exists !!!</h2>";
}
else
{
?>

<!--Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- \\Toastr -->
    <?php
        if(isset($_GET['del'])){
        echo "<script> 
                toastr.success('DELETED SUCCESSFULLY');
             </script>";
    }
    ?>

<script>
	function DeleteUser(id){
		if(confirm("You want to delete this record ?")){
		  window.location.href="delete_user.php?id="+id;    
		}
	}
</script>
<br>
<center>
<h2>STUDENTS</h2>
<div class="filter">
<h4><a href="test.php">Import new data</a></h4>
<input id="myInput" type="text" placeholder="Search.."><br>
<a href="manage_users.php?users=all">All</a>/<a href="manage_users.php?users=placed">Placed</a>/<a href="manage_users.php?users=unplaced">Unplaced</a>
</div>
</center>
<table class="rwd-table" id="myTable">
	<Tr class="success">
		<th>Sr.No</th>
		<th>User Name</th>
		<th>Email</th>
		<th>Department</th>
		<th>Mobile</th>
		<th>Gender</th>
		<th>Resume</th>
		<th>Status</th>
        <th>Update</th>
		<th>Delete</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['department']."</td>";
echo "<td>".$row['mobile']."</td>";
echo "<td>".$row['gender']."</td>";

if($row['resume']==''){
?>
    <td>Not Yet Uploaded</td>
<?php }else{ ?>
    <td><a href="view_resume.php?resume=<?php echo $row['resume']; ?>" target="_blank"><?php echo $row['resume']; ?></a></td>
<?php
} 
 
    echo "<td>".$row['status']."</td>"; 
    echo "<Td><a href='update_users.php?&id=".$row['id']."' style='color:green'><span class='fa fa-edit'></span></a></td>";
?>

<Td><a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:Red'><span class='fa fa-trash'></span></a></td>

<?php 
echo "</Tr>";
$i++;

}
?>
		
</table>
<?php }?>
<br><br>
</div>

</body>
</html>
