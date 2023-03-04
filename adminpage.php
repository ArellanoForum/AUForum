<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="adminpage.css" />
    <title>AUForum Admin Page</title>
</head>

<body>
    <div class="container">
        <div class="site-header-wrapper">
            <div class="header"> <!--Header START-->
                <div class="logo"> <!--LOGO START-->
                    <img class="Logoo" src="/IMAGES/Logoo.png" alt="Logo of AUFORUM">
                </div> <!--LOGO END-->
                <div class="bell-icon"> <!--Bell Icon START-->
                    <a href="#">
                        <i class="fa-solid fa-bell"></i>
                    </a>
                </div> <!--Bell Icon END-->
            </div> <!--Header END-->
        </div>

        <nav class="sidenav"> <!--Left NavBar START-->
            <ul class="navbar-ul">
                <li class="nav-item"><a href="HOMEPAGE.html" class="nav-link">
                        <i class="fas fa-home"></i>
                        <span class="link-text">Home</span>
                    </a></li>
                <li class="nav-item"><a href="adminpage.html" class="nav-link">
                        <i class="fas fa-user"></i>
                        <span class="link-text">Add Account</span>
                    </a></li>
                <li class="nav-item"><a href="#" class="nav-link">
                        <i class="fas fa-cog"></i>
                        <span class="link-text">Settings</span>
                    </a></li>
                <li class="nav-item"><a href="#" class="nav-link">
                        <i class="fas fa-question-circle"></i>
                        <span class="link-text">Help</span>
                    </a></li>
                <li class="nav-item"><a href="#" class="nav-link">
                        <i class="fas fa-sign-out"></i>
                        <span class="link-text">Log-out</span>
                    </a></li>

            </ul>
        </nav> <!--Left NavBar END-->
        <!-- ADMIN PAGE START -->
        <div class="wrapper-adminpage">
            <div class="admin-account-wrapper">
            </div>
        </div>
        <div class="container-adminpage">
            <div class="container-heading">
                <h1 class="heading-text">Create an Account.</h1>
            </div>
            <div class="input-container">
                <div class="input-field-container">
                    <input type="text" required="required">
                    <span class="FN-text">First Name</span>
                </div>
                <div class="input-field-container">
                    <input type="text" required="required">
                    <span class="LN-text">Last Name</span>
                </div>

                <div class="input-field-container">
                    <input type="date" required="required">
                    <span class="Bday">Birthday</span>
                </div>
                <div class="input-field-container">
                    <input type="email" required="required">
                    <span class="email-text">Email</span>
                </div>
                <div class="input-field-container">
                    <input type="text" required="required">
                    <span class="username-text">Username</span>
                </div>
                <div class="input-field-container">
                    <input type="password" required="required">
                    <span class="FN-text">Password</span>
                    <div class="submit-wrapper">
                        <div class="submit-container">
                            <input type="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>