<?php 
$site_name = "Fukuyama Transporting";
$page_title = "News | Fukuyama Transporting";
$page_description = "Fukuyama Transporting is one of the leading logistics companies in Japan today, with 26,000 employees in approximately 400 branches across the country.";
$key_words = "Fukuyama Transporting, Fukuyama, Fukutsu, Fukuyama Transporting Tracking, Japan transportation, Japan postal service, B to B, B2B, Tokyo shipping service, logistics, shipping";
$author = "J-Cast";
?>
<?php include("includes/header.php"); ?>
<?php include("includes/topnav.php"); ?>


<!-- HEADER --> 
<?php 
if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 9) {
?>
<div class="row no-gutters" >
   <div class="col-xs-12" style="position:relative;">
      <img src="images_ie/street.jpeg" width="100%" style="z-index:1; width:100%;height:350px;"/>
         <div style="z-index:999;position:absolute;top:30px; left:4%; margin:0px auto; width:70%">
            <p class="headertext">News and Press Releases<br></p>
            <p class="headersubtext">Providing safety and peace of mind to the community.</p><br>
         </div>
      </div>
   </div>
</div> 
<?php
} else {

?>
<div class="row no-gutters" >
  <div class="col-xs-12">
    <div id="headercsr">
      <div id="headerboxinside">
        <p class="headertext">News and Press Releases<br></p>
        <p class="headersubtext">Providing safety and peace of mind to the community.</p><br>
      </div>
    </div>
  </div>
</div> 
<?php
}
?> 

<!--BODY-->
<div class="container">
   <div class="row " >
      <div class="col-sm-8 col-sm-offset-2 col-xs-12 col-md-10 col-md-offset-1  mt-60 mb-70">
         <center>
            <h5>Keep Updated</h5>
            <h1>NEWS & PRESS RELEASES</h1>
            <hr class="headerline">
         </center>
         <div class="col-xs-12 col-md-4  homepagecontainer">
            <center><img src="images/news/25mtruckthumb.png" width="100%" class="mb-10 text-center" alt="Fukuyama Transporting's 25m truck."></center>
            <p class="newsdate">10.16.2017</p>
            <p class="boldtitle">Innovative 25m Trucks to Meet Changing Demands</p>
            <p>Logistics giant Fukuyama Transporting is among the first companies to introduce new-generation 25m trucks to meet labor shortages and improve environmental performance.</p>
            <br>
            <div class="newsbutton text-center" style="margin: 0 auto;"> <b><a href="25mtruck">Read More</a></b> </div>
         </div>
         <div class="col-xs-12 col-md-4 homepagecontainer">
            <center> <img src="images/news/pearthumb.png" width="100%"  class="mb-10" alt="Fukuyama Transporting promotes traffic safety."></center>
            <p class="newsdate">09.19.2017</p>
            <p class="boldtitle">A Taste of Safety</p>
            <p>Logistics giant Fukuyama Transporting 'pears' up with Tokyo Metropolitan police force to promote traffic safety.</p>
            <br>
            <div class="newsbutton text-center" style="margin: 0 auto;"> <b><a href="tasteofsafety">Read More</a></b> </div>
         </div>
         <div class="col-xs-12 col-md-4  homepagecontainer">
            <center><img src="images/news/tempthumb.png" width="100%"  class="mb-10"></center>
            <p class="newsdate">09.01.2017</p>
            <p class="boldtitle">Combining Prayer and Technology For Traffic Safety</p>
            <p>Fukuyama Transporting races ahead with the latest in safety standards, while reviving traditional rituals of prayer for traffic safety.</p>
            <br>
            <div class="newsbutton text-center" style="margin: 0 auto;"> <b><a href="safetyceremony">Read More</a></b> </div>
         </div>
      </div>
   </div>
</div>
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

<?php include("includes/footer.php"); ?>