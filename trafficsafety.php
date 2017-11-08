<?php 
$site_name = "Fukuyama Transporting";
$page_title = "Relating To Society | Fukuyama Transporting";
$page_description = "Fukuyama Transporting is dedicated to providing safety and peace of mind to the community through it's Corporate Social Responsibility (CSR) mission.";
$key_words = "Fukuyama Transporting, Fukuyama, Fukutsu, Fukuyama Transporting Tracking, Japan transportation, Japan postal service, B to B, B2B, Tokyo shipping service, logistics, shipping";
$author = "J-Cast";
$footer_copy = "Fukuyama Transportation. All Rights Reserved.";
?>
<?php include("includes/header.php"); ?>
<?php include("includes/topnav.php"); ?>
<!--- HEADER --> 
<?php 
if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
?>
<div class="row no-gutters" >
   <div class="col-xs-12" style="position:relative;">
      <img src="images_ie/street.jpeg" width="100%" style="z-index:1; width:100%;height:350px;"/>
         <div style="z-index:999;position:absolute;top:30px; left:4%; margin:0px auto; width:70%;">
            <p class="headertext">Traffic Safety<br></p>
            <p class="headersubtext">Fukuyama Transporting is committed to keeping our roads safe.</p><br>
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
               <p class="headertext">Traffic Safety<br></p>
               <p class="headersubtext">Fukuyama Transporting is committed to keeping our roads safe.</p><br>
         </div>
      </div>
   </div>
</div> 
<?php
}
?> 

<!-- BODY -->
<div class="container" >
   <div class="row no-gutters">
      <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 mt-60" >
         <h5>Traffic Safety</h5>
         <h3>Traffic Safety Education</h3>
         <hr />
         <img src="images/trafficsafety.jpg" class="img-responsive" alt="Fukuyama Transporting teaching school children traffic safety."><br><br>
         <p class="subtitle">Road Safety Classes</p>
         <p>We hold road safety classes at elementary schools in all parts of the country. By seeing the trucks up close and sitting in the driver's seat, the children learn about blind spots and other dangers.</p>
         <br><br>
         <p class="subtitle"><i>Jikko-nashi</i> Campaign</p>
         <p>Nashi is the Japanese word for 'pear', but another word pronounced the same way means the absence of something, so jikko-nashi means 'no accidents.' Using this play on words, the company gives away the delicious nashi-pear during its jikko-nashi traffic campaign in the autumn when the fruit is in season.</p>
         <br>
         <div class="underlinelink"><a href="tasteofsafety">Learn More&nbsp;&nbsp;&nbsp;<span class="glyphicon   glyphicon glyphicon-arrow-right"></span></a></div>
         <br><br><br><br>
         <p class="subtitle">Promoting Safe Driving Internally</p>
         <p>The company is proceeding to install video and voice driver recording devices. They contribute greatly to everyday safety education by making drivers aware of their own habits, as well as helping to ascertain the cause in the unlikely event of an accident.</p>
         <br><br>
      </div>
   </div>
</div>

<?php include("includes/footer.php"); ?>