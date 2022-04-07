<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "placement");
$output = '';
if(isset($_POST["import"]))
{
 $tmp = explode('.', $_FILES["excel"]["name"]); // For getting Extension of selected file
 $extension=end($tmp);
 //$extension = strtolower(array_pop($extension));
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    $output .= "<tr>";
    $id = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $email = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $department = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
    $mobile = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
    $gender = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
    $dob = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
    $query = "INSERT INTO users(id,name,email,password,department,mobile,gender,dob,status) VALUES ('".$id."', '".$name."','".$email."','xiexie','".$department."','".$mobile."','".$gender."','".$dob."','Unplaced')";
    mysqli_query($connect, $query);
    $output .= '<td>'.$id.'</td>';
    $output .= '<td>'.$name.'</td>';
    $output .= '<td>'.$email.'</td>';
    $output .= '<td>'.$department.'</td>';
    $output .= '<td>'.$mobile.'</td>';
    $output .= '<td>'.$dob.'</td>';
    $output .= '</tr>';
   }
  } 
  $output .= '</table>';

 }
 else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
}
?>

<html>
 <head>
    <title>Upload Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />  
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="../css/tabled.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <style>

    .box{
      width:800px;
      border:3px solid #ccc;
      background-color:#D4EFDF;
      border-radius:5px;
      margin-top:100px;
    }
    .capital{
      text-transform:uppercase;
    }
    
  </style>
 </head>
 <body>
  <?php include('navbar.php'); ?>
    
    <center>
  <div class="container box">
   <h3 align="center">Add Student Data</h3><br />
   <h3 align="center">Data should be in the following format:</h3><br />
   <h3 align="center">ID Name Email Department Mobile Gender DOB</h3><br />
   <form method="post" enctype="multipart/form-data">
    <label>Select Excel File</label>
    <input type="file" name="excel" />
    <br><br>
    <input type="submit" name="import" class="btn btn-info" value="Import" />
   </form>
   <br>
   <br>
   <?php
   echo $output;
   ?>
  </div>
  </center>
  
<br><br><br>

 </body>
</html>