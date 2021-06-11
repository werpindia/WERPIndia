<?php require "includes/common.php";?>
<!DOCTYPE html>
<html>
    <head>
        <title>Working Papers | WERP India</title>
        <?php include "includes/links.php";?>
        <link rel="stylesheet" type="text/css" href="styles/header.min.css"/>
        <link rel="stylesheet" type="text/css" href="styles/footer.min.css"/>
        <style>
            ul.detailedList>li{
                padding:10px;
            }
            ul.detailedList>li>a{
                text-decoration:none;
            }
        </style>
    </head>

    <body>
        <?php include "includes/header.php";?>

        <div class="jumbotron" style="text-align:center;">
            <h2>WERP | India</h2>
            <h3 style="font-style:italic;">Working Papers</h3> 
        </div>
        <ul class="detailedList" style="margin-bottom:50px;">
            <li><a href="pdfs/working-paper-1.pdf">WERP-India Talk: A brief sum of our innovative approach to empowering Indian Women</a></li>
            <li><a href="pdfs/working-paper-2.pdf">Educational system in India and Socio-ecopsychological conditions that discourage female education: The critics and the panacea</a></li>
        </ul>

        <?php include "includes/footer.php";?>
        
        <!--External JS FIle-->
        <script src="scripts/dynamic.min.js"></script>
    </body>
</html>
