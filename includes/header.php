<!--Navbar-->
<nav class="navBar">
    <div class="navBrand">
        <a href="index.php"><img class="img-fluid" src="https://i.ibb.co/ZNDm012/logo.jpg"/></a>
    </div>
    <div class="hamburger">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
    <div class="navList">
        <?php if(isset($_SESSION['role'])){ ?> 
        <ul>
            <li><a href="blogs.php">VOICE4WOMEN</a></li>
            <li><a href="javascript:openSideNav()">ACCOUNT</a></li>
            <li><a href="logout.php">LOGOUT</a></li>   
        </ul>
        <?php } else if(isset($_SESSION['id'])){ ?> 
        <ul>
            <li><a href="blogs.php">VOICE4WOMEN</a></li>
            <li><a href="javascript:openSideNav()">ACCOUNT</a></li>
            <li><a href="logout.php">LOGOUT</a></li>   
        </ul>
        <?php } else{ ?> 
        <ul>
            <li><a href="blogs.php">VOICE4WOMEN</a></li>
            <li><a href="login.php">LOGIN</a></li>   
        </ul>
        <?php } ?>
    </div>
</nav>


<!--Navigation menu for mobile devices-->
<div class="navListMobile">
    <?php if(isset($_SESSION['role'])){ ?> 
    <ul>
        <li><a href="blogs.php">BLOGS</a></li>
        <li><a href="javascript:openSideNav()">ACCOUNT</a></li>
        <li><a href="logout.php">LOGOUT</a></li>   
    </ul>
    <?php } else if(isset($_SESSION['id'])){ ?> 
    <ul>
        <li><a href="blogs.php">BLOGS</a></li>
        <li><a href="javascript:openSideNav()">ACCOUNT</a></li>
        <li><a href="logout.php">LOGOUT</a></li>   
    </ul>
    <?php } else{ ?> 
    <ul>
        <li><a href="blogs.php">BLOGS</a></li>
        <li><a href="login.php">LOGIN</a></li>   
    </ul>
    <?php } ?>       
</div>

<div id="mySideNav" class="sideNav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeSideNav()">&times;</a>
    <?php if(isset($_SESSION['role'])){ ?>
    <a href="blogs.php?userId=<?php echo $_SESSION['id'];?>">My Blogs</a>
    <a href="new.php">Create New Blog</a>
    <a href="pending.php">Pending Verifications</a>
    <a href="settings.php">Change Password</a>
    <?php } else{ ?>
    <a href="blogs.php?userId=<?php echo $_SESSION['id'];?>">My Blogs</a>
    <a href="new.php">Create New Blog</a>
    <a href="settings.php">Change Password</a>
    <?php } ?>
</div>