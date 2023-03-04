<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="grid-layout.css" />
    <link rel="stylesheet" href="maincontent.css" />
    <title> AUFORUM</title>
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
                <li class="nav-item"><a href="#" class="nav-link">
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

        <!-- MAIN CONTENT STARTS HERE -->
        <div class="page-container">
            <div class="main-content">
                <!-- MAIN CONTENT NAVBAR STARTS HERE -->
                <nav class="content-nav">
                    <div class="content-action">
                        <a class="main-nav-items" href="#">Categories</a>
                        <a class="main-nav-items" href="#">All Posts</a>
                        <a class="main-nav-items" href="#">My Posts</a>
                    </div>
                    <div class="search-wrapper">
                        <input type="text" class="search-input" placeholder="Search...">
                        <input type="button" value="search" class="search-button">
                    </div>
                </nav>
                <div class="forum-content-wrapper">
                    <div class="arellano-picture">
                        <img class="arellano-pic" src="/LOGIN/IMAGES/arellano-logo.png" alt="Arellano University">
                        <div class="picture-style"></div>
                        <div class="text-wrapper">
                            <div class="second-text-wrapper">
                                <div class="discussion-text">
                                    <h1 class="discussion-text-main">DISCUSSIONS & POSTS</h1>
                                </div>
                                <div class="discussion-text-sub">
                                    <p class="sub-text">Explore the forum below and find answers to all of your
                                        questions.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- CREATE POST BOX STARTS HERE -->
                <div class="createpost-wrapper">
                    <div class="textbox-wrapper">
                        <form class="post-form">
                            <textarea class="textbox-area" placeholder="Create a post..."></textarea>
                            <div class="post-footer">
                                <div class="post-actions">
                                    <button class="media">
                                        <i class="fa-regular fa-image" style="font-size: 20px;"></i>
                                    </button>
                                    <button class="emojis">
                                        <i class="fa-regular fa-face-grin" style="font-size: 20px;"></i>
                                    </button>
                                    <button class="location">
                                        <i class="fa-solid fa-location-dot" style="font-size: 20px;"></i>
                                    </button>
                                </div>
                                <div class="post-button-wrapper">
                                    <button class="post-button">Post!</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- CATEGORIES STARTS HERE -->
                <div class="categories-wrapper">
                    <div class="card-border-color">
                        <div class="categories-info">
                            <div class="categories-item-wrapper">
                                <div class="categories-item-color">
                                    <div class="list-item-link">
                                        <a class="category-content-link" href="#">
                                            <h2 class="Community">Community Content</h2>
                                        </a>
                                        <span class="Sub-text-community">Community blah blah ewan ko ilalagay</span>
                                    </div>
                                </div>
                                <div class="categories-action-wrapper">
                                    <div class="categories-actions">
                                        <div class="view-item">
                                            <i class="fa-solid fa-eye"></i>
                                            <span class="view-number">0</span>
                                        </div>
                                        <div class="likes-item">
                                            <i class="fa-solid fa-message"></i>
                                            <span class="likes-number">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="follow-button">
                                <button class="button-follow">
                                    <div class="follow-button-text">Follow</div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- CATEGORY 2 -->
                    <div class="card-border-color">
                        <div class="categories-info">
                            <div class="categories-item-wrapper">
                                <div class="categories-item-color">
                                    <div class="list-item-link">
                                        <a class="category-content-link" href="#">
                                            <h2 class="Community">Community Content</h2>
                                        </a>
                                        <span class="Sub-text-community">Community blah blah ewan ko ilalagay</span>
                                    </div>
                                </div>
                                <div class="categories-action-wrapper">
                                    <div class="categories-actions">
                                        <div class="view-item">
                                            <i class="fa-solid fa-eye"></i>
                                            <span class="view-number">0</span>
                                        </div>
                                        <div class="likes-item">
                                            <i class="fa-solid fa-message"></i>
                                            <span class="likes-number">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="follow-button">
                                <button class="button-follow">
                                    <div class="follow-button-text">Follow</div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- CATEGORY 3 -->
                    <div class="card-border-color" style="border-width:2px;">
                        <div class="categories-info">
                            <div class="categories-item-wrapper">
                                <div class="categories-item-color">
                                    <div class="list-item-link">
                                        <a class="category-content-link" href="#">
                                            <h2 class="Community">Community Content</h2>
                                        </a>
                                        <span class="Sub-text-community">Community blah blah ewan ko ilalagay</span>
                                    </div>
                                </div>
                                <div class="categories-action-wrapper">
                                    <div class="categories-actions">
                                        <div class="view-item">
                                            <i class="fa-solid fa-eye"></i>
                                            <span class="view-number">0</span>
                                        </div>
                                        <div class="likes-item">
                                            <i class="fa-solid fa-message"></i>
                                            <span class="likes-number">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="follow-button">
                                <button class="button-follow">
                                    <div class="follow-button-text">Follow</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- NEW POSTS STARTS HERE -->
                <div class="new-post-wrapper">
                    <div class="new-post-container">
                        <div class="new-posts-title">New Posts</div>
                        <ul class="fresh-posts">
                            <!-- POST 1 -->
                            <li class="Main-post-wrapper">
                                <div class="main-post-container">
                                    <div class="main-post-header-wrapper">
                                        <div class="post-creator"></div>
                                        <a class="profile-link" href="#">
                                            <div class="forum-post-color">
                                                <span class="avatar-image">
                                                    <div class="user-avatar">
                                                        <img class="user-avatar-image"
                                                            src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairBob&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=CollarSweater&clotheColor=Black&eyeType=Happy&eyebrowType=RaisedExcited&mouthType=Eating&skinColor=Light' />
                                                    </div>
                                                </span>
                                                <div class="post-details-wrapper">
                                                    <div class="username-container">
                                                        <span class="user-name">USERNAME BLAH BLAH</span>
                                                    </div>
                                                    <span class="post-time-wrapper">
                                                        <div class="post-time-container">
                                                            <span class="time-ago">3d</span>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="post-size"></div>
                                    <div class="post-content-wrapper">
                                        <div class="post-content-header-wrapper">
                                            <div class="post-content-header-title">
                                                <a href="#">Programming C++</a>
                                            </div>
                                        </div>

                                        <div class="category-section">
                                            <span class="category-title-section">Programming</span>
                                        </div>
                                        <div class="content-post-desc-wrapper">
                                            <div class="content-post-desc-container">
                                                <div class="content-post-text">I need help in blah blah programming.
                                                    Thank
                                                    you
                                                    so much!</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-footer-wrapper">
                                        <hr class="line-seperator">
                                        <div class="footer-actions-container">
                                            <div class="react-wrapper">
                                                <div class="like-react-container">
                                                    <button class="like-button">
                                                        <i class="fa-solid fa-thumbs-up"></i>
                                                        <span class="button-text">Like</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="footer-details">
                                                <div class="footer-details-wrapper">
                                                    <a class="comment-section" href="#">
                                                        <div class="view-icon">
                                                            <i class="fa-solid fa-eye"></i>
                                                            <span class="view-icons-number">0</span>
                                                        </div>
                                                        <div class="likes-icon">
                                                            <i class="fa-solid fa-message"></i>
                                                            <span class="likes-icon-number">0</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <!-- POST 2 -->
                            <li class="Main-post-wrapper">
                                <div class="main-post-container">
                                    <div class="main-post-header-wrapper">
                                        <div class="post-creator"></div>
                                        <a class="profile-link" href="#">
                                            <div class="forum-post-color">
                                                <span class="avatar-image">
                                                    <div class="user-avatar">
                                                        <img class="user-avatar-image"
                                                            src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairBob&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=CollarSweater&clotheColor=Black&eyeType=Happy&eyebrowType=RaisedExcited&mouthType=Eating&skinColor=Light' />
                                                    </div>
                                                </span>
                                                <div class="post-details-wrapper">
                                                    <div class="username-container">
                                                        <span class="user-name">USERNAME BLAH BLAH</span>
                                                    </div>
                                                    <span class="post-time-wrapper">
                                                        <div class="post-time-container">
                                                            <span class="time-ago">3d</span>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="post-size"></div>
                                    <div class="post-content-wrapper">
                                        <div class="post-content-header-wrapper">
                                            <div class="post-content-header-title">
                                                <a href="#">Programming C++</a>
                                            </div>
                                        </div>

                                        <div class="category-section">
                                            <span class="category-title-section">Programming</span>
                                        </div>
                                        <div class="content-post-desc-wrapper">
                                            <div class="content-post-desc-container">
                                                <div class="content-post-text">I need help in blah blah programming.
                                                    Thank
                                                    you
                                                    so much!</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-footer-wrapper">
                                        <hr class="line-seperator">
                                        <div class="footer-actions-container">
                                            <div class="react-wrapper">
                                                <div class="like-react-container">
                                                    <button class="like-button">
                                                        <i class="fa-solid fa-thumbs-up"></i>
                                                        <span class="button-text">Like</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="footer-details">
                                                <div class="footer-details-wrapper">
                                                    <a class="comment-section" href="#">
                                                        <div class="view-icon">
                                                            <i class="fa-solid fa-eye"></i>
                                                            <span class="view-icons-number">0</span>
                                                        </div>
                                                        <div class="likes-icon">
                                                            <i class="fa-solid fa-message"></i>
                                                            <span class="likes-icon-number">0</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <!-- POST 3 -->
                            <li class="Main-post-wrapper">
                                <div class="main-post-container">
                                    <div class="main-post-header-wrapper">
                                        <div class="post-creator"></div>
                                        <a class="profile-link" href="#">
                                            <div class="forum-post-color">
                                                <span class="avatar-image">
                                                    <div class="user-avatar">
                                                        <img class="user-avatar-image"
                                                            src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairBob&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=CollarSweater&clotheColor=Black&eyeType=Happy&eyebrowType=RaisedExcited&mouthType=Eating&skinColor=Light' />
                                                    </div>
                                                </span>
                                                <div class="post-details-wrapper">
                                                    <div class="username-container">
                                                        <span class="user-name">USERNAME BLAH BLAH</span>
                                                    </div>
                                                    <span class="post-time-wrapper">
                                                        <div class="post-time-container">
                                                            <span class="time-ago">3d</span>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="post-size"></div>
                                    <div class="post-content-wrapper">
                                        <div class="post-content-header-wrapper">
                                            <div class="post-content-header-title">
                                                <a href="#">Programming C++</a>
                                            </div>
                                        </div>

                                        <div class="category-section">
                                            <span class="category-title-section">Programming</span>
                                        </div>
                                        <div class="content-post-desc-wrapper">
                                            <div class="content-post-desc-container">
                                                <div class="content-post-text">I need help in blah blah programming.
                                                    Thank
                                                    you
                                                    so much!</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-footer-wrapper">
                                        <hr class="line-seperator">
                                        <div class="footer-actions-container">
                                            <div class="react-wrapper">
                                                <div class="like-react-container">
                                                    <button class="like-button">
                                                        <i class="fa-solid fa-thumbs-up"></i>
                                                        <span class="button-text">Like</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="footer-details">
                                                <div class="footer-details-wrapper">
                                                    <a class="comment-section" href="#">
                                                        <div class="view-icon">
                                                            <i class="fa-solid fa-eye"></i>
                                                            <span class="view-icons-number">0</span>
                                                        </div>
                                                        <div class="likes-icon">
                                                            <i class="fa-solid fa-message"></i>
                                                            <span class="likes-icon-number">0</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <footer></footer>
    </div>





</body>

</html>