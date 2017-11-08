<?php 
$site_name = "Fukuyama Transporting";
$page_title = "Safety Measures | Fukuyama Transporting";
$page_description = "Fukuyama Transporting is committed to keeping our roads safe.";
$site_url = "Put the base site url here";
$key_words = "Fukuyama Transporting, Fukuyama, Fukutsu, Fukuyama Transporting Tracking, Japan transportation, Japan postal service, B to B, B2B, Tokyo shipping service, logistics, shipping";
$author = "J-Cast";
?>
<?php include("includes/header.php"); ?>
<?php include("includes/topnav.php"); ?>

<!-- HEADER -->
<?php 
if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
?>
<div class="row no-gutters" >
   <div class="col-xs-12" style="position:relative;">
      <img src="images_ie/street.jpeg" width="100%" style="z-index:1; width:100%;height:350px;"/>
         <div style="z-index:999;position:absolute;top:30px; left:4%; margin:0px auto; width:70%;">
            <p class="headertext">Safety Measures<br></p>
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
               <p class="headertext">Safety Measures<br></p>
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
      <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 mt-50" >
         <h5>Safety Measures</h5>
         <h3>Safety at every step of the journey</h3>
         <hr />
         <p>Safety and peace of mind in what we do at every stage in the distribution process.</p>
         <br>
         <img src="images/truckcheck.jpg" width="100%">
         <br><br><br>
         <p class="subtitle">Driver safety management</p>
         <p>A rigorous program of education and certification for new drivers.
            Main contents of training:
         <ul>
            <li>Essentials of safe truck driving</li>
            <li>Special characteristics of the truck construction and daily inspection</li>
            <li>Factors in accident prevention</li>
            <li>Anticipating and avoiding danger</li>
            <li>Safe driving techniques</li>
         </ul>
      </div>
   </div>
</div>
<div class="container" >
   <div class="row no-gutters">
      <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2  mt-50" >
         <p class="subtitle">Use of driver recording devices:</p>
         <br>
         <p>The company is proceeding to install video and voice driver recording devices. They contribute greatly to everyday safety education by making drivers aware of their own habits, as well as helping to ascertain the cause in the unlikely event of an accident.</p>
         <br>
         <p class="subtitle">Blanket safety inspections</p>
         <br>
         <p>The company carries out regular blanket checks in all regions throughout the country on night drivers' safety awareness  and their vehicle conditions. The main items checked are tires (air pressure) and oil change.</p>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 col-lg-4 col-md-offset-0 mt-50" >	
         <img src="images/safety9.png"  class="columnimg img-responsive"  > 
      </div>
   </div>
</div>
<div class="container" >
   <div class="row no-gutters">
      <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 mt-50" >
         <h5>Safety Measures</h5>
         <h3>Recognised Standards In Traffic Safety</h3>
         <hr />
      </div>
   </div>
</div>
<div class="container" >
   <div class="row no-gutters">
      <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2 mt-20" >
         <p class="subtitle">ISO39001 (Road Transport Safety Management System)</p>
         <br>
         <p>The company's road traffic safety measures have satisfied all international standards.</p>
         <br>
         <p class="subtitle">G Mark (Excellence in Operational Safety) </p>
         <br>
         <p>Approved by the Japan Trucking Association for excellence in operational safety. As of March 31, 2017, the G Mark has been obtained by 342 of the Company's sales offices.</p>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 col-lg-4 col-md-offset-0 mt-20" >	
         <img src="images/safety2.jpg" class="columnimg img-responsive" > 
      </div>
   </div>
</div>

<?php include("includes/footer.php"); ?>