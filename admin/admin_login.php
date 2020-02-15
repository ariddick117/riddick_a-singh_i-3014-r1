<?php
    require_once '../load.php';
    $ip = $_SERVER['REMOTE_ADDR']; // $_UPPERCASE is a built in variable, values are assigned through your server

    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if(!empty($username) && !empty($password)){
            // Do the login here
            $message = login($username, $password, $ip);
            
            // $timelog = mysqli_query(mysqli_query("SELECT last_activity FROM tbl_user WHERE id = user_id"), 0);
            // echo "Last activity: ".relativeTime($active);
    
        }else{
            $message = 'Please fill out the required fields';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Login Page</title>
</head>
<body>
    <?php echo !empty($message)?$message: ''; ?> <!-- Shorthand if/else statement -->
    <form action="admin_login.php" method="post">
        <label>Username: </label><br>
        <input type="text" name="username" value=""><br>

        <label>Password: </label><br>
        <input type="password" name="password" value=""><br>

        <button name="submit">Submit</button>
    </form>
</body>
</html>