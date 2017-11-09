<?php 
$site_name = "Fukuyama Transporting";
$page_title = "Site Map | Fukuyama Transporting";
$page_description = "Fukuyama Transporting aims to provide safety and peace of mind to the community. Fukuyama Transporting is one of the leading logistics companies in Japan today, with 26,000 employees in approximately 400 branches across the country.";
$key_words = "Fukuyama Transporting, Fukuyama, Fukutsu, Fukuyama Transporting Tracking, Japan transportation, Japan postal service, B to B, B2B, Tokyo shipping service, logistics, shipping";
$author = "J-Cast";
?>
<?php include("includes/header.php"); ?>
<?php include("includes/topnav.php"); ?>


<!--- HEADER -->
<?php 
if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 9) {
?>
<div class="row no-gutters" >
   <div class="col-xs-12" style="position:relative;">
      <img src="images_ie/street.jpeg" width="100%" style="z-index:1; width:100%;height:350px;"/>
         <div style="z-index:999;position:absolute;top:30px; left:4%; margin:0px auto; width:70%">
            <p class="headertext">Site Map<br></p>
            <p class="headersubtext">Find your way.</p><br>
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
            <p class="headertext">Site Map<br></p>
            <p class="headersubtext">Find your way.</p><br>
         </div>
      </div>
   </div>
</div> 
<?php
}
?> 
<!-- BODY -->
<div class="container" >
   <div class="row no-gutters mt-70" style="padding-left: 40px; padding-right: 40px">
      <div class="col-sm-3">
         <p class="subtitle">Company Overview</p>
         <ul>
            <li><a href="about">About Us</a></li>
            <li><a href="ourmission">Our Mission</a></li>
            <li><a href="services">Services</a></li>
            <li><a href="contact">Contact Us</a></li>
            <ul>
               <li><a href="numbers">Domestic Network</a></li>
               <li><a href="overseas">Overseas Network</a></li>
            </ul>
         </ul>
      </div>
      <div class="col-sm-3">
         <p class="subtitle">Business Operations</p>
         <ul>
            <li><a href="transportationsystem">Transportation System</a></li>
            <li><a href="distrubutioncenters">Distribution Network</a></li>
            <li><a href="salesoffice">Sales Network</a></li>
            <li><a href="iso">ISO</a></li>
         </ul>
      </div>
      <div class="col-sm-3">
         <p class="subtitle">CSR</p>
         <ul>
            <li><a href="csractivities">Activities Overview</a></li>
            <li><a href="codeofconduct">Code of Conduct</a></li>
            <li><a href="enviromental">Enviromental Measures</a></li>
            <li><a href="csrsociety">Relating to Society</a></li>
            <li><a href="csrsafety">Safety Measures</a></li>
            <li><a href="trafficsafety">Traffic Safety Education</a></li>
         </ul>
      </div>
      <div class="col-sm-3">
         <p class="subtitle">Investor Relations</p>
         <ul>
            <li><a href="profile">Company Profile</a></li>
            <li><a href="financeinfo">Information To Shareholders</a></li>
            <li><a href="groupcompanies">Group Companies</a></li>
            <li><a href="financereview">FY 2016 Review</a></li>
            <li><a href="thirdmidterm">Third Mid-Term</a></li>
         </ul>
      </div>
   </div>
</div>

<div class="container">
   <div class="row mt-20" style="padding-left: 40px; padding-right: 40px">
      <div class="col-xs-3">
         <p class="subtitle">Others</p>
         <ul>
            <li><a href="newsmain">News</a></li>
            <li><a href="sitemap">Site Map</a></li>
            <li><a href="tracking_no_hunt">Tracking</a></li>
            <li><a href="presidentmessage">President's Message</a></li>
         </ul>
      </div>
   </div>
</div>

<?php include("includes/footer.php"); ?>