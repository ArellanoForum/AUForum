<?php 
session_start();
$_SESSION;
	include("connection.php");
	include("functions.php");
    
    if(isset($_SESSION['user_id']))
    {
           //wala pang codes 
    }
            
    else
    {
    // user is not logged in, redirect to login page
    header("Location: login.php");
    die();
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="grid-layout.css" />
    <link rel="stylesheet" href="Profile.css" />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="site-header-wrapper">
            <div class="header"> <!--Header START-->
                <div class="logo"> <!--LOGO START-->
                    <img class="Logoo" src="/LOGIN/IMAGES/Logoo.png" alt="Logo of AUFORUM">
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
                <li class="nav-item"><a href="index.php" class="nav-link">
                        <i class="fas fa-home"></i>
                        <span class="link-text">Home</span>
                    </a></li>
                <li class="nav-item"><a href="Profilepage.php" class="nav-link">
                        <i class="fas fa-user"></i>
                        <span class="link-text">Profile</span>
                    </a></li>
                <li class="nav-item"><a href="#" class="nav-link">
                        <i class="fas fa-cog"></i>
                        <span class="link-text">Settings</span>
                    </a></li>
                <li class="nav-item"><a href="#" class="nav-link">
                        <i class="fas fa-question-circle"></i>
                        <span class="link-text">Help</span>
                    </a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link">
                        <i class="fas fa-sign-out"></i>
                        <span class="link-text">Log-out</span>
                    </a></li>

            </ul>
        </nav> <!--Left NavBar END-->

        <main class="main-profile-wrapper">
            <div class="profile-mainpage-wrapper">

                <div class="profile-timeline-container">
                    <div class="profile-background-wrapper">
                        <div class="profile-background-container">
                            <div class="profie-page-upper">
                                <div class="profile-page-background-wrapper">
                                    <div class="profile-page-background-container">
                                        <div class="profile-background-card"></div>
                                    </div>
                                    <div class="profile-picture-wrapper">
                                        <div class="profile-picture-container">
                                            <div class="profile-picture-andname-container">
                                                <div class="profile-page-image-wrapper">
                                                    <div class="profile-page-image-container">
                                                        <img class="profile-avatar-image"
                                                            src='https://avataaars.io/?avatarStyle=Circle&topType=NoHair&accessoriesType=Blank&facialHairType=Blank&clotheType=ShirtCrewNeck&clotheColor=White&eyeType=Close&eyebrowType=DefaultNatural&mouthType=Twinkle&skinColor=Light' />
                                                    </div>
                                                </div>
                                                <div class="profile-user-details-wrapper">
                                                    <div class="profilecard-member-name">
                                                        <div class="member-name-container">
                                                            <h1 class="member-name-text">GUSION BATUMBAKAL XDXD
                                                            </h1>
                                                        </div>
                                                        <div class="line-break"></div>
                                                    </div>
                                                    <div class="profilecard-followersfollowing">
                                                        <div class="profilecard-follower">
                                                            <button class="followers-btn" type="button">
                                                                <span>0</span>
                                                                <div class="fllwrs">Followers</div>
                                                            </button>
                                                        </div>
                                                        <div class="profilecard-following">
                                                            <button class="following-btn">
                                                                <span>0</span>
                                                                <div class="fllwng">Following</div>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="edit-profile-details-wrapper">
                        <div class="edit-profile-details-container">
                            <div class="page-name-edit-container">
                                <h2 class="page-name-edit-text">My Account</h2>
                                <div class="page-name-edit-subtext">
                                    <span class="subtext-info">View and edit your personal info below.</span>
                                </div>
                            </div>
                            <div class="myaccount-actions-wrapper">
                                <div class="myaccount-actions-container">
                                    <button class="discard-button">
                                        <span class="discard-text">Discard</span>
                                    </button>
                                    <button class="update-button">
                                        <span class="update-text">Update Info</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal-line">
                        <div class="display-edit-box-wrapper">
                            <div class="display-edit-box-container">
                                <div class="display-edit-header">
                                    <h2 class="display-text">Display Info</h2>
                                    <div class="display-details-text">
                                        <span class="display-details-text">Your profile name is visible to all
                                            members of this site</span>
                                    </div>
                                </div>
                                <div class="display-name-header-wrapper">
                                    <div class="display-name-header-container">
                                        <h3 class="display-name-text">Display Name *</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
    </div>
    </main>

    </div>

</body>

</html>