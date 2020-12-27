<?php 
        include('login.inc.php');

        $roll_no = $_SESSION['user_id'];
        $query = "SELECT * FROM permissions WHERE Student_Roll_No = '$roll_no'";

        $result = mysqli_query($db,$query);

        if(mysqli_num_rows($result) > 0)
        {
            $permission_record = mysqli_fetch_row($result);
        
            $_SESSION['permission_id'] =  $permission_record[0];
            $_SESSION['roll_no'] = $permission_record[1];
            $_SESSION['initiation_date'] = $permission_record[2];
            $_SESSION['priority'] = $permission_record[3];
            $_SESSION['no_of_days'] = $permission_record[5];
            $_SESSION['desc'] = $permission_record[6];
            $_SESSION['vacate_date'] = $permission_record[7];
            $_SESSION['return_date'] = $permission_record[8];


            // echo nl2br("Permission ID : $permission_record[0]\n");            
            // echo nl2br("Roll Number : $permission_record[1]\n");
            // echo nl2br("Initiation Date : $permission_record[2]\n");
            // echo nl2br("Priority : $permission_record[3]\n");
            // echo nl2br("No of days requested : $permission_record[5]\n");
            // echo nl2br("Description : $permission_record[6]\n");
            // echo nl2br("Vacate Date : $permission_record[7]\n");
            // echo nl2br("Return Date : $permission_record[8]\n");

            $query = "SELECT * FROM approve WHERE Permission_Id = '$permission_record[0]'";
            $result2 = mysqli_query($db,$query);

            if($result2)
            {
                $approve = mysqli_fetch_row($result2);

                $_SESSION['status'] = $approve[2];
                $_SESSION['faculty_id'] = $approve[1];

                // echo nl2br("Status : $approve[2]\n");

                // if($approve[2] == 'Approved' or $approve[2] == 'Rejected'){
                //     echo nl2br("Faculty : $approve[1]");
                // }
            }
        }

        else{
            header("location: student.php");
            echo nl2br("No requests to display.\n");

        }
