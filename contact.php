<?php include "include/db.php"; 
include "include/function.php";
 include "include/aleart.php";

$loader="SELECT * FROM `ui` WHERE status='activated'";
$run_loader=mysqli_query($conn,$loader);
while ($loader_fetch=mysqli_fetch_array($run_loader)) {
   $loader_name=$loader_fetch['loader_name'];
}
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
   $phone=$_POST['phone'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];

   $sql="INSERT INTO `massage` (`date`, `name`, `email`, `phone`, `subject`, `massage`, `status`) VALUES ('$date','$name', '$email', '$phone', '$subject', '$message', 'unread')";
   $run_sql=mysqli_query($conn,$sql);
   if ($run_sql) {
      $_SESSION['successmassage']= "massage sent sucessfully";
   }

}
?>
<!DOCTYPE html>

 <html lang="en"> 

    

<head>
        <meta charset="utf-8">
        <title>Contact Us - Reddrop Buddies - Blood Donation Campaign & Multi-Concept Activism Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Reddrop Buddies - Blood Donation Campaign & Multi-Concept Activism Template">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="images/favicon.png" />

       
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="css/animate.css" rel="stylesheet" type="text/css" >
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="css/styles.css" />
</head>
    <body> 

        <div id="preloader">
            <span class="margin-bottom"><img src="loader/<?php echo $loader_name ; ?>" alt="" style="height: 80px;width: 160px;" /></span>
        </div>

        <!--  HEADER -->

        <header class="main-header clearfix" data-sticky_header="true">

            <div class="top-bar clearfix">

                <div class="container">

                    <div class="row">

                        <div class="col-md-8 col-sm-12">

                            <p>
                                <span><i class="fa fa-building-o"></i> <strong>Contact: </strong>  East Shibgonj, Sylhet, 3100</span>
                                <span>&nbsp;<i class="fa fa-phone"></i> <strong>Call Us:</strong> +880-1891-82709</span>
                            </p>

                        </div>

                        <div class="col-md-4col-sm-12">
                            <div class="top-bar-social">
                                <a href="#"><i class="fa fa-facebook rounded-box"></i></a>
                                <a href="#"><i class="fa fa-twitter rounded-box"></i></a>
                                <a href="#"><i class="fa fa-google-plus rounded-box"></i></a>
                                <a href="#"><i class="fa fa-instagram rounded-box"></i></a>
                                <a href="#"><i class="fa fa-youtube rounded-box"></i></a>
                            </div>   
                        </div> 

                    </div>

                </div> <!--  end .container -->

            </div> <!--  end .top-bar  -->

            <section class="header-wrapper navgiation-wrapper">

                <div class="navbar navbar-default">			
                    <div class="container">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo" href="index.php"><img alt="" src="images/logo.png"></a>
                        </div>

                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                
                                <li>
                                   <a href="index.php">Home</a>
                                </li>

                                
                                <li><a href="about-us.php" title="About Us">About Us</a></li>

                                <li>
                                    <a href="#">Campaign</a>
                                    <ul class="drop-down">
                                        <li><a href="events.php">All Campaigns</a></li>
                                        <li><a href="event-single.php">Single Campaign</a></li>
                                    </ul>
                                </li>

                                <li class="drop"><a href="#">Pages</a>
                                    <ul class="drop-down">
                                        
                                        <li class="drop"><a href="#">Elements</a>
                                            <ul class="drop-down level3">
                                                <li><a href="element-cta.php">CTA/PROMO BOX</a></li>
                                                <li><a href="element-counter.php">Fun Facts</a></li>
                                                <li><a href="element-logos.php">Logos/Clients</a></li>
                                                <li><a href="element-process.php">Process</a></li>
                                                <li><a href="element-highlights.php">Highlights Box</a></li>
                                                <li><a href="element-service.php">Services</a></li>
                                                <li><a href="element-subscribe.php">Subscribe</a></li>
                                                <li><a href="element-team.php">Team</a></li>
                                                <li><a href="element-feedback.php">Testimonials</a></li>
                                            </ul>
                                        </li>
                                       
                                        <li class="drop"><a href="#">Gallery</a>
                                            <ul class="drop-down level3">
                                                <li><a href="gallery-1.php">Layout 01</a></li> 
                                                <li><a href="gallery-2.php">Layout 02</a></li> 

                                            </ul>
                                        </li>
                                         <li><a href="faq.php" title="FAQ">FAQ</a></li>
                                        <li><a href="404.php" title="404 Page">404 Page</a></li> 
                                        <li class="drop"><a href="#">Level 3</a>
                                            <ul class="drop-down level3">
                                                <li><a href="#">Level 3.1</a></li>
                                                <li><a href="#">Level 3.2</a></li>
                                                <li><a href="#">Level 3.3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Blog</a>
                                    <ul class="drop-down">
                                        <li><a href="blog.php">All Posts</a></li> 
                                        <li><a href="single.php">Single Page</a></li>
                                    </ul>
                                </li>

                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </section>

        </header> <!-- end main-header  -->

        <!--  PAGE HEADING -->

        <section class="page-header" data-stellar-background-ratio="1.2">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">


                        <h3>
                            Contact Us
                        </h3>

                        <p class="page-breadcrumb">
                            <a href="#">Home</a> / Contact
                        </p>


                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section> <!-- end .page-header  -->

        <!--  MAIN CONTENT  -->

        <section class="section-content-block">

            <div class="container">

                <div class="row">

                    <div class ="col-md-12">
                        <h2 class="contact-title">Contact us</h2>                           
                    </div>               

                    <div class="col-md-3">

                        <ul class="contact-info">
                            <li>
                                <span class="icon-container"><i class="fa fa-home"></i></span>
                                <address>3100 C/A Mouchak,Sylhet,UK</address>
                            </li>
                        </ul>                        

                    </div>

                    <div class="col-md-3">

                        <ul class="contact-info">

                            <li>
                                <span class="icon-container"><i class="fa fa-phone"></i></span>
                                <address><a href="#">+093-120-525-9162</a></address>
                            </li>

                        </ul>                        

                    </div>

                    <div class="col-md-3">
                        <ul class="contact-info">
                            <li>
                                <span class="icon-container"><i class="fa fa-envelope"></i></span>
                                <address><a href="mailto:">query@yourdomain.com</a></address>
                            </li>
                        </ul>                        

                    </div>

                    <div class="col-md-3">

                        <ul class="contact-info">
                            <li>
                                <span class="icon-container"><i class="fa fa-globe"></i></span>
                                <address><a href="#">www.yourdomain.com</a></address>
                            </li>
                        </ul>                        

                    </div>                    

                </div> 

            </div>

        </section>

        <section class="section-content-block section-secondary-bg">

            <div class="container">

                <div class="row">

                    <div class="col-sm-6 wow fadeInLeft">

                        <div class="contact-form-block">

                            <h2 class="contact-title">Say hello to us</h2>
                            <?php echo successmassage() ?>
                            <form role="form" method="post" id="" >

                                <div class="form-group">
                                    <input type="text" class="form-control" id="user_name" name="name" placeholder="Name" data-msg="Please Write Your Name" />
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" id="user_email" name="email" placeholder="email" data-msg="Please Write Your Valid Email" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" name="phone" placeholder="phone" data-msg="Please Write Your Valid number" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email_subject" name="subject" placeholder="Subject" data-msg="Please Write Your Message Subject" />
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="message" id="message" placeholder="Message" data-msg="Please Write Your Message" ></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-theme" name="submit">Send Now</button>
                                </div>

                            </form>

                        </div> <!-- end .contact-form-block  -->

                    </div> <!--  end col-sm-6  -->

                    <div class="col-sm-6 wow fadeInRight">

                        <h2 class="contact-title">Our Location</h2>


                        <div class="section-google-map-block wow fadeInUp">

                            <div id="map_canvas"></div>

                        </div> <!-- end .section-content-block  -->                            

                    </div> <!--  end col-sm-6  -->                    

                </div> <!-- end row  -->

            </div> <!--  end .container -->

        </section> <!-- end .section-content-block  -->

        <!-- START FOOTER  -->

        <footer>            

            <section class="footer-widget-area footer-widget-area-bg">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="about-footer">

                                <div class="row">

                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <img src="images/logo-footer.png" alt="" />
                                    </div> <!--  end col-lg-3-->

                                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <p>
                                            We are world largest and trustful blood donation center. We have been working since 1973 with a prestigious vision to helping patient to provide blood.
                                            We are working all over the world, organizing blood donation campaign to grow awareness among the people to donate blood.
                                        </p>
                                    </div> <!--  end .col-lg-9  -->

                                </div> <!--  end .row -->

                            </div> <!--  end .about-footer  -->

                        </div> <!--  end .col-md-12  -->

                    </div> <!--  end .row  -->

                    <div class="row"> 						                      

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="footer-widget">

                                <div class="sidebar-widget-wrapper">

                                    <div class="footer-widget-header clearfix">
                                        <h3>Contact Us</h3>
                                    </div>  <!--  end .footer-widget-header --> 


                                    <div class="textwidget">                                       

                                        <i class="fa fa-envelope-o fa-contact"></i> <p><a href="#">support@donation.com</a><br/><a href="#">helpme@donation.com</a></p>

                                        <i class="fa fa-location-arrow fa-contact"></i> <p>Road-2,3/A East Shibgonj<br/>Sylhet-3100, Bangladesh</p>

                                        <i class="fa fa-phone fa-contact"></i> <p>Office:&nbsp; (+880) 0823 560 433<br/>Cell:&nbsp; (+880) 0723 161 343</p>                              

                                    </div>

                                </div> <!-- end .footer-widget-wrapper  -->

                            </div> <!--  end .footer-widget  -->

                        </div> <!--  end .col-md-4 col-sm-12 -->   

                        <div class="col-md-4 col-sm-12 col-xs-12">

                            <div class="footer-widget clearfix">

                                <div class="sidebar-widget-wrapper">

                                    <div class="footer-widget-header clearfix">
                                        <h3>Support Links</h3>
                                    </div>  <!--  end .footer-widget-header --> 


                                    <ul class="footer-useful-links">

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Thalassemia
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Cell Elofrosis
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Myelodysasia
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Blood Count
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Hemolytimia
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Ychromas Eosis 
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Hyrcoagulable
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Thrombo Xtosis
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Sicklenemiaxs
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Aplastic Anemia
                                            </a>
                                        </li>                                       

                                    </ul>

                                </div> <!--  end .footer-widget  -->        

                            </div> <!--  end .footer-widget  -->            

                        </div> <!--  end .col-md-4 col-sm-12 -->    

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="footer-widget">
                                <div class="sidebar-widget-wrapper">
                                    <div class="footer-widget-header clearfix">
                                        <h3>Subscribe Us</h3>
                                    </div>
                                    <p>Signup for regular newsletter and stay up to date with our latest news.</p>
                                    <div class="footer-subscription">
                                        <p>
                                            <input id="mc4wp_email" class="form-control" required="" placeholder="Enter Your Email" name="EMAIL" type="email">
                                        </p>
                                        <p>
                                            <input class="btn btn-default" value="Subscribe Now" type="submit">
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div> <!--  end .col-md-4 col-sm-12 -->  

                    </div> <!-- end row  -->

                </div> <!-- end .container  -->

            </section> <!--  end .footer-widget-area  -->

            <!--FOOTER CONTENT  -->

            <section class="footer-contents">

                <div class="container">

                    <div class="row clearfix">
                        
                        <div class="col-md-12 col-sm-12 text-center">
                            <p class="copyright-text"> Copyright 2018 - Blood Buddies by BlueWindLab. All Rights Reserved. </p>
                        </div>  <!-- end .col-sm-6  -->

                    </div> <!-- end .row  -->                                    

                </div> <!--  end .container  -->

            </section> <!--  end .footer-content  -->

        </footer>

        <!-- END FOOTER  -->

        <!-- Back To Top Button  -->

        <a id="backTop">Back To Top</a>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.backTop.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/waypoints-sticky.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/venobox.min.js"></script>
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyDTSNL3kqBW0Go4Fa2xOf58_uWU6vXKnT8"></script>
        <script src="js/gmaps.js"></script>
        <script src="js/custom-scripts.js"></script>

    </body>



</html>