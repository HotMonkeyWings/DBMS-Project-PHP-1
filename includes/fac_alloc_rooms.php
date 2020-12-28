<?php
require 'db.config.php';
session_start();
$arr = array();
//$roll = $_SESSION['login_user_stud'];
$sql = "SELECT * FROM room_req";
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
            $inmate1 = $row['Roll_no1'];
            $inmate2 = $row['Roll_no2'];
            $inmate3 = $row['Roll_no3'];
            $inmate4 = $row['Roll_no4'];
            $stat = $row['status_of_room'];
            
            // echo "<div class=\"lmao\" style=\"height: 70vh;position:relative;overflow:auto;\">";
            if ($stat == "Waitlisted") {
                echo "
                <div>
                    <div class=\" w3l-login-form\">
                    <form action=\"stud.del.req.php\" method=\"POST\">
                        <div class=\"pertext\">
                        <strong>Inmate1: {$inmate1}</strong>
                        <br> </br>
                        <b>Inmate2: {$inmate2} </b>
                        <br> </br>
                        <b> Inmate3: {$inmate3}  </b>
                        <br> </br>
                        <b> Inmate4: {$inmate4}  </b>
                        <br> </br>
                        <b><p style=\"text-align:center;\"class=\" w3l-register-p\"><a href=\"req_accept_room.php?link1=" . $inmate1 . "," . $inmate2 . "," . $inmate3 . "," . $inmate4 . "\" class=\"register\"> Accept Request</a></p></b>
                        <b><p style=\"text-align:center;\"class=\" w3l-register-p\"><a href=\"req_deny_room.php?link1=" . $inmate1 . "," . $inmate2 . "," . $inmate3 . "," . $inmate4 . "\" class=\"register\"> Deny Request</a></p></b>    
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