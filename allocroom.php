<?php

?>

<!DOCTYPE html>

<html>

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

<body>
    <h1>LH Permissions</h1>
    <div class=" w3l-login-form">
        <h2>Apply for a new room:</h2>
        <form action="includes/alloc_give.php" method="POST">

            <div class=" w3l-form-group">
                <label>Inmate 1:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="inmate1" placeholder="Inmate 1" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Inmate 2:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="inmate2" placeholder="Inmate 2" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Inmate 3:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="inmate3" placeholder="Inmate 3" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Inmate 4:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="inmate4" placeholder="Inmate 4" required="required" />
                </div>
            </div>
            <button type="submit" name="student-allocno-submit">Apply</button>
        </form>
    </div>


</body>

</html>



