<?php

    include('login.inc.php');

    if(isset($_POST['req_submit'])){
       
        $otp = mysqli_real_escape_string($db,$_POST['otp']);

        if($otp == "123456"){

            $roll_no = $_SESSION['user_id'];
            
            $no_of_days = mysqli_real_escape_string($db,$_POST['no_of_days']);
            $desc = mysqli_real_escape_string($db,$_POST['desc']);
            $vacate_date = mysqli_real_escape_string($db,$_POST['vacate_date']);
            $return_date = mysqli_real_escape_string($db,$_POST['return_date']);

            $initiation_date = strtotime(date('Y-m-d',time()));
            $vacate = strtotime($vacate_date);

            $date_diff = $vacate - $initiation_date;
            $day_diff = $date_diff/86400;

            // $priority = $_POST['priority'];
            //$date_diff = ;

            if($day_diff <= 3){
                $priority = 'High';
            }
            elseif($day_diff <= 7){
                $priority = 'Medium';
            }
            else{
                $priority = 'Low';
            }

            $query = "INSERT INTO permissions(Student_Roll_No,Priority,OTP_Entered,No_of_Days,Description,Vacate_Date,Return_Date) VALUES ('$roll_no','$priority','1','$no_of_days','$desc','$vacate_date','$return_date')";

            $result = mysqli_query($db,$query);

            if(!$result){
                echo("Could not process request.");
            }
            else{
                echo nl2br("\nYour request has been made successfully.\n");
                //header("location: student.php");

                $query = "SELECT * FROM permissions WHERE Student_Roll_No = '$roll_no'";
                $result2 = mysqli_query($db,$query);

                $permission_record = mysqli_fetch_row($result2);

                $query = "INSERT INTO approve(Permission_ID) VALUES ('$permission_record[0]')";

                $result2 = mysqli_query($db,$query);
            }
        }
        else{
            echo nl2br("\nOTP Verifaction failed. Try again.\n");
        }
    }