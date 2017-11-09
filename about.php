<?php 
$site_name = "Fukuyama Transporting";
$page_title = "About Us | Fukuyama Transporting";
$page_description = "Fukuyama Transporting Co., Ltd. was established in Fukuyama City, Hiroshima in 1948. With 26,000 employees in approximately 400 branches across the country, it is one of the leading logistics companies in Japan today.";
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
      <img src="images_ie/headertrucks.jpeg" width="100%" style="z-index:1; width:100%; height:350px;"/>
         <div style="z-index:999;position:absolute;top:30px; left:4%; margin:0px auto; width:70%">
            <p class="headertext">About Us<br></p>
            <p class="headersubtext">Boldly Riding The Wave Of Innovation.</p><br>
         </div>
      </div>
   </div>
</div> 
<?php
} else {

?>
<div class="row no-gutters" >
   <div class="col-xs-12">
      <div id="headeroverview">
         <div id="headerboxinside">
            <p class="headertext">About Us<br></p>
            <p class="headersubtext">Boldly Riding The Wave Of Innovation.</p><br>
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
         <h5>Company Profile</h5>
         <h3>About Us</h3>
         <hr />
         <br>
         <img src="images/driver.jpg" style="width:100%"><br><br><br>
         <p class="subtitle">Boldly Riding The Wave Of Innovation.</p>
         <br>
         <p> Fukuyama Transporting Co., Ltd. was established in Fukuyama City, Hiroshima in 1948. With 26,000 employees in approximately 400 branches across the country, it is one of the leading logistics companies in Japan today. The company is also expanding rapidly internationally, with offices in China, Hong Kong, Cambodia, Vietnam, Indonesia, Malaysia and Thailand.
            <br><br>
            Functioning as a multi-model combined transport operator and total logistics operator, Fukuyama Transporting has nearly 20,000 vehicles, ranging from tractors and trailers, to large and small trucks, sea, rail and air.
            <br><br>
            Fukuyama Transporting looks ahead to the future to innovate the logistics industry in Japan. The company aims to transport enormous volumes of shipments via its exclusive railroad line Fukuyama Rail Express, using 40 exclusive 31-foot containers to the country's five major cities. Furthermore, to meet the ever-increasing demand for freight movements, Fukuyama Transporting will unveil its new 25-metre truck, the largest of its kind, in September 2017.
         </p>
      </div>
   </div>
</div>
<div class="container" >
   <div class="row no-gutters">
      <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 mt-50" >
         <h5>Company Profile</h5>
         <h3>Corporate Social Responsibility</h3>
         <hr />
         <br>
         <img src="images/orchestra.jpg" class="img-responsive" alt="Fukuyama Transporting invited the NHK Orchestra to perform as part of it's CSR mission."><br><br>
         <p class="subtitle">Fukuyama Transport feels a deep responsibility and sense of mission to provide safety and peace of mind to the community.</p>
         <br>
         <p>Fukuyama Transporting Co. Ltd pursues a program of CSR activities to achieve its mission of being a company that earns the trust of all its stakeholders for safety and peace of mind, promotion of environmental protection, the creation of a global society, and economic development.</p>
      </div>
   </div>
</div>

<?php include("includes/footer.php"); ?>