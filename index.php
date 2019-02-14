<?php include "include/db.php"; 
include "include/function.php";
include "include/aleart.php";

$loader="SELECT * FROM `ui` WHERE status='activated'";
$run_loader=mysqli_query($conn,$loader);
while ($loader_fetch=mysqli_fetch_array($run_loader)) {
   $loader_name=$loader_fetch['loader_name'];
}
for ($i=0; $i <10 ; $i++) { 
   echo $i;
}
?>
<!DOCTYPE html>
 <html lang="en"> 


<head>
        <meta charset="utf-8">
        <title>Blood Buddies - Blood Donation Campaign & Multi-Concept Activism Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Reddrop Buddies - Blood Donation Campaign & Multi-Concept Activism Template">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="images/favicon.png" />

       

        <!-- The styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="css/animate.css" rel="stylesheet" type="text/css" >
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="css/styles.css" />
    


    <body> 

       <?php include "header.php"; ?> <!-- end main-header  -->

        <!--  HOME SLIDER BLOCK  -->
        
        <div class="slider-wrap">
            <div id="slider_1" class="owl-carousel" data-nav="true" data-dots="false" data-autoplay="true" data-autoplaytimeout="17000">
                <?php 
                $slider_query="SELECT * FROM `slider` ORDER BY id DESC";
                $run_slider_query=mysqli_query($conn,$slider_query);
                while ($rows=mysqli_fetch_array($run_slider_query)) {
                   
                
                 ?>
                <div class="slider_item_container" data-bg_img="images/<?php echo $rows['image'] ; ?>" data-bg_color="#555555" data-bg_opacity="0.0">
                    <div class="item">
                        <div class="slider-content">
                            <div class="container text-left">
                                <div class="row">
                                    <div class="slider-bg">                                    
                                        <div class="col-sm-12 wow zoomInUp" data-wow-duration="1s">  
                                            
                                                <h3><?php echo $rows['title'] ; ?></h3>
                                                <h2>
                                                   <?php echo $rows['discription']; ?>
                                                </h2>
                                                <a href="#become_donor" class="btn btn-theme margin-top-24">Donate Now</a>
                                                <a href="#" class="btn btn-theme btn-theme-invert margin-top-24">CALL : <?php echo
                                                 $rows['number']; ?></a>
                                            </div>                                      
                                    </div> <!-- end .col-sm-12  -->
                                </div> <!-- end .row  -->
                            </div><!-- end .container -->
                        </div> <!--  end .slider-content -->
                    </div> <!-- end .item  -->
                </div> <!-- end .slider_item_container  -->
            <?php } ?>
                <!-- <div class="slider_item_container" data-bg_img="images/home_1_slider_1.jpg" data-bg_color="#555555" data-bg_opacity="0.0" >
                    <div class="item">
                        <div class="slider-content">
                            <div class="container text-left">
                                <div class="row">
                                    <div class="slider-bg" data-animation-in="zoomInUp" data-animation-out="zoomInDown">                                    
                                        <div class="col-sm-12 wow fadeInDown" data-wow-duration="1s">
                                            
                                            <h3>Donate blood,save life !</h3>
                                                <h2>
                                                    DONATE BLOOD
                                                    <br>
                                                    AND INSPIRES OTHERS.
                                                </h2>
                                                <a href="#" class="btn btn-theme margin-top-24">Donate Now</a>
                                        </div>                                            
                                    </div> 
                                </div>
                            </div>
                        </div> 
                    </div>
                </div> -->

            </div> <!-- end .slider_1  -->
        </div> <!-- end .slider-wrap.  --> 
        <!--  FEATURED ABOUT US SECTION-->

        <section class="section-content-block">
 
            <div class="container">
                
                <div class="row">

                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        
                        <div class="about-us-container theme-custom-box-shadow">

                            <div class="row section-heading-wrapper margin-bottom-11">

                                <div class="col-lg-12 col-md-12 col-sm-12 text-left no-img-separator">
                                    <h2><strong>Who We Are?</strong></h2>
                                    <span class="heading-separator heading-separator-horizontal"></span>
                                </div> <!-- end .col-sm-10  --> 

                            </div>

                            <div class="about-details"> 

                                <p>Blood Buddies is for public donation center with blood donation members in the changing health care system.</p>


                                <ul class="custom-bullet-list">
                                    <li>Specialist blood donors and clinical supervision.</li>
                                    <li>Increasing communication with our members.</li>
                                    <li>High quality assessment, diagnosis and treatment.</li>
                                    <li>Examine critically to ensure alignment.</li>
                                    <li>The extra care of a multi-disciplinary team.</li>
                                </ul>

                            </div> <!--  end .about-details -->  

                        </div>

                    </div> <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->  


                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                         <figure class="about-img theme-custom-box-shadow">
                            <a class="venobox wow bounceIn" data-vbtype="video" data-autoplay="true" href="https://www.youtube.com/watch?v=nrJtHemSPW4"><i class="fa fa-play"></i></a>                                
                            <img src="images/about_feat_bg.jpg" alt="about" />
                        </figure> 
                    </div> 

                </div> <!--  end .row  -->
            </div>

        </section> <!--  end .section-about-us -->
         <section class="section-content-block" style="background-image: url(images/header-bg.jpg);background-size: cover;">
           <div class="container">
               <div class="row">
                   <center><h2 style="color: #EF3D32">Search A Donor</h2></center>
                    <form action="search_donor.php" method="post" style="margin-top: 20px;">
                          <div class="form-group col-md-4">
                              <div class="select-style"> 
                                <label for="" class="pull-left text-danger" style="color: #EF3D32">Select your Division</label>                                   
                                   <select class="form-control" name="Division">
                                        <option value="Chittagong">Chittagong</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Barisal">Barisal</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Rangpur">Rangpur</option>
                                        <option value="Sylhet">Sylhet</option>
                                   </select>
                            </div>
                         </div>
                          <div class="form-group col-md-4">
                             <div class="select-style"> 
                                <label for="" class="pull-left text-danger" style="color: #EF3D32">Blood Group</label>                                   
                                    <select class="form-control" name="group">
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                             </div>
                          </div><br>
                          <div class="form-group col-md-4 col-sm-4 col-xs-4">
                             <button id="" class="col-sm-12 btn btn-danger" type="submit" name="search" style="background-color: #EF3D32">Search</button>
                        </div>
                    </form>
               </div>
            </div>   
        </section>
        <section class="section-content-block">
            
        </section>
        
        
        <!-- SECTION TESTIMONIAL   -->

        <section class="section-content-block section-custom-bg" data-bg_img='images/testimony_feat_bg.jpg' data-bg_size='' data-bg_position='top center' data-bg_opacity="0">
            
            <div class="container margin-top-80">
                <div class="row section-heading-wrapper-alt">

                    <div class="col-md-12 col-sm-12 text-center no-img-separator">
                        <h4>Awesome Words From Members</h4>
                        <span class="heading-separator heading-separator-horizontal"></span>
                        <h2 class="extra-large">JOIN WITH US AND SAVE LIFE</h2>

                    </div> <!-- end .col-sm-10  --> 

                </div>
            </div>

            <div class="container theme-custom-box-shadow  section-pure-white-bg margin-top-48 margin-bottom-48 wow fadeInUp">
                
                <div class="row">

                    <div class="col-lg-6 col-md-12 col-sm-12">
                        
                        <div class="testimonial-container owl-carousel text-left" data-items  ="1">

                            <div class="col-md-12 col-sm-12">

                                <div class="testimony-layout-1">
                                    <h3 class="people-quote">Donor Opinion</h3>
                                    <p class="testimony-text">
                                        I proudly donate blood on a regular basis because it gives others something they desperately need to survive. Just knowing I can make a difference in someone else's life makes me feel great!      
                                    </p>
                                    
                                    <img src="images/user_1.jpg" alt="" />
                                    <h6>Brandon Munson</h6>
                                    <span>CTO, Fulcrum Design, USA</span>

                                </div> <!-- end .testimony-layout-1  -->

                            </div> <!--  end col-md-10  -->

                            <div class="col-md-12 col-sm-12">

                                <div class="testimony-layout-1">
                                    <h3 class="people-quote">Donor Opinion</h3>
                                    <p class="testimony-text">
                                        I have been a donor since high school. Although I have not been a donor every year, I always want to give to the human race. I love to help others! Moreover it gives a real peace in my mind.   
                                    </p>

                                    <img src="images/user_2.jpg" alt="" />
                                    <h6>Munson Brandon</h6>
                                    <span>CTO, Fulcrum Design, USA</span>

                                </div> <!-- end .testimony-layout-1  -->

                            </div> <!--  end col-md-10  -->

                            <div class="col-md-12 col-sm-12">

                                <div class="testimony-layout-1">
                                    <h3 class="people-quote">Recipient Opinion</h3>
                                    <p class="testimony-text">
                                        I wish I could tell you my donor how grateful I am for your selfless act.You gave me new life. We may be coworkers or schoolmates or just two in the same community.I'm very grateful to you.  
                                    </p>

                                    <img src="images/user_3.jpg" alt="" />
                                    <h6>Logan Munson</h6>
                                    <span>CTO, Fulcrum Design, USA</span>

                                </div> <!-- end .testimony-layout-1  -->

                            </div> <!--  end col-md-10  --> 

                        </div>  <!--  end .row  -->   
                    </div>
                
                    <div class="col-lg-6 hidden-md hidden-xs hidden-sm no-padding">
                        <figure>
                            <img src="images/testimony_feat_img.jpg" alt="" class="db"/>
                        </figure>
                    </div>
                    
                </div>

                

            </div> <!-- end .container  -->

        </section>
        
        <!--  SECTION CAMPAIGNS   -->

        <section class="section-content-block section-pure-white-bg" >

            <div class="container">
                
                
                <div class="row">
                    
                    <div class="col-sm-12 col-md-5">

                        <div class="row section-heading-wrapper">

                            <div class="col-md-12 col-sm-12 text-left no-img-separator">
                                <h2>OUR CAMPAIGNS</h2>
                                <span class="heading-separator heading-separator-horizontal"></span>
                                <h4 class="margin-top-24">
                                    
                                    <small>All over the world we have arranged total sixty thousands donation campaign 
                                        and visit thousands of other venues on various occasions. </small>
                                </h4>
                                <a class="btn btn-theme margin-top-32" href="events.php">Load All Campaigns</a>
                            </div> <!-- end .col-sm-12  -->  

                        </div> <!-- end .row  -->

                    </div>

                    <div class="col-sm-12 col-md-7">
                        
                        <div class="row wow fadeInRight">

                            <div class="event-carousel owl-carousel"  data-nav="false" data-dots="true" data-items="1">

                                <div class="col-md-6 col-sm-12">
                                    <div class="event-layout-1 theme-custom-box-shadow clearfix"> 
                                        <figure class="event-img">
                                            <a href="#">
                                                <img src="images/event_1.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="event-info"> 
                                            <a class="event-date" href="#"><i class="fa fa-calendar-o"></i> 24 February, 2018</a>
                                            <h4>
                                                <a href="#">Opening Donation Day</a>
                                            </h4>
                                            <div class="event-exceprt">Lorem ipsum dolor sit amet turadipi scing elit lobort issim consecte lodign pharetra. Lobort qssim tronsecte diagnosis sharetrx mauris gone do.</div>
                                            <div class="event-time">
                                                <a href="#"><i class="fa fa-clock-o"></i> 10.00 - 3.00</a>
                                                <a href="#"> <i class="fa fa-map-marker"></i> California, USA</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="event-layout-1 theme-custom-box-shadow clearfix"> 
                                        <figure class="event-img">
                                            <a href="#">
                                                <img src="images/event_3.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="event-info"> 
                                            <a class="event-date" href="#"><i class="fa fa-calendar-o"></i> 11 March, 2018</a>
                                            <h4>
                                                <a href="#">Free Group Checking</a>
                                            </h4>
                                            <div class="event-exceprt">Lorem ipsum dolor sit amet turadipi scing elit lobort issim consecte lodign pharetra. Lobort qssim tronsecte diagnosis sharetrx mauris gone do.</div>
                                            <div class="event-time">
                                                <a href="#"><i class="fa fa-clock-o"></i> 10.00 - 3.00</a>
                                                <a href="#"> <i class="fa fa-map-marker"></i> California, USA</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="event-layout-1 theme-custom-box-shadow clearfix"> 
                                        <figure class="event-img">
                                            <a href="#">
                                                <img src="images/event_4.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="event-info"> 
                                            <a class="event-date" href="#"><i class="fa fa-calendar-o"></i> 14 June, 2018</a>
                                            <h4>
                                                <a href="#">Blood Group Collection</a>
                                            </h4>
                                            <div class="event-exceprt">Lorem ipsum dolor sit amet turadipi scing elit lobort issim consecte lodign pharetra. Lobort qssim tronsecte diagnosis sharetrx mauris gone do.</div>
                                            <div class="event-time">
                                                <a href="#"><i class="fa fa-clock-o"></i> 10.00 - 3.00</a>
                                                <a href="#"> <i class="fa fa-map-marker"></i> California, USA</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="event-layout-1 theme-custom-box-shadow clearfix"> 
                                        <figure class="event-img">
                                            <a href="#">
                                                <img src="images/event_2.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="event-info"> 
                                            <a class="event-date" href="#"><i class="fa fa-calendar-o"></i> 31 July, 2018</a>
                                            <h4>
                                                <a href="#">Blood Donation Camp</a>
                                            </h4>
                                            <div class="event-exceprt">Lorem ipsum dolor sit amet turadipi scing elit lobort issim consecte lodign pharetra. Lobort qssim tronsecte diagnosis sharetrx mauris gone do.</div>
                                            <div class="event-time">
                                                <a href="#"><i class="fa fa-clock-o"></i> 10.00 - 3.00</a>
                                                <a href="#"> <i class="fa fa-map-marker"></i> California, USA</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>     
                        </div> 
                        
                    </div>
                    
                </div>

            </div> <!--  end .container  --> 

        </section> 
        
        
        <!--  SECTION APPOINTMENT BOX -->
        
        <section class="section-content-block section-custom-bg section-custom-bg-extra-padding" data-bg_img='images/appointment_female_bg.jpg' data-bg_color='#000000' data-bg_opacity='0.1' background-size='cover'>

            <div class="container">
                <div class="custom-empty-space" data-height="160px" data-class="col-sm-hidden"></div>
            </div>

        </section>

        <!--  SECTION APPOINTMENT   -->

        <section class="section-content-block section-secondary-bg">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-md-6"> 
                        
                        <div class="row section-heading-wrapper">

                            <div class="col-md-12 col-sm-12 text-left no-img-separator">
                                <h4>Good To Know</h4>
                                <span class="heading-separator heading-separator-horizontal"></span>
                                <h2>Helpful Information
                                </h2>

                            </div> <!-- end .col-sm-10  --> 

                        </div>

                        <div class="about-details"> 

                            <ul class="custom-bullet-list">
                                <li>Maintain a healthy iron level by eating iron rich foods.</li>
                                <li>Drink an extra 16 oz. of water prior to your donation.</li>
                                <li>Avoid alcohol consumption before your blood donation.</li>
                                <li>Remember to bring the donor card or national ID/Passport.</li>
                                <li>Finally, Try to get a good night sound sleep after donation.</li>
                            </ul>

                        </div> <!--  end .about-details -->  
               
                    </div> <!--  end col-lg-6  -->


                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-appointment-reverse" id="become_donor"> 

                        <div class="appointment-form-wrapper theme-custom-box-shadow text-center clearfix wow zoomIn">
                            <h3 class="join-heading join-heading-alt">Become a Donor</h3>
                            <form class="appoinment-form" action="donor_request.php" method="post" enctype="multipart/form-data"> 
                                <?php echo successmassage(); echo error(); ?>
                                <div class="form-group col-md-6">
                                   <label for="" class="pull-left text-danger">Your name</label>
                                    <input id="name" class="form-control" placeholder="Name" name="Name" type="text" required>
                                </div>
                                <div class="form-group col-md-6">
                                   <label for="" class="pull-left text-danger">your email</label>
                                    <input id="email" class="form-control" placeholder="Email" name="Email" type="email" required>
                                </div>
                                <div class="form-group col-md-6">
                                   <label for="" class="pull-left text-danger">your phone</label>
                                    <input id="phone" class="form-control" placeholder="Phone" name="Phone" type="text" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="select-style"> 
                                       <label for="" class="pull-left text-danger">Select your Division</label>                                   
                                        <select class="form-control" name="Division" required>
                                            <option value="Chittagong">Chittagong</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Barisal">Barisal</option>
                                            <option value="Khulna">Khulna</option>
                                            <option value="Rajshahi">Rajshahi</option>
                                            <option value="Rangpur">Rangpur</option>
                                            <option value="Sylhet">Sylhet</option>
                                           
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                   <label for="" class="pull-left text-danger">Birthday Date</label>
                                    <input id="your_date birthday" class="form-control" placeholder="Date" type="date" name="date" required>
                                </div>


                                <div class="form-group col-md-6">
                                   <label for="" class="pull-left text-danger">Your photo</label>
                                    <input id="your_time" class="form-control" placeholder="your photo" type="file" name="photo" required>
                                </div>
                                <div class="form-group col-md-6">
                                   <label for="" class="pull-left text-danger">your Nid No</label>
                                    <input id="Enter your NID No..." class="form-control" placeholder="nid" type="text" name="nid" required>
                                </div>
                                 <div class="form-group col-md-6">
                                    <div class="select-style"> 
                                       <label for="" class="pull-left text-danger">Blood Group</label>                                   
                                        <select class="form-control" name="group" required>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                         </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   <label for="" class="pull-left text-danger">Your message</label>
                                    <textarea name="message" id="textarea_message" class="form-control" rows="4" placeholder="Your Message..." required ></textarea>
                                </div>         

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button id="btn_submit" class="col-sm-12 btn btn-theme" type="submit" 
                                    name="submit">Submit</button>
                                </div>

                            </form>

                        </div> <!-- end .appointment-form-wrapper  -->

                    </div> <!--  end .col-lg-6 -->

                </div> <!--  end .row  -->
                
                <div class="row wow fadeIn">

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-heartbeat icon"></i>
                            <span class="counter">2578</span>                            
                            <h4 class="text-capitalize">Success Smile</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-stethoscope icon"></i>
                            <span class="counter">3235</span>                            
                            <h4 class="text-capitalize">Happy Donors</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-users icon"></i>
                            <span class="counter">3568</span>                             
                            <h4 class="text-capitalize">Happy Recipient</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-building icon"></i>
                            <span class="counter">1364</span>                            
                            <h4 class="text-capitalize">Total Awards</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->


                </div> <!-- end row  -->

            </div> <!--  end .container -->

        </section>  <!--  end .appointment-section  -->
        
        <!-- SECTION TEAM   -->

        <section class="section-content-block section-custom-bg" data-bg_img='images/team_feat_bg.jpg' data-bg_size='cover' data-bg_position='top center' data-bg_opacity="0">
            
            <div class="container margin-top-80">
                <div class="row section-heading-wrapper-alt">

                    <div class="col-md-12 col-sm-12 text-center no-img-separator">
                        <h4>OUR VOLUNTEERS</h4>
                        <span class="heading-separator heading-separator-horizontal"></span>
                        <h2 class="extra-large">The volunteers who give their time and talents help to fulfill our mission.</h2>

                    </div> <!-- end .col-sm-10  --> 

                </div>
            </div>

            <div class="container margin-top-48 margin-bottom-48 wow fadeInLeft">
                
                <div class="row">

                        <div class="col-md-4 col-sm-12">

                            <div class="team-layout-1 theme-custom-box-shadow theme-custom-box-animation">

                                <figure class="team-member">
                                    <a href="#" title="ALEXANDER GARY">
                                        <img src="images/team_9.jpg" alt="ALEXANDER GARY"/>
                                    </a>

                                </figure> <!-- end. team-member  -->

                                <article class="team-info">
                                    <h3>ALEXANDER GARY</h3>                                   
                                    <h4>Co-Founder</h4>
                                </article>

                                <div class="team-content">

                                    <div class="team-social-share text-center clearfix">
                                        <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                        <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                        <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                        <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                    </div> <!-- end .author-social-box  -->

                                </div>                             

                            </div> <!--  end team-layout-1 -->

                        </div> <!--  end .col-md-4 col-sm-12  -->

                        <div class="col-md-4 col-sm-12">

                            <div class="team-layout-1 theme-custom-box-shadow theme-custom-box-animation">

                                <figure class="team-member">
                                    <a href="#" title="MELISSA MUNOZ">
                                        <img src="images/team_6.jpg" alt="MELISSA MUNOZ" />
                                    </a>

                                </figure> <!-- end. team-member  -->

                                <article class="team-info">
                                    <h3>MELISSA MUNOZ</h3>                                   
                                    <h4>Founder</h4>
                                </article>

                                <div class="team-content">

                                    <div class="team-social-share text-center clearfix">
                                        <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                        <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                        <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                        <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                    </div> <!-- end .author-social-box  -->

                                </div>                             

                            </div> <!--  end team layout-1 -->

                        </div> <!--  end .col-md-4 col-sm-12  -->

                        <div class="col-md-4 col-sm-12">

                            <div class="team-layout-1 theme-custom-box-shadow theme-custom-box-animation">

                                <figure class="team-member">
                                    <a href="#" title="JOHN ABRAHAM">
                                        <img src="images/team_7.jpg" alt="JOHN ABRAHAM" />
                                    </a>                               

                                </figure> <!-- end. team-member  -->

                                <article class="team-info">
                                    <h3>JOHN ABRAHAM</h3>                                   
                                    <h4>Manager</h4>
                                </article>
                                <div class="team-content">

                                    <div class="team-social-share text-center clearfix">
                                        <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                        <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                        <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                        <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                    </div> <!-- end .author-social-box  -->

                                </div>                             

                            </div> <!--  end team-layout-1 -->

                        </div> <!--  end .col-md-4 col-sm-12  -->  


                    </div> <!-- end .row  --> 
                    
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <a class="btn btn-theme margin-top-24" href="contact.php">Become A Volunteer</a>
                        </div>
                    </div>

            </div> <!-- end .container  -->

        </section>

        <!--  SECTION GALLERY  -->

        <section class="section-content-block section-pure-white-bg">

            <div class="container">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center no-img-separator">
                        <h2>CAMPAIGN GALLERY</h2>
                        <span class="heading-separator"></span>
                        <h4>our prestigious voluntary work on campaigns by the team</h4>
                    </div> <!-- end .col-sm-10  -->                      


                </div> <!-- end .row  -->

            </div> <!--  end .container -->

            <div class="container wow fadeInUp">

                <div class="row no-padding-gallery">
                    <?php 
                    $galary_sql="SELECT * FROM `galary`";
                    $run_galary=mysqli_query($conn,$galary_sql);
                    while ($rows=mysqli_fetch_array($run_galary)) {
                       
                     ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/<?php echo $rows['Photo'] ?>" style="height: 200px;">

                            <figure class="gallery-img">

                                <img src="images/<?php echo $rows['Photo'] ?>" alt="gallery image" style="height: 200px;"/>

                            </figure> <!-- end .gallery-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->
                <?php } ?>
                 

                </div> <!-- end .row  -->

               
               

            </div><!-- end .container-fluid  -->

        </section> <!-- end .section-content-block  -->

        <!-- HIGHLIGHT CTA  -->  
        
        <section class="padding-bottom-100 padding-top-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="cta-section-1 section-secondary-bg text-center theme-custom-box-shadow">
                            <h2 class="text-capitalize">Become A Part Of Great Work Today</h2>
                            <p>
                                You can give blood at any of our blood donation venues all over the world. 
                                <br />
                                We have total sixty thousands donor centers and visit thousands of other venues on various occasions.                            
                            </p>
                            <a class="btn btn-theme margin-top-24 wow bounceIn" href="contact.php">JOIN WITH US</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- START FOOTER  -->

      <?php include "footer.php"; ?>

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
        <script src="js/custom-scripts.js"></script>
    </body>



</html>