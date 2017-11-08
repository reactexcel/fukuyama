<?php 
$site_name = "Fukuyama Transporting";
$page_title = "Home | Fukuyama Transporting";
$page_description = "Fukuyama Transporting is one of the leading logistics companies in Japan today, with 26,000 employees in approximately 400 branches across the country.";
$key_words = "Fukuyama Transporting, Fukuyama, Fukutsu, Fukuyama Transporting Tracking, Japan transportation, Japan postal service, B to B, B2B, Tokyo shipping service, logistics, shipping";
$author = "J-Cast";
?>
<?php include("includes/header.php"); ?>
<?php include("includes/topnav.php"); ?>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<?php 
if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
?>
   <div class="row">
      <div class="col-xs-12" style="position:relative; padding-left:0px; margin-bottom:-5px;">
         <img src="images/25mtruck.jpg" width="100%" height="700px" style="z-index:1; width:100%; height: 700px;"/>
         <div class="cd-hero" style="z-index:999;
    position:absolute;
    top:30px; left:34%; 
    margin:0px auto; 
    width:500px">
         <ul class="cd-hero-slider autoplay" >
         <li class="selected">
            <div class="cd-full-width">
               <h1><font color="white">FUKUYAMA TRANSPORTING</font></h1>
               <p>Boldly Riding The Wave Of Innovation.</p>
               <a href="about" class="cd-btn primary-ie7">About Us</a>
               <a href="tracking_no_hunt" class="cd-btn secondary-ie7">Tracking</a>
            </div>
         </li>
      </ul>
   </div>
      </div>
   </div>
<?php
} else {

?>
<div class="row">
   <div class="col-xs-12">
      <div class="cd-hero">
         <ul class="cd-hero-slider autoplay">
         <li class="selected">
            <div class="cd-full-width">
               <h1><font color="white">FUKUYAMA TRANSPORTING</font></h1>
               <p>Boldly Riding The Wave Of Innovation.</p>
               <a href="about" class="cd-btn">About Us</a>
               <a href="tracking_no_hunt" class="cd-btn secondary">Tracking</a>
            </div>
         </li>
         <li>
            <div class="cd-full-width">
               <h1><font color="white">Corporate Social Responsibility</font></h1>
               <p>Bringing safety and peace of mind to the community.</p>
               <a href="csractivities" class="cd-btn">Learn More</a>
            </div>
         </li>
         <li class="cd-bg-video">
            <div class="cd-full-width">
               <h1><font color="white">Business to Business<br>Shipping Service</font></h1>
               <p>Learn more about our services.</p>
               <a href="about" class="cd-btn">Learn more</a>
            </div>
            <div class="cd-bg-video-wrapper" data-video="assets/video/video">&nbsp;
            </div>
         </li>
      </ul>
 
      </div>
   </div>
</div>
<?php
}
?>
<div id="container">
   <div class="row no-gutters trackingbox">
      <div class="col-sm-12 col-md-5 col-md-offset-0">
         <img src="images/package.png"  height="20px" style="float:left; margin-top:5px; padding-right:10px; height: 20px;">
         <p class="subtitle" style="float:left; color:white">Quick Tracking &nbsp;&nbsp;</p>
         <div class="input-group">
            <input type="text" class="form-control" >
            <span class="input-group-btn" style="width: 50%">
            <button class="btn btn-danger" type="btn-danger">Locate</button>
            </span>
         </div>
      </div>
      <div style="clear:both;"></div>
   </div>
</div>
<br><br>

<?php 
if(preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8){
?>

<div class="hidden-sm hidden-xs">
   <div class="row">
      <div class="col-xs-12" style="position:relative; padding-left:0px;">
         <img src="images/drivertruckhome.jpg" height="450px" style="z-index:1; width:75%; z-index:1; float:right; height:450px;"/>
         <img src="images/shape.png" height="450px" style="z-index:50; width:70%; float:left; position:absolute; height:450px"/>
         <div class="row" style="z-index:999; position:absolute; margin:0px auto; width:80%;">
            <div class="col-sm-12 col-md-6 col-md-offset-1">
            <br><br><br>    
            <h5>LEARN MORE</h5>
            <h1>About Us</h1>
            <hr class="headerline">
            <p> Fukuyama Transporting is a publicly listed multi-module logistics company founded in 1948 and based in Fukuyama, Japan with a fleet of nearly 17,000 trucks, 25,000 employees, a rail line and 400 branches nationwide and throughout Asia.</p>
            <br>
            <div class="underlinelink" style="width:25%;"><a href="about">Learn More&nbsp;&nbsp;&nbsp;<span class="glyphicon   glyphicon glyphicon-arrow-right"></span></a></div>
         </div>
         </div>
      </div>
   </div>
</div>
<?php } else { ?>
<div class="hidden-sm hidden-xs">
   <section class="section hometop">
      <div class="hometopContent middle">
         <div class="col-sm-12 col-md-6 col-md-offset-1">
            <br><br><br>    
            <h5>LEARN MORE</h5>
            <h1>About Us</h1>
            <hr class="headerline">
            <p> Fukuyama Transporting is a publicly listed multi-module logistics company founded in 1948 and based in Fukuyama, Japan with a fleet of nearly 17,000 trucks, 25,000 employees, a rail line and 400 branches nationwide and throughout Asia.</p>
            <br>
            <div class="underlinelink"><a href="about">Learn More&nbsp;&nbsp;&nbsp;<span class="glyphicon   glyphicon glyphicon-arrow-right"></span></a></div>
         </div>
      </div>
   </section>
</div>
<?php } ?>

<div class="container">
   <div class="row">
      <div class="col-xs-10 col-xs-offset-1 hidden-md hidden-lg text-center">
         <img src="images/trucks.jpg" width="100%" style="width:100%"><br> <br><br>  
         <h5>Learn More</h5>
         <h1>About Us</h1>
         <hr class="headerline">
         <p> Fukuyama Transporting is a publicly listed multi-module logistics company founded in 1948 and based in Fukuyama, Japan with a fleet of nearly 17,000 trucks, 25,000 employees, a rail line and 400 branches nationwide and throughout Asia.</p>
         <br>
         <div class="underlinelink"><a href="about">Learn More&nbsp;&nbsp;&nbsp;<span class="glyphicon   glyphicon glyphicon-arrow-right"></span></a></div>
      </div>
   </div>
</div>
<br><br>
<div class="row graycontainer" >
   <div class="col-sm-8 col-sm-offset-2 col-xs-12 col-md-10 col-md-offset-1 mt-60 mb-90">
      <center>
         <h5>About Us</h5>
         <h1>OUR PROMISE</h1>
      </center>
      <div class="col-xs-12 col-md-4 text-center homepagecontainer">
         <img src="images/clock.png" height="75px" class="mb-40" style="height:75px;">
         <p class="subtitlelarge">Efficient Delivery</p>
         <hr class="blackline">
         <br>
         <p>Because of the size of our fleet and our consolidation points, our journeys are more direct, and our operation more efficient.</p>
         <br><br>
         <div class="newsbutton text-center" style="margin: 0 auto;"> <b><a href="distrubutioncenters">Read More</a></b> </div><br><br>
      </div>
      <div class="col-xs-12 col-md-4 text-center homepagecontainer">
         <img src="images/tech.png" height="75px" class="mb-40" style="height:75px;">
         <p class="subtitlelarge">Updated Technology</p>
         <hr class="blackline">
         <br>
         <p>We incorporate an integrated logistics management information system deploying an extensive network and the latest information technology. </p>
         <br><br>
         <div class="newsbutton text-center" style="margin: 0 auto;"> <b><a href="transportationsystem">Read More</a></b> </div><br><br>
      </div>
      <div class="col-xs-12 col-md-4 text-center homepagecontainer">
         <img src="images/leaf.png" height="75px" class="mb-40" style="height:75px;">
         <p class="subtitlelarge">Enviroment Friendly</p>
         <hr class="blackline">
         <br>
         <p>We conduct rigorous instruction and training for new and experienced drivers throughout the company on all aspects of eco-driving.</p>
         <br><br>
         <div class="newsbutton text-center" style="margin: 0 auto;"> <b><a href="enviromental">Read More</a></b> </div><br><br>
      </div>
   </div>
</div>


<?php 
if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
?>
      <div class="row" >
      <div class="col-xs-12 text-center" style="position:relative;">
         <img src="images/25mtruck.jpg" width="100%" height="550px" style="z-index:1; width:100%; margin-left:-30px; height:550px;"/>
         <div id="whitebox-ie7">
            <div id="whiteboxinside">
                  <h2>CHANGE, CHALLENGE, AND <br>CONNECT TOWARDS 2020.</h2>
                  <hr class="whiteline">
                  <br>
                  <p>Fukuyama Transporting's three year strategy  of 'change, challenge and connect towards 2020' is driving the company's  international expansion and  enhancing global communication.</p>              
            </div>
         </div>
      </div>
   </div>
   <!--<div class="hidden-xs">
      <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-3 text-center">
         <div id="whitebox">
            <div id="whiteboxinside">
                  <h2>CHANGE, CHALLENGE, AND <br>CONNECT TOWARDS 2020.</h2>
                  <hr class="whiteline">
                  <br>
                  <p>Fukuyama Transporting's three year strategy  of 'change, challenge and connect towards 2020' is driving the company's  international expansion and  enhancing global communication.</p>              
            </div>
         </div>
      </div>
   </div>-->
<?php
} else {

?>
<div class="row no-gutters streetbackground mt-0">
   <div class="hidden-xs">
      <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-3 text-center">
         <div id="whitebox">
            <div id="whiteboxinside">
                  <h2>CHANGE, CHALLENGE, AND <br>CONNECT TOWARDS 2020.</h2>
                  <hr class="whiteline">
                  <br>
                  <p>Fukuyama Transporting's three year strategy  of 'change, challenge and connect towards 2020' is driving the company's  international expansion and  enhancing global communication.</p>              
            </div>
         </div>
      </div>
   </div>
</div>
<?php
}
?>



<div class="row no-gutters mt-30">
   <div class="hidden-sm hidden-md hidden-lg">
      <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-3 text-center">
         <img src="images/news/25mtruck.jpg" class="img-responsive">
         <h2>CHANGE, CHALLENGE, AND CONNECT TOWARDS 2020.</h2>
         <br>
         <p>Fukuyama Transporting's three year strategy  of 'change, challenge and connect towards 2020' is driving the company's  international expansion and  enhancing global communication.</p>
      </div>
   </div>
</div>


<div class="container">
   <div class="row " >
      <div class="col-sm-8 col-sm-offset-2 col-xs-12 col-md-10 col-md-offset-1  mt-40 mb-70">
         <center>
            <h5>Keep Updated</h5>
            <h1>NEWS & PRESS RELEASES</h1>
            <hr class="headerline">
         </center>
         <div class="col-xs-12 col-md-4  homepagecontainer-newsRelease">
            <center><img src="images/news/25mtruckthumb.png" width="100%" class="mb-10 text-center" style="width:100%"></center>
            <p class="newsdate">10.16.2017</p>
            <p class="boldtitle">Innovative 25m Trucks to Meet Changing Demands</p>
            <p>Logistics giant Fukuyama Transporting is among the first companies to introduce new-generation 25m trucks to meet labor shortages and improve environmental performance.</p>
            <br>
            <div class="newsbutton text-center" style="margin: 0 auto;"> <b><a href="25mtruck">Read More</a></b> </div>
         </div>
         <div class="col-xs-12 col-md-4 homepagecontainer-newsRelease">
            <center> <img src="images/news/pearthumb.png" width="100%" class="mb-10" style="width:100%"></center>
            <p class="newsdate">09.19.2017</p>
            <p class="boldtitle">A Taste of Safety</p>
            <p>Logistics giant Fukuyama Transporting 'pear' up with Tokyo Metropolitan police force to promote traffic safety.</p>
            <br>
            <div class="newsbutton text-center" style="margin: 0 auto;"> <b><a href="tasteofsafety">Read More</a></b> </div>
         </div>
         <div class="col-xs-12 col-md-4  homepagecontainer-newsRelease">
            <center><img src="images/news/tempthumb.png" width="100%" class="mb-10" style="width:100%"></center>
            <p class="newsdate">09.01.2017</p>
            <p class="boldtitle">Combining Prayer and Technology For Traffic Safety</p>
            <p>Fukuyama Transporting races ahead with the latest in safety standards, while reviving traditional rituals of prayer for traffic safety.</p>
            <br>
            <div class="newsbutton text-center" style="margin: 0 auto;"> <b><a href="safetyceremony">Read More</a></b> </div>
         </div>
         <div class="col-xs-12 text-center">
            <div class="underlinelink"><a href="newsmain">Recent News&nbsp;&nbsp;&nbsp;<span class="glyphicon   glyphicon glyphicon-arrow-right"></span></a></div>
         </div>
      </div>
   </div>
</div>

<?php 
if(preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8){
?>
<div class="row newsletter-ie7 mt-70" style="height:100px">
   <div class="col-xs-12" style="position:relative; margin-top:-70px;">
      <img src="images/newsletter.png" width="100%" height="250px" style="z-index:1; width:100%; height:250px;"/>
      <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
         <style type="text/css">
            #mc_embed_signup{ clear:left; font:14px Helvetica,Arial,sans-serif; z-index:999;position:absolute;top:30%; left:10%; margin:0px auto; width:80%}
            
         </style>
         <div id="mc_embed_signup" >
            <form action="https://fukutsu.us17.list-manage.com/subscribe/post?u=062f58fe7a0e1b52c64974c2a&amp;id=c74fb95297" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
               <div id="mc_embed_signup_scroll">
                     <p class="subtitle">Subscribe To Our Mailing List:</p>
                     <?php if(preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] == 8){
                     ?>
                     <div class="row">
                        <div class="col-sm-4 col-sm-offset-3" style="width:43%;">
                           <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" style="width:70%;" required>
                           <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_062f58fe7a0e1b52c64974c2a_c74fb95297" tabindex="-1" value=""></div>
                        </div>
                        <div class="col-sm-3" style="padding-right:0px; padding-left:0px; width:0%; margin-left:-35px;">
                           <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style="margin-left:-40px"></div>
                        </div>
                     </div>
                     <?php } else { ?>
                     <div class="row">
                        <div class="col-sm-4 col-sm-offset-2" style="width:43%;">
                           <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" style="width:70%;" required>
                           <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_062f58fe7a0e1b52c64974c2a_c74fb95297" tabindex="-1" value=""></div>
                        </div>
                        <div class="col-sm-3" style="padding-right:0px; padding-left:0px; width:0%; margin-left:-35px;">
                           <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        </div>
                     </div>
                     <?php } ?>
                     
                     
               </div>
            </form>
         </div>
   </div>
</div>
<?php } else {
?>
<div class="row newsletter mt-70">
   <div class="col-xs-12">
      <div class="col-xs-10 col-xs-offset-1">
         <!-- Begin MailChimp Signup Form -->
         <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
         <style type="text/css">
            #mc_embed_signup{ clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
            /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
            We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
         </style>
         <div id="mc_embed_signup">
            <form action="https://fukutsu.us17.list-manage.com/subscribe/post?u=062f58fe7a0e1b52c64974c2a&amp;id=c74fb95297" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
               <div id="mc_embed_signup_scroll">
                     <p class="subtitle">Subscribe To Our Mailing List:</p>
                  <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_062f58fe7a0e1b52c64974c2a_c74fb95297" tabindex="-1" value=""></div>
                  <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?php } ?>




<!--[if IE 8]><!--> <script src="js/jquery-1.11.1.js"></script> <!--< ![endif]-->
<!--[if IE 7]><!--> <script src="js/jquery-1.11.1.js"></script> <!--< ![endif]-->
<!--[if IE 6]><!--> <script src="js/jquery-1.11.1.js"></script> <!--< ![endif]-->
<!--[if (gt IE 8)|!(IE)]><!--> <script src="js/jquery-2.1.1.js"></script> <!--<![endif]-->

<script src="js/main.js"></script>
<?php include("includes/footer.php"); ?> 