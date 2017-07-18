<?php
include('config.php');

?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Nci Tutors</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/shortcodes.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">


    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">
	
	<!-- Animation Style -->
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/animate.css"> -->

    <!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="icon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed" sizes="57x57">
    <link href="icon/favicon.png" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
	<style>
	.sze-mng{
		

    color: #dbc4ff;
		
		
	}
	.teac-img{
		height:300px
		
	}
	
	.post .date-post span.numb {
    font-size: 10px;
}
.mng_news{
height:200px;
width:100%;	
}
	</style>
</head> 
<body class="header-sticky">
    <div class="boxed">
        <div class="windows8">
            <div class="preload-inner">
                <div class="wBall" id="wBall_1">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_2">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_3">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_4">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_5">
                    <div class="wInnerBall"></div>
                </div>
            </div>
        </div>
		<?php include('header.php'); ?>
    	<!-- Slider -->
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>
					<?php
														

									$q="select * from slider";
									
									$exe=mysql_query($q);
								
								$read=mysql_fetch_array($exe);
									
										
										
										?> 
                        <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                            <img src="admin/images/<?php echo $read['image1']; ?>" alt="slider-image" />
                         <!--  <div class="tp-caption sfl title-slide center" data-x="174" data-y="250" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">      	                      
                              
                            </div>  
                            <div class="tp-caption sfr desc-slide center" data-x="256" data-y="310" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">                       
                               
                            </div>    
                            <div class="tp-caption sfl flat-button-slider bg-orange" data-x="420" data-y="439" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"></div>
                             <div class="tp-caption sfr flat-button-slider" data-x="601" data-y="440" data-speed="1000" data-start="2500" data-easing="Power3.easeInOut"></div>-->                   
                        </li>
                        
                        <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                           <img src="admin/images/<?php echo $read['image2']; ?>" alt="slider-image" />
                         <!--   <div class="tp-caption sfl title-slide center" data-x="174" data-y="250" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">                            
                               EDUCATE HTML TEMPLATES
                            </div>  
                            <div class="tp-caption sfr desc-slide center" data-x="256" data-y="310" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">                       
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium<br>doloremque laudantium, totam rem aperiam
                            </div>    
                            <div class="tp-caption sfl flat-button-slider bg-orange" data-x="420" data-y="439" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a class="" href="#">START A COURSE</a></div>
                             <div class="tp-caption sfr flat-button-slider" data-x="601" data-y="440" data-speed="1000" data-start="2500" data-easing="Power3.easeInOut"><a class="" href="#">TAKE A TOUR</a></div> -->                   
                        </li>

                        <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                           <img src="admin/images/<?php echo $read['image3']; ?>" alt="slider-image" />
                        <!--    <div class="tp-caption sfl title-slide center" data-x="74" data-y="250" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">                            
                               EDUCATE WORDPRESS TEMPLATES
                            </div>  
                            <div class="tp-caption sfr desc-slide center" data-x="256" data-y="310" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">                       
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium<br>doloremque laudantium, totam rem aperiam
                            </div>    
                            <div class="tp-caption sfl flat-button-slider bg-orange" data-x="420" data-y="439" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a class="" href="#">START A COURSE</a></div>
                             <div class="tp-caption sfr flat-button-slider" data-x="601" data-y="440" data-speed="1000" data-start="2500" data-easing="Power3.easeInOut"><a class="" href="#">TAKE A TOUR</a></div> -->                   
                        </li>

                    </ul>
                </div>
            </div><!-- /.tp-banner-container -->

            <div class="flat-row course row-bg">
                <div class = "container">
                    <div class="row">
					<?php
														

									$q="select * from  home_des";
									
									$exe=mysql_query($q);
								
								$read=mysql_fetch_array($exe);
									
										
										
										?> 
                        <div class="col-md-7 col-sm-12 flat-pdr-100">                       
                            <h1 class="title-course"><?php echo $read['title']; ?></h1>

                            <p class='flat-lh-25'>
                                <?php echo $read['description']; ?>
                            </p> 

                            <div class="flat-spacer"></div>  

                            
                        </div>

                        <div class="col-md-5 col-sm-12"> 
						<img src="admin/images/<?php echo $read['image']; ?>" alt="Cate-01"/>
                          <!--   <ul class = "flat-course-images">
                                <li>
                                    <img src="images/index/Cate-01.jpg" alt="Cate-01"/>
                                </li>

                               <li>
                                    <img src="images/index/Cate-02.jpg" alt="Cate-02"/>
                                </li>

                                <li>
                                    <img src="images/index/Cate-03.jpg" alt="Cate-03"/>
                                </li>

                                <li>
                                    <img src="images/index/Cate-04.jpg" alt="Cate-04"/>
                                </li>

                                <li>
                                    <img src="images/index/Cate-05.jpg" alt="Cate-05"/>
                                </li>

                                <li>
                                    <img src="images/index/Cate-06.jpg" alt="Cate-06"/>
                                </li>
                            </ul> --> 
                        </div>                    

                    </div>
                </div>
            </div><!-- /.flat-row -->

            <div class = " flat-row popular-course">
                <div class="container">
                    <div class="flat-title-section">
                        <h1 class="title">Our Teachers</h1>                
                    </div>

                    <div class="flat-course-grid button-right">
					
					<?php
														

									$q="select * from teacher";
									
									$exe=mysql_query($q);
									$c=1;
									while($read=mysql_fetch_array($exe))
									{
										
										
										?> 
                        <div class="flat-course">
                            <div class="featured-post">             
                                <div class="overlay">
                                    <div class="link"></div>
                                </div>

                                <a href="courses-single.php?x=<?php echo $read["teacher_id"];?>"><img class="teac-img" src="teacher_admin/images/<?php echo $read['image']; ?>" alt="Course1"></a>
                            </div><!-- /.featured-post -->

                            <div class="course-content">
                                <h4><a href="courses-single.php?x=<?php echo $read["teacher_id"];?>"><?php echo $read['name']; ?> - <?php echo $read['department']; ?></a> </h4>

                                
                               <div class="price" style="font-size:10px;">&euro; <?php echo $read['price_per_slot']; ?></div>  

                                <p> <?php echo substr ($read["description"],0,90) ?></p>
 <center><a href="courses-single.php?x=<?php echo $read["teacher_id"];?>" class="btn btn-danger ">Details</a> </h4></center>
<br>
                                 <ul class="course-meta desc">
                                    <li>
                                        <h6><?php echo $read['joining_date']; ?></h6>
                                        <span>Joining Date</span>
                                    </li>

                                    <li>
                                        <h6><?php echo $read['Duration']; ?> Days</h6>
                                        <span>Duration</span>
                                    </li>

                                    <li>
                                        <h6><span class="course-time"><?php echo $read['class_slot']; ?></</span></h6>
                                        <span>Class slot</span>
                                    </li>
                                </ul> 
                            </div><!-- /.course-content -->
                        </div>
									<?php  $c++; }?>
                     <!--   <div class="flat-course">
                            <div class="featured-post">             
                                <div class="overlay">
                                    <div class="link"></div>
                                </div>

                                <a href="courses-single.html"><img class="teac-img" src="images/default.png" alt="Course1"></a>
                             </div>

                            <div class="course-content">
                                <h4><a href="courses-single.html">ABC - Mobile App</a> </h4>

                               

                                <p> Celebrate success right, the only way, apple. To succeed you must believe. When you believe, you will succeed.</p>
<center><a href="courses-single.html" class="btn btn-danger ">Details</a> </h4></center>
<br>
                                 <ul class="course-meta desc">
                                    <li>
                                        <h6>29/07/2016</h6>
                                        <span>Joining Date</span>
                                    </li>

                                    <li>
                                        <h6>25 Months</h6>
                                        <span>Duration</span>
                                    </li>

                                    <li>
                                        <h6><span class="course-time">2 Hours</span></h6>
                                        <span>Class slot</span>
                                    </li>
                                </ul> 
                            </div>
                        </div>

                        <div class="flat-course">
                            <div class="featured-post">             
                                <div class="overlay">
                                    <div class="link"></div>
                                </div>

                                <a href="courses-single.html"><img class="teac-img" src="images/default.png" alt="Course1"></a>
                              </div>

                            <div class="course-content">
                                <h4><a href="courses-single.html">Corel - Fashion Deisgn</a> </h4>

                                

                                <p> Celebrate success right, the only way, apple. To succeed you must believe. When you believe, you will succeed.</p>
<center><a href="courses-single.html" class="btn btn-danger ">Details</a> </h4></center>
<br>
                                 <ul class="course-meta desc">
                                    <li>
                                        <h6>29/07/2016</h6>
                                        <span>Joining Date</span>
                                    </li>

                                    <li>
                                        <h6>25 Months</h6>
                                        <span>Duration</span>
                                    </li>

                                    <li>
                                        <h6><span class="course-time">2 Hours</span></h6>
                                        <span>Class slot</span>
                                    </li>
                                </ul> 
                            </div>
                        </div>-->
                    </div><!-- /.flat-course grid -->
                </div>
            </div>

            
              <div class = " flat-row lastest-new">
                <div class="container">
                    <div class="flat-title-section">
                        <h1 class="title">Recent Event/News</h1>                
                    </div>

                    <div class="row post-lastest-new">
					<?php
														

									$q="select * from event_news";
									
									$exe=mysql_query($q);
									$c=1;
									while($read=mysql_fetch_array($exe))
									{
										
										
										?> 
                        <div class="post col-md-4 col-xs-12 col-sm-6 flat-hover-zoom">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <img class="mng_news" src="admin/images/<?php echo $read['image']; ?>" alt="image">
                                </div>
                            </div>

                            
<br>
                            <div class="content-post">
                                <h3>
                                    <?php echo $read['title']; ?>
                                </h3>

                                <div class="entry-content">
                                    <p><?php echo $read['description']; ?> </div><!-- /entry-post -->

                                <div class="entry-meta style1">
                                    <p><b>Posted in:</b><span><?php echo $read['posted_in']; ?></span></p>
                                    <p><b>Tags:</b><span><?php echo $read['tags']; ?></span></p>
                                </div>
                            </div><!-- /content-post -->
                        </div>
									<?php $c++;}   ?>
                 <!--       <div class="post col-md-4 col-xs-12 col-sm-6 flat-hover-zoom">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <img src="images/003.jpg" alt="image">
                                </div>
                            </div>

                            <div class="date-post">
                                <span class="numb">18</span>
                                <span>May</span>
                            </div>

                            <div class="content-post">
                                <h2 class="title-post">
                                    Those Other College Expenses You Aren't Thinking About
                                </h2>

                                <div class="entry-content">
                                    <p>Thousands of teenagers across the UK will have school lessons in mindfulness in an experiment designed to see if it can protect against mental illness.</p>
                                </div>

                                <div class="entry-meta style1">
                                    <p><b>Posted in:</b><span> Hobbies</span></p>
                                    <p><b>Tags:</b><span> church,</span><span> educate</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="post col-md-4 col-xs-12 col-sm-6 flat-hover-zoom">
                                <div class="featured-post">
                                    <div class="entry-image">
                                        <img src="images/004.jpg" alt="image">
                                    </div>
                                </div>

                                <div class="date-post">
                                    <span class="numb">18</span>
                                    <span>May</span>
                                </div>

                                <div class="content-post">
                                    <h2 class="title-post">
                                    Those Other College Expenses You Aren't Thinking About
                                    </h2>

                                    <div class="entry-content">
                                        <p>Thousands of teenagers across the UK will have school lessons in mindfulness in an experiment designed to see if it can protect against mental illness.</p>
                                    </div>

                                    <div class="entry-meta style1">
                                        <p><b>Posted in:</b><span> Hobbies</span></p>
                                        <p><b>Tags:</b><span> church,</span><span> educate</span></p>
                                    </div>
                                </div>
                            </div>-->
                    </div>

                </div>
            </div><!-- /.latest-new -->

            <section class="flat-row partners">
                <div class="container">
                    <ul class="partners-slider">
					<?php
														

									$q="select * from department";
									
									$exe=mysql_query($q);
									$c=1;
									while($read=mysql_fetch_array($exe))
									{
										
										
										?> 
                        <li>
						<b class="sze-mng"><?php echo $read['name']; ?></b>
                        </li>
                      <!--  <li>
						<b class="sze-mng">PHP</b>
                        
                        </li>
                        <li>
						<b class="sze-mng">.Net</b>
                        
                         </li>
                        <li>
						<b class="sze-mng">Graphic Design</b>
                        
                         </li>
                        <li>
						<b class="sze-mng">Photoshop</b>
                        
                       </li>
                        <li>
						<b class="sze-mng">SEO</b>
                        
                         </li>-->
									<?php $c++; } ?>
                    </ul>
                </div>
            </section>

       <!--     <section class="flat-row testimonial">
                <div class="container">
                    <div class="testimonial-slider">
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <blockquote>
                                    You don't need a whole ecommerce system to sell your online courses. Paypal, Stripe payment methods integration can help you sell your courses out of the box. In the case you wanna use        WooCommerce, this awesome WordPress LMS Plugin. 
                                </blockquote>
                            </div>
                            <div class="testimonial-meta">
                                <div class="testimonial-author">
                                    <strong class="author-name">Donald Simpson</strong>
                                    <div class="author-info">Founder & CEO, Arcade Systems</div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="testimonial-content">
                                <blockquote>
                                    You don't need a whole ecommerce system to sell your online courses. Paypal, Stripe payment methods integration can help you sell your courses out of the box. In the case you wanna use        WooCommerce, this awesome WordPress LMS Plugin. 
                                </blockquote>
                            </div>
                            <div class="testimonial-meta">
                                <div class="testimonial-author">
                                    <strong class="author-name">Donald Simpson</strong>
                                    <div class="author-info">Founder & CEO, Arcade Systems</div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="testimonial-content">
                                <blockquote>
                                    You don't need a whole ecommerce system to sell your online courses. Paypal, Stripe payment methods integration can help you sell your courses out of the box. In the case you wanna use        WooCommerce, this awesome WordPress LMS Plugin. 
                                </blockquote>
                            </div>
                            <div class="testimonial-meta">
                                <div class="testimonial-author">
                                    <strong class="author-name">Donald Simpson</strong>
                                    <div class="author-info">Founder & CEO, Arcade Systems</div>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
            </section>-->

            <!-- Footer -->
        </div><!-- /. boxed -->
<?php include('footer.php'); ?>

        <!-- Javascript -->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script> 
    <script type="text/javascript" src="javascript/owl.carousel.js"></script> 
    <script type="text/javascript" src="javascript/jquery-waypoints.js"></script>
    <script type="text/javascript" src="javascript/jquery-countTo.js"></script>    
    <script type="text/javascript" src="javascript/parallax.js"></script>
    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
    <script type="text/javascript" src="javascript/jquery-validate.js"></script>     
    <script type="text/javascript" src="javascript/main.js"></script>

	<!-- Revolution Slider -->
    <script type="text/javascript" src="javascript/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="javascript/slider.js"></script>
</body>
</html>