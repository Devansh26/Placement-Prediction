<?php

    include('scripts/connect_db.php');

        if(isset($_POST['quizName']) && $_POST['quizName'] != ""
        && isset($_POST['quizTime']) && $_POST['quizTime'] != ""
        && isset($_POST['numQues']) && $_POST['numQues'] != ""){

            $qName=mysqli_real_escape_string($conn,$_POST['quizName']);
            $qTime=mysqli_real_escape_string($conn,$_POST['quizTime']);
            $nQues=mysqli_real_escape_string($conn,$_POST['numQues']);

            $qTime = preg_replace('/[^0-9]/', "", $qTime);
            $nQues = preg_replace('/[^0-9]/', "", $nQues);

            $fetch=mysqli_query($conn,"SELECT id FROM quizes 
                                WHERE quiz_name='$qName'")or die(mysql_error());
            $count=mysqli_num_rows($fetch);
            if($count!="")
            {
                $user_msg = 'Sorry, but \ '.$qName.' \ already exists!';
                header('location: admin.php?msg='.$user_msg.'');
            }else{
                $qqq=mysqli_query($conn,"select MAX(quiz_id) as id from quizes");
                while($r=mysqli_fetch_assoc($qqq)){
                    $lastId = $r['id'];
                }
                mysqli_query($conn,"INSERT INTO quizes (quiz_id,quiz_name,total_questions,display_questions,time_allotted,set_default) VALUES($lastId+1,'$qName','$nQues','$nQues','$qTime',0)") or die(mysqli_error($conn));
                
                
                

                $user_msg = 'Quiz, \ '.$qName.' \ has been created!';
                header('location: admin.php?msg='.$user_msg.'');
            }
        }else{
            $user_msg = 'Sorry, but Something went wrong';
            header('location: admin.php?msg='.$user_msg.'');
        }
?>