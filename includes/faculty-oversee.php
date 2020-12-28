<?php
require 'db.config.php';
session_start();
$arr = array();
//$roll = $_SESSION['login_user_stud'];
$sql = "SELECT * FROM permissions";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    array_push($arr, $row);
}

?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <title>HMS</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="/web/css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="/web/css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- /google fonts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="script.js"> -->
    </script>

</head>

<body>

    <h1>Requests to be reviewed:</h1>

    <div class="lmao" style="height: 70vh;position:relative;overflow:auto;">

        <?php
        $arr2 = array();
        $sql2 = "SELECT * FROM approve";
        $result2 = mysqli_query($conn, $sql);
        while ($row2 = mysqli_fetch_assoc($result2)) {
            array_push($arr2, $row2);
        }
        $arrlen2 = count($arr2);
        $arrlen = count($arr);
        session_start();
        if ($arrlen2 === 0) {
            echo "
            <div>
            <div class=\" w3l-login-form\">
            
                <div class=\"pertext2\">
                    No pending request to view.
                </div>
                
            </div>
        </div>";
        }
        for ($i = 0; $i < $arrlen; $i++) {
            $row = $arr[$i];
            $permid = $row['Permission_ID'];
            $roll = $row['Student_Roll_No'];
            $query = "SELECT * FROM approve WHERE Permission_ID = '$permid'";
            $result = mysqli_query($conn, $query);
            $res = mysqli_fetch_row($result);
            if (!$result) {
                echo "Error " . mysqli_error($result);
            }
            if ($row['OTP_Sent'] == 1) {
                $otp = "Sent";
            } else {
                $otp = "Not Sent";
            }
            // echo "<div class=\"lmao\" style=\"height: 70vh;position:relative;overflow:auto;\">";
            if ($res[2] == "Waitlisted") {
                echo "
                <div>
                    <div class=\" w3l-login-form\">
                    <form action=\"stud.del.req.php\" method=\"POST\">
                        <div class=\"pertext\">
                        <strong>Permission ID: {$row['Permission_ID']}</strong>
                        <br> </br>
                        <b>Permission from: {$row['Vacate_Date']} to {$row['Return_Date']} </b>
                        <br> </br>
                        <b> Reason: {$row['Description']}  </b>
                        <br> </br>
                        <b> Total Number of days: {$row['No_of_Days']}  </b>
                        <br> </br>
                        <b> Status: {$res[2]}  </b>
                        <b><p style=\"text-align:center;\"class=\" w3l-register-p\"><a href=\"stud_details.php?link=" . $row['Student_Roll_No'] . "\" class=\"register\"> View Student Details</a></p></b>
                        <b><p style=\"text-align:center;\"class=\" w3l-register-p\"><a href=\"req_accept.php?link=" . $row['Permission_ID'] . "\" class=\"register\"> Accept Request</a></p></b>
                        <b><p style=\"text-align:center;\"class=\" w3l-register-p\"><a href=\"req_deny.php?link=" . $row['Permission_ID'] . "\" class=\"register\"> Deny Request</a></p></b>    
                        </div>
                        </form>
                    </div>
                    <br><br><br><br>
                </div>
                
                ";
            }
            // echo "</div>";
        }


        ?>

    </div>

</body>

</html>