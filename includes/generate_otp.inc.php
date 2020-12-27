<?php

include('login.inc.php');

$roll_no = $_SESSION['user_id'];
$query = "SELECT * FROM student WHERE Student_Roll_No = '$roll_no'";

$result = mysqli_query($db,$query);

if($result)
{
    $student_record = mysqli_fetch_row($result);
    $parent_id = $student_record[6];
        
    $query = "SELECT * FROM parent WHERE Parent_ID = '$parent_id'";

    $result2 = mysqli_query($db,$query);
    if($result2){
        $parent_record = mysqli_fetch_row($result2);
        $phone_no = $parent_record[2];

        $senderId = "ABCDEF";

        $rndno=rand(100000, 999999);
        $message = urlencode("otp number.".$rndno);

        $authKey = "123456789";
        $route = "route=4";
        
        $postData = array(
        'authkey' => $authKey,
        'mobiles' => $phone_no,
        'message' => $message,
        'sender' => $senderId,
        'route' => $route
        );

        /* API URL*/
        $url="https://control.msg91.com/api/sendhttp.php";

        /* init the resource */
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
            /*,CURLOPT_FOLLOWLOCATION => true */
        ));


        /* Ignore SSL certificate verification */
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


        /* get response */
        $output = curl_exec($ch);

        /* Print error if any */
        if(curl_errno($ch))
        {

            echo 'error:' . curl_error($ch);
        }

        curl_close($ch);
        if(isset($_POST['sent_otp'])){
            $_SESSION['otp']=$rndno;
            //header( "Location: otp.php" );
        }


    }

}
