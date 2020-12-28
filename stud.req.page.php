<?php
require 'includes/db.config.php';
session_start();
$arr = array();
$roll = $_SESSION['login_user_stud'];
$sql = "SELECT * FROM permissions WHERE Student_Roll_No='$roll'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    array_push($arr, $row);
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
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

    <h1>Requests</h1>

    <form action="stud.req.new.php">
        <div class=" w3l-login-form" style="background-color:rgba(0,0,0,0)">

            <button type="submit" name="new">New Request</button>

        </div>

    </form>

    <div class="lmao" style="height: 70vh;position:relative;overflow:auto;">

        <?php
        $arrlen = count($arr);
        session_start();
        if ($arrlen === 0) {
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
            $query = "SELECT * FROM approve WHERE Permission_ID = '$permid'";
            //$_SESSION['curr_perm'] = $permid;
            //echo $_SESSION['curr_perm'];
            $result = mysqli_query($conn, $query);
            $res = mysqli_fetch_row($result);
            if(!$result){
                echo "Error ". mysqli_error($result);
            } 
            if($row['OTP_Sent'] == 1){
                $otp = "Sent";
            }
            else{
                $otp = "Not Sent";
            }
             if($res[2] != "Waitlisted" && $res[2] != "Denied" && $res[2] != "Approved")
             {
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
                            <b> OTP Sent: {$otp}  </b>
                            <br> </br>
                            <b> Status: {$res[2]}  </b>
                            <b><p style=\"text-align:center\"class=\" w3l-register-p\"><a href=\"includes/generate_otp.inc.php?link=" . $row['Permission_ID'] . "\" class=\"register\"> Send OTP</a></p></b>
                            <b><p style=\"text-align:center\"class=\" w3l-register-p\"><a href=\"includes/check_otp.php?link=" . $row['Permission_ID'] . "\" class=\"register\"> Enter the OTP</a></p></b>
                            <button type=\"submit\" value=" . $i . " name=\"delete\">delete</button>
                            </div>
                            </form>
                        </div>
                        <br><br><br><br>
                    </div>
                    
                    ";
             }
             else
             {
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
                            <br> </br>
                            <button type=\"submit\" value=" . $i . " name=\"delete\">delete</button>
                            </div>
                            </form>
                        </div>
                        <br><br><br><br>
                    </div>
                    
                    ";
             }
        }


        ?>


    </div>

</body>

</html>