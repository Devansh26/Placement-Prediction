<?php 


    include('scripts/connect_db.php');

    if(isset($_POST['login']) && $_POST['login'] != "" &&
       isset($_POST['password']) && $_POST['password'] != "" ){

        session_start();
        {
            $user=mysqli_real_escape_string($conn,$_POST['login']);
            $pass=mysqli_real_escape_string($conn,$_POST['password']);
            $fetch=mysqli_query($conn,"SELECT id FROM admins 
                                WHERE username='$user' and password='$pass'")or die(mysql_error());
            $count=mysqli_num_rows($fetch);
            if($count>0)
            {
            //    session_register("sessionusername");
                $_SESSION['login_username']=$user;

                mysqli_query($conn,"UPDATE admins 
                             SET last_login=now()
                             WHERE username = '$user' ")or die(mysqli_error());

                header("Location:admin.php");
            }
            else
            {
                $user_msg = 'Wrong Username or Password!';
                header('location: login.php?user_msg='.$user_msg.'');
            }

        }
    } else{
        $user_msg = 'Sorry, but Something went wrong';
        header('location: admin.php?msg='.$user_msg.'');
    }
?>

