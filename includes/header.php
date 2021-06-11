<!--Navbar-->
<nav class="navBar">
    <div class="navBrand">
        <a href="index.php"><img class="img-fluid" src="main_images/logo.jpg"/></a>
    </div>
    <div class="hamburger">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
    <div class="navList">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="meet_the_team.php">Our Team</a></li>
            <li><a href="coming_soon.php">Journal</a></li>
            <li><a href="blogs.php">Blogs</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="ceo.html">Be Our CEO</a></li>
            <li id="publications"><a href="#">Publications</a>
                <ul class="submenu" style="display:none;list-style-type:none;">
                    <li><a href="working_papers.php">Working Papers</a></li>
                    <li><a href="briefs.php">Briefs</a></li>
                </ul>
            </li>
        <?php if(isset($_SESSION['role'])){ ?> 
            <!-- li><a href="blogs.php">VOICE4WOMEN</a></li -->
            <li><a href="javascript:openSideNav()">ACCOUNT</a></li>
        <?php } else if(isset($_SESSION['id'])){ ?> 
            <!-- li><a href="blogs.php">VOICE4WOMEN</a></li -->
            <li><a href="javascript:openSideNav()">ACCOUNT</a></li>
        <?php } else{ ?> 
            <!-- li><a href="blogs.php">VOICE4WOMEN</a></li -->
            <li><a href="login.php">LOGIN</a></li>   
        <?php } ?>
        </ul>
    </div>
</nav>


<!--Navigation menu for mobile devices-->
<div class="navListMobile">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="meet_the_team.php">Our Team</a></li>
        <li><a href="coming_soon.php">Journal</a></li>
        <li><a href="blogs.php">Blogs</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="ceo.html">Be Our CEO</a></li>
        <li id="publications"><a href="#">Publications</a>
            <ul class="submenu" style="display:none;list-style-type:none;">
                <li><a href="working_papers.php">Working Papers</a></li>
                <li><a href="briefs.php">Briefs</a></li>
            </ul>
        </li>
    <?php if(isset($_SESSION['role'])){ ?> 
        <!-- li><a href="blogs.php">BLOGS</a></li -->
        <li><a href="javascript:openSideNav()">ACCOUNT</a></li> 
    <?php } else if(isset($_SESSION['id'])){ ?> 
        <!-- li><a href="blogs.php">BLOGS</a></li -->
        <li><a href="javascript:openSideNav()">ACCOUNT</a></li>
    <?php } else{ ?> 
        <!-- li><a href="blogs.php">BLOGS</a></li -->
        <li><a href="login.php">LOGIN</a></li>   
    <?php } ?>      
    </ul> 
</div>

<!--jQuery animation for submenu of navlist-->
<script>
    $(".navList>ul>li").click(function(){
        $(this).children("ul").toggle(100);
    });
    $(".navListMobile>ul>li").click(function(){
        $(this).children("ul").toggle(100);
    });
</script>

<div id="mySideNav" class="sideNav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeSideNav()">&times;</a>
    <?php if(isset($_SESSION['role'])){ ?>
    <a href="blogs.php?userId=<?php echo $_SESSION['id'];?>">My Blogs</a>
    <a href="new.php">Create New Blog</a>
    <a href="pending.php">Pending Verifications</a>
    <a href="settings.php">Change Password</a>
    <a href="logout.php">LOGOUT</a>
    <?php } else{ ?>
    <a href="blogs.php?userId=<?php echo $_SESSION['id'];?>">My Blogs</a>
    <a href="new.php">Create New Blog</a>
    <a href="settings.php">Change Password</a>
    <a href="logout.php">LOGOUT</a>
    <?php } ?>
</div>