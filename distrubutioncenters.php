<?php 
$site_name = "Fukuyama Transporting";
$page_title = "Distribution Centers | Fukuyama Transporting";
$page_description = "Fukuyama Transporting has established distribution centers in every major city in Japan. Fukuyama Transporting is one of the leading logistics companies in Japan today, with 26,000 employees in approximately 400 branches across the country.";
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
            <p class="headertext">Distribution Centers<br></p>
            <p class="headersubtext">Reliability at every stage - door to door.</p><br>
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
            <p class="headertext">Distribution Centers<br></p>
            <p class="headersubtext">Reliability at every stage - door to door.</p><br>
         </div>
      </div>
   </div>
</div> 
<?php
}
?> 
 

<!--BODY -->
<div class="container" >
   <div class="row no-gutters">
      <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 mt-50" >
         <h5>Distribution Centers</h5>
         <h3>A logistics partner for changing times.</h3>
         <hr />
         <img src="images/distribution.jpg" width="100%">
         <br><br><br>
         <p>Today's market needs are changing dramatically. Providing customers with what they need when
            they need it requires a transformation from merely delivering packages as in the past. Fukuyama
            Transporting is unveiling a strategic logistics system with the capability to collate and process the
            information necessary to meet customer expectations immediately, throughout every nook and
            cranny of its sales area.
         </p>
         <br>
         <p class="subtitlelarge">Distrubution Center Locations</p>
         <br>
         <img src="images/map2.png" class="img-responsive" alt="Fukuyama Transporting's distrubution center locations in Japan."><br>
         <p>We have strategically located our facilities for optimum performance in distribution. We have established
            distribution centers in every major city in the country and within easy access of the country's main transport
            hubs. We deploy the latest hardware and software to handle and accurately track the cargo our customers
            entrust to us.
         </p>
         <br>
         <p>Fukuyama is also positioned for support increasing international trade with its bonded warehouses
            and customs clearance facilities. For overseas customers, Fukuyama offers everything from
            consultation and document preparation to domestic distribution to over 382 locations. The
            company's collaboration with reliable international partners such as TNT allows us to bring a full
            global network of business opportunity to our customers. Talk to us about how Fukuyama can be a
            partner in your business expansion.
         </p>
         <br>
         <p class="subtitlelarge">Some of the advantages our distribution centers offer you:
         <p><br>
         <ul>
         <li>A confirmed logistics base in an important location</li>
         <li>Help in international trade</li>
         <li>Promote effective use of your facilities and human resources</li>
         <li>Improve your competitiveness by reducing distribution costs</li>
         <li>Speed up your distribution and improve your customer service</li>
         <li>Support in EDI set-up and operation</li>
      </ul>
      </div>
   </div>
</div>

<?php include("includes/footer.php"); ?>