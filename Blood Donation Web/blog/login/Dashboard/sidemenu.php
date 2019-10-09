<?php
$ID=$_SESSION['id'];
include '../connection.php';
$get_User=$db->query("SELECT * FROM users WHERE U_ID='$ID'");
$get_User_details=$get_User->fetch_assoc();
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="user-wrapper">
                    <div class="profile-image">
                        <img src="images/defult.png" alt="profile image">
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name"><?php echo $get_User_details['User_Name'];?></p>


                    </div>
                </div>

            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="newpost.php">
                <span class="menu-title">New Post</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="logout.php">
                <span class="menu-title">Logout</span>
            </a>
        </li>


    </ul>
</nav>