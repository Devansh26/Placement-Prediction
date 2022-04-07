<?php 
    session_start();
    include('../connection.php');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>XIE</title>
    
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>    
    
    <style type="text/css">
        .capital{
            text-transform:uppercase;
        }    
        body{
          background: #A5D2E5;
        }
        * {
            box-sizing: border-box;
          }

          .column {
            float: left;
            width: 33.33%;
            padding: 2px;
          }
          img {
            border-radius: 50%;
          }
          /* Clearfix (clear floats) */
          .row::after {
            content: "";
            clear: both;
            display: table;
          }
    </style>
</head>

<body>    
    <?php include('navbar.php'); ?>
    <div class="container">
<!-- partial -->    
    <br><br>
    <div class="content">
        <?php 
        @$page=  $_GET['page'];
          if($page!=""){

            if($page=="manage_users"){
              include('manage_users.php');            
            }
            
            if($page=="update_password"){
                include('update_password.php');        
            }
            
            if($page=="notification"){
                include('display_notification.php');            
            }
            
            if($page=="placement"){
                include('display_drive.php');            
            }            
            
            if($page=="update_notice"){
                include('update_notice.php');            
            }

            if($page=="update_drive"){
                include('update_drive.php');            
            }
                                  
            if($page=="view_users"){
                include('view_users.php');            
            }

            if($page=="add_notice"){
                include('add_notice.php');            
            }

            if($page=="add_drive"){
                include('placement.php');            
            }

          }
          
          else{
          ?>
          <!-- container end-->

          <center>
          <h1 class="page-header">Dashboard</h1><br>
          
        
          <div class="row">
            <div class="column">
              <img src="../images/rohan.jpg" alt="Snow" style="width:45%;height:200px;">
            </div>
            <div class="column">
              <img src="../images/devansh.jpg" alt="Forest" style="width:45%;height:200px;">
            </div>
            <div class="column">
              <img src="../images/sai.jpg" alt="Mountains" style="width:45%;height:200px;">
            </div>
          </div>
  
          </center>
          
          <?php } ?>
    </div>
    </div>
    
    
    <script  src="toast/script.js"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
    
</body>

</html>
