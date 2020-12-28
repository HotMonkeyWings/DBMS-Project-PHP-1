<?php

include_once('db_connection.inc.php');

// Login 
if(isset($_POST['usr_login']))
{
    $user_id = mysqli_real_escape_string($db,$_POST['user_id']);
    $pwd = mysqli_real_escape_string($db,$_POST['pwd']);
    $pwd = hash(md5, $pwd);
    $query = "SELECT * FROM user WHERE user_id = '$user_id' AND password = '$pwd' ";
    $result = mysqli_query($db,$query);

    if(mysqli_num_rows($result))
    {
        $_SESSION['user_id'] = $user_id;
        $_SESSION['success'] = "Successfully logged in.";

        if($_POST['user'] == 'student')
        {   
            header("location: student.php");
        }
        else
        {
            header("location: faculty.php");
        }
    }
    else{
        echo nl2br("\nInvalid User ID/Password.");
    }
}

?>