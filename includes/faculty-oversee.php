<?php


if (!(isset($_SESSION['login_user_fa']))) {
    header("../login-hostel_manager.php");
}
?>


<?php
require 'db.config.php';
$arr = array();
$sql = "SELECT * FROM permissions";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $arr[$row['Permission_ID']] = $row['Student_Roll_No'];
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
    <link href="../web/css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="../web/css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- /google fonts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="script.js"> -->
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#delete" + "1002").click(function() {
                $("#lel2").remove();
                <?php
                require 'db.config.php';
                $perm_id = $arr['1002'];
                $sql = "UPDATE approve SET Status_of_Approval = 'Yes' WHERE Permission_ID = '$perm_id'";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    echo '<script>';
                    echo 'console.log(' . json_encode($result) . ')';
                    echo '</script>';
                }
                ?>

            });
            var arrjs = <?php echo json_encode($arr); ?>;

        })
    </script>
</head>

<body>

    <h1>Requests</h1>


    <div class="lmao" style="height: 70vh;position:relative;overflow:auto;">
        <div id="lel1">
            <div class=" w3l-login-form">
                <div class="pertext">
                    Permission ID
                    <br><br>B180297CS
                    <br>Dev Sony
                    <br>I suck at PC Building.
                    <br> 5 days.
                    <center>
                        <br>
                        <a href="#" class="accept">ACCEPT <span class="fa fa-check"></span></a>
                        <a href="#" class="deny">DENY <span class="fa fa-times"></span></a>
                    </center>

                </div>

            </div>
            <br><br><br><br>
        </div>



        <div id="lel2">
            <div class=" w3l-login-form">
                <div class="pertext" id="jello">
                    Permission ID
                    <br>B180297CS
                    <br>Dev Sony
                    <br>I suck at PC Building.
                    <br> 5 days.
                    <button type="button" id="delete1002">delete</button>
                </div>

            </div>
            <br><br><br><br>
        </div>

        <div class=" w3l-login-form">
            <div class="pertext">
                Permission ID
                <br>B180297CS
                <br>Dev Sony
                <br>I suck at PC Building.
                <br> 5 days.
            </div>

        </div>


        <br><br><br><br>

        <div class=" w3l-login-form">
            <div class="pertext">
                Permission ID
                <br>B180297CS
                <br>Dev Sony
                <br>I suck at PC Building.
                <br> 5 days.
            </div>

        </div>
    </div>

</body>

</html>