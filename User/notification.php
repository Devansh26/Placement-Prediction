<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../css/tabled.css" rel="stylesheet">
</head>
<body>


<?php 
$user= $_SESSION['username'];
$q=mysqli_query($conn,"select department from users where email='$user' ");
$rr=mysqli_fetch_assoc($q);
$dept=$rr['department'];
if($dept=='IT'){
    $query=mysqli_query($conn,"select * from notice where department_code=1 OR department_code=4 OR department_code=5 OR department_code=7 OR department_code=8");    
}elseif($dept=='CS'){
    $query=mysqli_query($conn,"select * from notice where department_code=2 OR department_code=4 OR department_code=6 OR department_code=7 OR department_code=8");
}elseif($dept=='EXTC'){
    $query=mysqli_query($conn,"select * from notice where department_code=3 OR department_code=5 OR department_code=6 OR department_code=7 OR department_code=8");
}
$check=mysqli_num_rows($query);
//$result=mysqli_fetch_assoc($query);
if($check==0)
{
echo "<h2 style='color:red'>No any notice for You !!!</h2>";
}
else
{
?>
<h2>All Notification</h2>

<table class="rwd-table">
    <Tr class="success">
        <th>Sr.No</th>
        <th>Subject</th>
        <th>Details</th>
        <th>Date</th>
        </Tr>
        <?php


$i=1;
while($row=mysqli_fetch_assoc($query))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['description']."</td>";
echo "<td>".$row['Date']."</td>";

echo "</Tr>";
$i++;
}
        ?>

</table>
<?php }?>
</body>
</html>