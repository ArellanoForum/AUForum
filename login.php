<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>AU FORUM</title>
</head>
<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <header>Login</header>
            </div>

            <div class="input-field">
                <form method ="post">
                <input type="text" class="input" placeholder="Username" name = "username" required />
                <i class="bx bx-user"></i>
                <input type="password" class="input" placeholder="Password" name = "password" required />
                <i class="bx bx-lock-alt"></i>
                <input type="Submit" class="Submit" value="Login" />
            </form>
            </div>

            <div class="bottom">
                <div class="left">
                    <input type="checkbox" id="check" />
                    <label for="check">Remember Me</label>
                </div>
                <div class="" right>
                    <label><a href="#">Forgot Password?</a></label>
                </div>
            </div>
        </div>
    </div>

<?php
session_start();
include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
{
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);
        
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $password)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
            }
            else
            {
                echo "<script>alert('Wrong password or username');</script>";
                header("Location: login.php");
                die;
            }   
        }
        else
        {
             echo "<script>alert('User does not exist');</script>";
            die;
        }
} 
}
else{

}
?>

<?php
if (isset($_GET['status']) && $_GET['status'] == 'success') {
    echo '<script>alert("User has been successfully signed up!");</script>';
}
else {
    exit;
}
?>
</body>
</html>
