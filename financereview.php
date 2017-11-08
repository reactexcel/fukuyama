<?php 
$site_name = "Fukuyama Transporting";
$page_title = "Financial Review | Fukuyama Transporting";
$page_description = "Learn more about Fukuyama Transporting. Fukuyama Transporting is one of the leading logistics companies in Japan today, with 26,000 employees in approximately 400 branches across the country.";
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
      <img src="images_ie/headerinvestor.png" width="100%" style="z-index:1; width:100%;height:350px;"/>
         <div style="z-index:999;position:absolute;top:30px; left:4%; margin:0px auto; width:70%">
            <p class="headertext">Financial Review<br></p>
            <p class="headersubtext">Learn more about Fukuyama Transporting.</p><br>
         </div>
      </div>
   </div>
</div> 
<?php
} else {

?>
<div class="row no-gutters" >
  <div class="col-xs-12">
    <div id="headerinvestor">
      <div id="headerboxinside">
        <p class="headertext">Financial Review<br></p>
        <p class="headersubtext">Learn more about Fukuyama Transporting.</p><br>
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
         <h5>Financial Review</h5>
         <h3>FY 2016 Consolidated Business Results</h3>
         <hr />
         <p>Using our nationwide network to emphasise small lot deliveries, we were able to expand
            the next-day delivery area, increase the services offered and raise the underlying delivery
            volume.
         </p>
         <p class="subtitle">Delivery Business</p>
         <p>In January, we completed the refurbishment of our Tokyo branch, which serves as the hub
            for the Kanto region. Following on from the redevelopment of our sales branches
            Ashizawa (Tochigi Prefecture) and Saeki (Oita Prefecture), the company has now
            strengthened its general service network. We have also accelerated our policy of
            emphasising retailers' small lot deliveries, together with price incentives aimed at new
            customers. Meanwhile, to cope with driver shortages, natural disaster and other
            unforeseen events, the company has started to diversify its trunk routes, introducing long-
            distance ferry and rail container services and full-trailer modes. The company is also
            introducing automatic sorting by vehicle type, and is vigorously embracing IT and EDI as it
            seeks to streamline its operations and raise productivity.
         </p>
         <br>
      </div>
   </div>
</div>
<div class="container" >
   <div class="row ">
      <div class="col-xs-8 col-xs-offset-2">
         <div class="col-lg-4  " >
            <p class="subtitle">Logistics Business</p>
            <p>While pursuing new business in large-scale consignment projects, we have reviewed the
               fee structure in existing facilities, raising the utiization rate and improving operational
               efficiency.
            </p>
         </div>
         <div class="col-lg-4  " >
            <p class="subtitle">International Business</p>
            <p>Our efforts to expand consolidated shipments from South East Asia and China resulted in
               a recovery of the forwarding and customs clearance business, although it is exposed to
               severe price competition. On the other hand, the expanded business area has benefitted
               cross-border trucking within ASEAN.
            </p>
         </div>
         <div class="col-lg-4  " >
            <p class="subtitle">Other segments</p>
            <p>Business was robust in produce sales and electrical construction, but the facilities rental
               segment was sharply down due to the withdraw of large-scale projects.
            </p>
         </div>
      </div>
   </div>
</div>
<div class="container" >
   <div class="row no-gutters">
      <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 mt-50" >
         <h5>Financial Review</h5>
         <h3>Prospects For The Next Financial Year</h3>
         <hr />
         <p>The slight recovery can be expected to continue in the coming financial year, although uncertainty surrounding China and the newly developed countries cannot be excluded. Sluggish volume continues to characterise the commercial trucking industry in Japan, while shortage of drivers and other industrial issues present a difficult labour environment, to which no substantial improvement can be foreseen. Combined with safety and environmental issues, business conditions are expected to continue to be harsh. Against this backdrop, in 2017 the Fukuyama Transporting group entered the final year of its mid-term plan, Challenge, Change 2020, and is actively pursuing the business objectives set out.
         </p>
      </div>
   </div>
</div>


<?php include("includes/footer.php"); ?>