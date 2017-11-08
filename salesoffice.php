<?php 
$site_name = "Fukuyama Transporting";
$page_title = "Branch and Sales Offices";
$page_description = "For today's business, developed logistics is more than a matter of moving goods around; it is a vital means of communication. Fukuyama Transporting is one of the leading logistics companies in Japan today, with 26,000 employees in approximately 400 branches across the country.";
$key_words = "Fukuyama Transporting, Fukuyama, Fukutsu, Fukuyama Transporting Tracking, Japan transportation, Japan postal service, B to B, B2B, Tokyo shipping service, logistics, shipping";
$author = "J-Cast";
?>
<?php include("includes/header.php"); ?>
<?php include("includes/topnav.php"); ?>

<!--- HEADER --> 
<?php 
if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
?>
<div class="row no-gutters" >
   <div class="col-xs-12" style="position:relative;">
      <img src="images_ie/headerfinance.jpeg" width="100%" style="z-index:1; width:100%; height:350px;"/>
         <div style="z-index:999;position:absolute;top:30px; left:4%; margin:0px auto; width:70%">
            <p class="headertext">Branch and Sales Offices<br></p>
            <p class="headersubtext">Logistics is a vital means of communication.</p><br>
         </div>
      </div>
   </div>
</div> 
<?php
} else {

?>
<div class="row no-gutters" >
   <div class="col-xs-12">
      <div id="headeroperation">
         <div id="headerboxinside">
            <p class="headertext">Branch and Sales Offices<br></p>
            <p class="headersubtext">Logistics is a vital means of communication.</p><br>
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
         <h5>Integrated Transportation System</h5>
         <h3>Branches and Sales Offices</h3>
         <hr />
         <p class="subtitlelarge">By some calculations, distribution accounts for 10% of Japan's GNP.</p>
         <br>
         <p>For today's business, developed logistics is more than a matter of moving goods around; it is a vital means
            of communication.
         </p>
         <br>
         <p>Whereas previously speed and price alone were all that mattered, today's just-in- time delivery also demands
            just the right volume. Constantly looking ahead, Fukuyama Transporting has built a national sales network
            finely tuned to the changing needs of its customers. The network comprises 400 sales offices covering the
            length and breadth of the country from Hokkaido in the north to Okinawa in the south. The company also has
            extensive international coverage with its courier and air cargo service reaching 184 countries, and is steadily
            developing its ocean freight network.
         </p>
         <br>
         <img src="images/map.png" class="img-responsive">
      </div>
   </div>
</div>


<?php include("includes/footer.php"); ?>