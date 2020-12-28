<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<!-- <html> -->

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
</head>

</head>
<body style="overflow:hidden">
<p class=" w3l-register-p">Back to <a href="stud.req.page.php" class="register"> Home page</a></p>

    <h1>Hostel Details</h1>
<div>
<?php  
    require_once 'includes/db.config.php';
    $arr = array();
    $sql = "SELECT * FROM hostel";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) :?>

    <?php

        if(!isset($_SESSION)){
            session_start();
        }

        $arr[0] = $row['Hostel_Name'];
        $arr[1] = $row['Location'];
        $arr[2] = $row['No_of_Floors'];
        $arr[3] = $row['No_of_Rooms'];
        if($row['Elevator']){
        $arr[4] = "Yes";
        }
        else{
            $arr[4] = "No";
        }
        //$arr[4] = $row['Elevator'];
        $arr[5] = $row['Room_capacity'];
        
        $query = "SELECT * FROM room WHERE Hostel_Name = '$arr[0]' AND No_of_Inmates = '0'";
        $result2 = mysqli_query($conn,$query);

        $arr[6] = mysqli_num_rows($result2);
        ?>
    <div class="lmao" style="height: 70vh;position:relative;overflow:auto;">
        <div id="lel1">
            <div class=" w3l-login-form">
                <div class="pertext">
                    <?php //echo nl2br("Hostel Name : $arr[0]\n")
                        echo "<h2> $arr[0] </h2>" ?>
                    <br><?php echo nl2br("Location : $arr[1]\n") ?>
                    <br><?php echo nl2br("Number of floors : $arr[2]\n") ?>
                    <br><?php echo nl2br("Number of rooms : $arr[3]\n") ?>
                    <br><?php echo nl2br("Elevator : $arr[4]\n") ?>
                    <br><?php echo nl2br("Room Capacity : $arr[5]\n") ?>
                    <br><?php echo nl2br("Number of vacant rooms : $arr[6]\n") ?>
                    <!-- <center>
                        <br>
                                                
                        <a href="req_accept.php?id=$perm_id" class="accept" name="accept">ACCEPT <span class="fa fa-check"></span>        
                        </a>
                        
                        <a href="req_reject.php?id=$perm_id" class="deny" name="reject" >DENY <span class="fa fa-times"></span>                            
                        
                        </a>
                    </center> -->

                </div>

            </div>

            <br>
        </div>
    </div>
<?php endwhile ?>
        </div>
</body>
</html>