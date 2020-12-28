<?php
    $val1 = $_POST['deets'];
    if(!empty($val1)){
        $val1 = null;
        header("Location: view_hostels.php");
        // exit(0);
    }
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
        <h2>New Request</h2>
        <form action="includes/studs.insert.req.php" method="POST">

            <div class=" w3l-form-group">
                <label>Priority:</label>
                <div class="group">
                    <i class="fas fa-bolt"></i>
                    <input type="text" class="form-control" name="Priority" placeholder="High/Med/Low" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Vacate Date:</label>
                <div class="group">
                    <i class="fas fa-calendar-minus"></i>
                    <input type="date" class="form-control" name="Vacate_Date" min=
                        <?php
                            echo date("d-m-Y");
                        ?>
                    placeholder="DD-MM-YYYY" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Return Date:</label>
                <div class="group">
                    <i class="fas fa-calendar-plus"></i>
                    <input type="date" class="form-control" name="Return_Date" placeholder="DD-MM-YYYY" required="required" />
                </div>
            </div>
            
            <div class=" w3l-form-group">
                <label>Reason:</label>
                <div class="group">
                    <i class="fas fa-align-left"></i>
                    <input type="text" class="form-control" name="Description" placeholder="Reason for Request" required="required" />
                </div>
            </div>

            <button type="submit" name="insert-new">Submit</button>
        </form>
        </div>


</body>

</html>
