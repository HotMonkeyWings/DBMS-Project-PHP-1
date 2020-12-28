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

    <link rel="stylesheet" href="/web/css/dropdown.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".default_option").click(function() {
                $(this).parent().toggleClass("active");
            })

            $(".select_ul li").click(function() {
                var currentele = $(this).html();
                $(".default_option li").html(currentele);
                $(this).parents(".select_wrap").removeClass("active");
            })
        });
    </script>
</head>

<body>
    <h1>LH Permissions</h1>
    <div class=" w3l-login-form" style="height: 70vh;position:relative;overflow:auto;" id="scrollbar1">
        <form action="/includes/stud.reg.php" method="POST">
            <h2>Student Details</h2>

            <div class=" w3l-form-group">
                <label>Student Name:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="Name" placeholder="Name" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Student Roll No:</label>
                <div class="group">
                    <i class="fas fa-address-book"></i>
                    <input type="text" class="form-control" name="Student_Roll_No" placeholder="Roll No" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Phone Number:</label>
                <div class="group">
                    <i class="fas fa-phone"></i>
                    <input type="text" class="form-control" name="Phone_Number" placeholder="Phone Number" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Email:</label>
                <div class="group">
                    <i class="fas fa-users"></i>
                    <input type="text" class="form-control" name="Email" placeholder="example@nitc.ac.in" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Year of Study:</label>
                <div class="group">
                    <i class="fas fa-calendar"></i>
                    <input type="text" class="form-control" name="Year_of_Study" placeholder="example@nitc.ac.in" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Department:</label>
                <div class="group">
                    <i class="fas fa-university"></i>
                    <input type="text" class="form-control" name="Department" placeholder="Department" required="required" />
                </div>
            </div>

            <br><br>
            <h2>Parent Details</h2>

            <div class=" w3l-form-group">
                <label>Name:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="Parent_Name" placeholder="Parent's Name" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Contact Number:</label>
                <div class="group">
                    <i class="fas fa-phone"></i>
                    <input type="text" class="form-control" name="Parent_Contact_Number" placeholder="Parent's Number" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Email ID:</label>
                <div class="group">
                    <i class="fas fa-users"></i>
                    <input type="text" class="form-control" name="Parent_Email" placeholder="Parent's Email" required="required" />
                </div>
            </div>

            <br><br>
            <h2>Room Details</h2>

            <div class=" w3l-form-group">
                <label>Room No.:</label>
                <div class="group">
                    <i class="fas fa-users"></i>
                    <input type="text" class="form-control" name="Room_ID" placeholder="Room No." required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Hostel Name:</label>
                <div class="group">
                    <i class="fas fa-building"></i>
                    <input type="text" class="form-control" name="Hostel_Name" placeholder="Hostel Name" required="required" />
                </div>
            </div>
            <br><br>
            <button type="submit" id="register-submit">Register</button>

    </div>


</body>

</html>