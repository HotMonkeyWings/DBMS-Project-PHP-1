<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Status</title>
</head>

<body>
    <h2>Permission Details</h2>

    <?php include('includes/status.inc.php'); ?>

    <div>
        <p>Permission ID : <?php echo $_SESSION['permission_id'] ?></p>
        <p>Roll Number : <?php echo $_SESSION['roll_no'] ?></p>
        <p>Initiation Date : <?php echo $_SESSION['initiation_date'] ?></p>
        <p>Priority : <?php echo $_SESSION['priority'] ?></p>
        <p>Number of days requested : <?php echo $_SESSION['no_of_days'] ?></p>
        <p>Description : <?php echo $_SESSION['desc'] ?></p>
        <p>Vacate Date : <?php echo $_SESSION['vacate_date'] ?></p>
        <p>Return Date : <?php echo $_SESSION['return_date'] ?></p>
    </div>

    <h2>Status</h2>

    <div>
        <p>Status : <?php echo $_SESSION['status'] ?></p>

        <?php
        if ($approve[2] == 'Approved' or $approve[2] == 'Rejected') {
            echo nl2br("Faculty ID : $approve[1]");
        }
        ?>
    </div>

    <div>
        <label>Go back to <a href="student.php">Home page</a></label>
    </div>
</body>

</html>