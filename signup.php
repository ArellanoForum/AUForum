
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>AUFORUM</title>
</head>
<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <header>Sign up</header>
            </div>

            <div class="input-field">
                <form method = "post">
                <input type="text" class="input" placeholder="Username" name="username" required />
                <i class="bx bx-user"></i>

                <input type="password" class="input" placeholder="Password" name="password" required />
                <i class="bx bx-lock-alt"></i>
                
                <input type="Submit" class="Submit" value="Signup" />
            </form>
            </div>
                </div>
            </div>
        </div>
    </div>
<?php 
session_start();
$_SESSION;
	include("connection.php");
	include("functions.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {// check if user already exists
            $query = "select * from users where user_name = '$user_name'";
            $result = mysqli_query($con, $query);
            if(mysqli_num_rows($result) > 0)
            {
                echo "<script>alert('User exists!');</script>";
                die;
            }
            else
                {
            $user_id = random_num(7);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
            mysqli_query($con, $query);
            header("Location: login.php?status=success");
                }
        }
        else
        {
            echo "Please enter valid";
        }
    }
?>
</body>
</html>
