<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../css/tabled.css" rel="stylesheet">
</head>
<body>


<?php

$q=mysqli_query($conn,"select * from placement");
$rr=mysqli_num_rows($q);

if(!$rr){
    echo "<h2 style='color:red'>No any notice for You !!!</h2>";
}

else{
?>
<center><h2>PLacement Prediction</h2></center>
<br>
<table class="rwd-table">
    <Tr class="success">
        <th>Sr.No</th>
        <th>Company</th>
        <th>Drive Date</th>
        <th>Date of Annoucement</th>
        <th>Criteria(Program)</th>
        <th>Criteria(CGPA)</th>
        <th>Check Your Result</th>
        </Tr>
        <?php


$i=1;
while($row=mysqli_fetch_assoc($q)){
    
    echo "<Tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$row['company_name']."</td>";
    echo "<td>".$row['date_of_placement']."</td>";
    echo "<td>".$row['Date']."</td>";
    echo "<td>".$row['criteria_program']."</td>";
    echo "<td>".$row['criteria_cgpa']."</td>";
    echo "<td><a href='?result=".$row['company_name']."'>Apply Now</a></td>";
    echo "</Tr>";
    $i++;

}?>
</table>
<?php }?>
<?php
    if (isset($_GET['result'])){

        result($_GET['result']);
    }

    function result($company_name){
        include('../connection.php');
        $user= $_SESSION['username'];


        $query=mysqli_query($conn,"select PROGRAMMING,CGPA from placement_data_1 WHERE email='$user' ");  

        if(!$query){
            $conn -> error;
        }
        while($row1=mysqli_fetch_assoc($query)){
            $p=$row1['PROGRAMMING'];
            $c=$row1['CGPA'];
        }
        
            
        $query=mysqli_query($conn,"select criteria_program,criteria_cgpa from placement WHERE company_name='$company_name' ");   

        while($row1=mysqli_fetch_assoc($query)){
            $p1=$row1['criteria_program'];
            $c1=$row1['criteria_cgpa'];
        }
        if($p > $p1 && $c > $c1){
            //header('Location:rate_skills.php');
            ?>
            <script type="text/javascript">window.location.href='rate_skills.php?company=<?php echo $_GET['result']?>';</script>
        <?php
        }else{
            ?>
            <script type="text/javascript">
                window.location.href='apply.php';
                alert("You don't meet the eligibility criteria set by the company(Check your profile)");
            </script>
        <?php }
    }
?>
</body>
</html>