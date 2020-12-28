<?php
    session_start();
    echo $_GET['link'];
    $_SESSION['perm'] = $_GET['link'];
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link href="../web/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../web/css/fontawesome-all.css" rel="stylesheet" />
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<body>
    <h1>LH Permissions</h1>
    <div class=" w3l-login-form">
        <h2>OTP CHECK</h2>
        <form action="otp_check.php" method="POST">

            <div class=" w3l-form-group">
                <label>OTP Sent:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="text" class="form-control" name="OTP" placeholder="OTP" required="required" />
                </div>
            </div>
            

            <button type="submit" name="student-otp-submit">SUBMIT</button>
        </form>
    </div>


</body>

</html>



