<?php
    require 'db.config.php';
    $Name = $_POST['Name'];
    $Student_Roll_No = $_POST['Student_Roll_No'];
    $pwd = hash('md5',$_POST['pwd']);
    $Phone_Number = $_POST['Phone_Number'];
    $Email = $_POST['Email'];
    $Year_of_Study = $_POST['Year_of_Study'];
    $Department = $_POST['Department'];
    $Parent_Name = $_POST['Parent_Name'];
    $Parent_Contact_Number = $_POST['Parent_Contact_Number'];
    $Parent_Email = $_POST['Parent_Email'];
    $Room_ID = $_POST['Room_ID'];
    $Hostel_Name = $_POST['Hostel_Name'];
    if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
        header ("Location: ../register-student.php?error=invalidEmail");
        exit();
    } else{
        $sql1 = "INSERT INTO user (User_ID, Email, Password, ForS) VALUES ('$Student_Roll_No','$Email','$pwd','S')";
        $sql2 = "INSERT INTO parent (Parent_Name, Parent_Contact_No, Parent_Email) VALUES ('$Parent_Name','$Parent_Contact_Number','$Parent_Email')";
        
        $result1 = mysqli_query($conn, $sql1);
        if(!$result1){
            echo "Error 1 " . mysqli_error($conn);
      }
        $result2 = mysqli_query($conn, $sql2);
        if(!$result2){
            echo "Error 2 " . mysqli_error($conn);
        }

        $Parent_ID = mysqli_insert_id($conn);
        echo "ParentID" . $Parent_ID;
        $sql3 = "INSERT INTO student (Student_Roll_No, Name, Year_of_Study, Department, Hostel_Name, Room_ID, Parent_ID,Phone_Number) VALUES ('$Student_Roll_No', '$Name', '$Year_of_Study', '$Department', '$Hostel_Name', '$Room_ID', $Parent_ID,'$Phone_Number')";
    
        $result3 = mysqli_query($conn, $sql3);
        if(!$result3){
            echo "Error 3" . mysqli_error($conn);
        }
        }
        
    header('Location: ../login-student.php');
?>