<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>

    <form action="" , method="POST">


    <label for="user">
        Login As
        <select name="user" >
            <option value="student">Student</option>
            <option value="faculty">Faculty</option>
        </select>
    </label>
        <div>
            <label for="user_id">User ID</label>
            <input type="text" name="user_id" required>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="pwd" required>
        </div>

        <button type="submit" name="usr_login">Log In</button>
    </form>

    <?php include('includes/login.inc.php') ?>


</body>

</html>