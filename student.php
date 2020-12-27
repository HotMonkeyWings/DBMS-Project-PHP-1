<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
</head>

<body>
    <?php
    include('includes/student.inc.php');
    $_SESSION['view_status'] = 0;
    ?>

    <button name="new_req">
        <a href="otp/index.php">New Request</a>
    </button>
    <button name="view_status">
        <a href="status.php">See request status</a>
    </button>

    <div>
        <a href="index.php">Logout</a>
    </div>
</body>

</html>