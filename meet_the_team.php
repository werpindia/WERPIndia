<!DOCTYPE html>
<?php header('location:coming_soon.php') ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="author" content="Kiran V|mail.kiranv07@gmail.com">
    <link rel="icon" href="img/logo.jpg">
  <title>Our Team | WERP-India</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/mdb.min.css" rel="stylesheet">

  <link href="css/styl.min.css" rel="stylesheet">

  <style media="screen">
    a[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."]{
      display: none;
    }
    .readmore img {
    width: 50%;
    margin-left: 25%;
    margin-top: 15px;
    margin-bottom: 25px;
}

.readmore p {
    font-weight: 400;
    line-height: 1.8;
    padding: 20px 10px;
}

    @media (max-width:600px) {
      span.fimg {
        display: none;
      }
      span.fimg2{
        display: block!important;
      }
      .fimg2 img{
        width: 80%;
margin-left: 10%;
margin-top: 25px;
      }
      .fdetails {
          width: 90%!important;
          height: 100%!important;
          display:block;
      }
      .fdetails p {
          padding-bottom: 40px;
          padding-top: 50px;
          font-weight: 400;
          font-family: sans-serif;
          color: green;
      }
      .modal-content {
    height: 500px;
    overflow: scroll;
   }
    }
    span.fimg2 {
      display: none;
    }
    .eachfounder {
        padding-bottom: 60px;
        padding-top: 60px;
        background: whitesmoke;
        padding-left: 15px;
        padding-right: 15px;
        margin-bottom: 70px;
        margin-top: 50px;
    }
.fdetails {
    width: 55%;
    height: 100%!important;
    display: inline-block;
}
span.fimg {
    position: absolute;
    margin-left: 100px;
    height: 70%;

}
.founders h2 {
    padding: 30px;
    font-weight: bold;
    text-align: center;
}
.fdetails h3 {
    font-weight: bold;
}

.fimg img{
  height: 80%;
}
.fdetails p {
    padding-bottom: 80px;
    padding-top: 50px;
    font-weight: 400;
    font-family: sans-serif;
    color: #262161;
}
.btn-success {
    background-color: #262161!important;
    color: #fff;
}
  html,
  body,
  header,
  .view {
    height: 100%;
  }

  @media (max-width: 740px) {
    html,
    body,
    header,
    .view {
      height: 1000px;
    }
  }

  @media (min-width: 800px) and (max-width: 850px) {
    html,
    body,
    header,
    .view {
      height: 650px;
    }
  }
  @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331!important;
            }
        }

    nav{
        z-index:2 !important;
    }
</style>

<!-- New additions(Shashwat) -->
<?php include "includes/links.php";?>
<link rel="stylesheet" type="text/css" href="styles/header.min.css"/>
<link rel="stylesheet" type="text/css" href="styles/articles.min.css"/>
<link rel="stylesheet" type="text/css" href="styles/footer.min.css"/>
</head>

<body>

<!-- Navbar(Old) -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark pt-5 pb-5" style="background:#262161;" > -->

<!-- Navbar brand -->
<!-- <a class="navbar-brand" href="http://www.werpindia.org/">
 <img src="https://i.ibb.co/ZNDm012/logo.jpg" alt="" class="w-50">
</a> -->

<!-- Collapse button -->
<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button> -->

<!-- Collapsible content -->
<!-- <div class="collapse navbar-collapse" id="basicExampleNav"> -->

  <!-- Links -->
  <!-- <ul class="navbar-nav mr-auto">
    <li class="nav-item ">
      <a class="nav-link" href="aboutus.html">Home
        <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Meet the Team</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="our_story.html">Our Story</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact</a>
    </li>

  </ul>
</div> -->
<!-- Collapsible content -->
<!-- </nav> -->

<!-- Navbar(Shashwat) -->
<?php include "includes/header.php";?>

<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel" >
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active" >
      <img class="d-block w-100" src="img/card.jpg"
        alt="First slide" style="height:300px;filter: brightness(0.7);">
        <div class="carousel-caption">
   </div>
    </div>
</div>



</div>

  <!--main-content-->
    <div class="founders">
      <div class="eachfounder">
         <div class="fdetails">
            <h3>Karmendra Narain</h3>
            <h5>Co-founder and Joint Managing Director (Students Communities and Projects)</h5>
            <span class="fimg2">
               <img src="img/k.jpg" alt="">
            </span>
            <p>He is the Co-founder and Joint Managing Director (Student Communities and Projects) with experience of managing teams and multi campaigns. He considers himself a ‘forever student,’ eager to both build on his academic foundations in history and political science.
He also pursues human rights and environmental science courses...</p>
            <span class="btn btn-success" data-toggle="modal" data-target="#f-read1">Read more</span>
        </div>
        <span class="fimg">
           <img src="img/k.jpg" alt="">
        </span>

      </div>
      <div class="eachfounder">
         <div class="fdetails">
            <h3>Sai</h3>
            <h5>Co-founder and Joint Managing Director (Human Resources)</h5>
            <span class="fimg2">
               <img src="img/k.jpg" alt="">
            </span>
            <p>He is the Co-Founder and Joint Managing Director (Human Resource). He is self motivated individual from middle class teacher’s family. He is born in Gudur and raised in Hyderabad. He's often displayed interests and technological proficiency. During his college life his team stood first in the Smart India Hackathon for the Oil India pvt ltd...</p>
             <span class="btn btn-success" data-toggle="modal" data-target="#f-read2">Read more</span>
        </div>
        <span class="fimg">
           <img src="img/k.jpg" alt="">
        </span>

      </div>
      <div class="eachfounder" >
         <div class="fdetails">
            <h3>Aasian Bodra</h3>
            <h5>Co-founder and CEO/Editorial-director (WomenTV)</h5>
            <span class="fimg2">
               <img src="img/k.jpg" alt="">
            </span>
            <p>She is the Co-founder and CEO/Editorial-director of WomenTV. She is a girl who has always stood up for herself and her rights. 
She always had an interest for speaking up for the right things. She completed her primary education from Oxford public school, Ranchi and completed college from Aravali Institute of Technical Studies...</p>
             <span class="btn btn-success" data-toggle="modal" data-target="#f-read3">Read more</span>
        </div>
        <span class="fimg">
           <img src="img/k.jpg" alt="">
        </span>

      </div>
    </div>
  </div>

  <!--modal read more-->
  <div class="modal fade right" id="f-read1" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalPreviewLabel">Karmendra Narain</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body readmore">

           <img src="img/founder3.jpg" alt="">
           <p>He is the Co-founder and Joint Managing Director (Student Communities and Projects) with experience of managing teams and multi campaigns. He considers himself a ‘forever student,’ eager to both build on his academic foundations in history and political science.
He also pursues human rights and environmental science courses. His hunger for knowledge and determination to turn information into action has contributed to his most recent success awarded him as an Innovator. He believes mindfulness in the workplace and teamwork is key to success. He lives out through his interests in travelling, meditation, reading self-improvement books, etc. He is currently working as a Joint Managing Director (Student communities and projects). Reach out to <a href="mailto:karmendra.werpindia@gmail.com">karmendra.werpindia@gmail.com</a> to connect!<br/>
Past positions:Policy researcher, Lead CA, state director, Joint HR(hiring interns).</p>
        </div>
        <div class="modal-footer">
          <a class="px-2 fa-lg tw-ic" href="https://twitter.com/karmendranarain"><i class="fab fa-twitter"> </i></a>
             <!-- Linkedin -->
             <a class="px-2 fa-lg li-ic" href="https://www.linkedin.com/in/karmendra-n-007503125/"><i class="fab fa-linkedin-in"> </i></a>
             <!-- Facebook -->
             <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"> </i></a>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade right" id="f-read2" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalPreviewLabel">Sai</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body readmore">

           <img src="img/founder2.jpeg" alt="">
           <p>He is the Co-Founder and Joint Managing Director (Human Resource). He is self motivated individual from middle class teacher’s family. He is born in Gudur and raised in Hyderabad. He's often displayed interests and technological proficiency. During his college life his team stood first in the Smart India Hackathon for the Oil India pvt ltd. He has also written research papers on the Smart agriculture using IOT, Smart Vending machines. He also represented as a campus ambassador for the IIM Bangalore, VIT Chennai. He completed his graduation from Bharat Institute of Engineering and Technology Hyderabad. After his Graduation he designed websites for himself. He is passionate towards field of HR; he joined the organization as a Campus Ambassador and later on promoted many times. He was the one among the top ten innovators at WERP. Currently he is working as Software Engineer at LTI.<br/>
Past positions: Lead CA, Lead HR, Joint HRM
</p>
        </div>
        <div class="modal-footer">
          <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"> </i></a>
             <!-- Linkedin -->
             <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"> </i></a>
             <!-- Facebook -->
             <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"> </i></a>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade right" id="f-read3" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalPreviewLabel">Aasian Bodra</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body readmore">

           <img src="img/founder3.jpg" alt="">
           <p>She is the Co-founder and CEO/Editorial-director of WomenTV. She is a girl who has always stood up for herself and her rights. 
She always had an interest for speaking up for the right things. She completed her primary education from Oxford public school, Ranchi and completed college from Aravali Institute of Technical Studies. Because she had interest in the field of anchoring she has lead the group of 40 people as art and cultural secretory during her college days. She joined this organisation as program anchor and later on got promoted as CEO/Editorial-director WomenTV. She was in the list of innovators in WERP.<br/>
Past position: Program anchor, Co-founder, state director - Rajasthan.
            </p>
        </div>
        <div class="modal-footer">
            <a class="px-2 fa-lg tw-ic" href="https://twitter.com/aasi1009"><i class="fab fa-twitter"> </i></a>
            <!-- Linkedin -->
            <a class="px-2 fa-lg li-ic" href="https://www.linkedin.com/in/aasian-bodra-38a08a174"><i class="fab fa-linkedin-in"> </i></a>
            <!-- Facebook -->
            <a class="px-2 fa-lg fb-ic"  href="https://www.facebook.com/aasian.bodra.96"><i class="fab fa-facebook-f"> </i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->

  <!--main-content-end-->

    <!-- Footer(Shashwat) -->
    <?php include "includes/footer.php";?>

    <!--External JS file-->
    <script src="scripts/dynamic.min.js"></script>

    <!-- script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="js/popper.min.js"></script>

    <script type="text/javascript" src="js/bootstrap.min.js"></script -->

    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
  </body>

  </html>
