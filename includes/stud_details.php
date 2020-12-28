<?php
require 'db.config.php';
session_start();
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

    <h1>Student Details</h1>

    

    <div class="lmao" style="height: 70vh;position:relative;overflow:auto;">

        <?php
        $roll = $_GET['link'];
        $query = "SELECT * FROM student WHERE Student_Roll_No = '$roll'";
        $result = mysqli_query($conn, $query);
        $res = mysqli_fetch_row($result);
        $query = "SELECT * FROM parent WHERE Parent_ID = '$res[6]'";
        $result = mysqli_query($conn, $query);
        $res2 = mysqli_fetch_row($result);
        echo "
                    
                    <div>
                    <h2> Student:</h2>
                        <div class=\" w3l-login-form\">
                        <form action=\"stud.del.req.php\" method=\"POST\">
                            <div class=\"pertext\">
                            <strong>Name: {$res[1]}</strong>
                            <br> </br>
                            <b>Roll Number: {$res[0]} </b>
                            <br> </br>
                            <b> Year Of Study: {$res[2]}  </b>
                            <br> </br>
                            <b> Department: {$res[3]}  </b>
                            <br> </br>
                            <b> Hostel Name: {$res[4]}  </b>
                            <br> </br>
                            <b> Room ID: {$res[5]}  </b>
                            <br> </br>
                            <b> Phone Number: {$res[7]}  </b>
                            <br> </br>
                            </div>
                            </form>
                        </div>
                        <br><br><br><br>
                    </div>
                    <h2> Parent:</h2>
                    <div class=\" w3l-login-form\">
                        <form action=\"stud.del.req.php\" method=\"POST\">
                            <div class=\"pertext\">
                            <strong>Name: {$res2[1]}</strong>
                            <br> </br>
                            <b>Parent ID: {$res2[0]} </b>
                            <br> </br>
                            <b> Parent Contact: {$res2[3]}  </b>
                            <br> </br>
                            <b> Parent Email: {$res2[4]}  </b>
                            <br> </br>
                            </div>
                            </form>
                        </div>
                        <br><br><br><br>
                    </div>
                    ";


        ?>


    </div>

</body>

</html>