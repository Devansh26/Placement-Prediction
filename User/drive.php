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
    $query=mysqli_query($conn,"select * from placement where dept_code=1 OR dept_code=4 OR dept_code=5 OR dept_code=7 OR dept_code=8");    
}elseif($dept=='CS'){
    $query=mysqli_query($conn,"select * from placement where dept_code=2 OR dept_code=4 OR dept_code=6 OR dept_code=7 OR dept_code=8");
}elseif($dept=='EXTC'){
    $query=mysqli_query($conn,"select * from placement where dept_code=3 OR dept_code=5 OR dept_code=6 OR dept_code=7 OR dept_code=8");
}else{}
$check=mysqli_num_rows($query);

if($check==0)
{
echo "<h2 style='color:red'>No any Drives for You !!!</h2>";
}
else
{
?>
<h2>All Notification</h2>
<br>
<table class="rwd-table">
    <Tr class="success">
        <th>Sr.No</th>
        <th>Company</th>
        <th>Drive Date</th>
        <th>Date of Annoucement</th>
        <th>Criteria(Program)</th>
        <th>Criteria(CGPA)</th>
        <th>Google Form</th>
        </Tr>
        <?php


$i=1;
while($row=mysqli_fetch_assoc($query))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['company_name']."</td>";
echo "<td>".$row['date_of_placement']."</td>";
echo "<td>".$row['Date']."</td>";
if($row['criteria_program'] == 0){
    echo "<td>No Criteria Set</td>";
}else{
    echo "<td>".$row['criteria_program']."</td>";    
}
if($row['criteria_cgpa'] == 0){
    echo "<td>No Criteria Set</td>";
}else{
    echo "<td>".$row['criteria_cgpa']."</td>";    
}
echo "<td><a target='_blank' href=https://".$row['form_link'].">Register</a></td>";

echo "</Tr>";
$i++;
}
        ?>

</table>
<?php }?>
</body>
</html>