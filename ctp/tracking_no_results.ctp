<?php 
$site_name = "Fukuyama Transporting";
$page_title = "Tracking";
$page_description = "Description Here";
$site_url = "Put the base site url here";
$key_words = "Keywords go in here";
$author = "J-Cast";
$footer_copy = "Fukuyama Transportation. All Rights Reserved."
?>
<meta charset="shift_JIS" /> 

<div id="container" >
  <div class="row no-gutters">
    <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 mt-70">
     <div id="contents">
       <h3>Cargo Status Tracking</h3>
      <table class="tablesaw" data-tablesaw-mode="stack">
      <thead>
        <tr>
          <th scope="col" class="address_title" data-tablesaw-priority="persist">Tracking No.</th>
          <th scope="col" class="address_title" data-tablesaw-sortable-default-col data-tablesaw-priority="3">Date Sent</th>
          <th scope="col" class="address_title" data-tablesaw-priority="2">Time of Enquiry</th>
          <th scope="col" class="address_title" data-tablesaw-priority="1">Status</th>
          <th scope="col" class="address_title" data-tablesaw-priority="4">Remarks</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($track_results as $k=>$v):?>
        <tr class="address_content">
          <td class="trackingbottom">
	          <?php if(trim($v['no'])!="") echo substr( $v['no'], 0, 3).'-'.substr( $v['no'], 3, 4).'-'.substr( $v['no'], 7);?>&nbsp;
          </td>
           <td class="trackingbottom">
            <?php
                if(trim($v['status']) == "OK"){
                    echo $this->TrackingNoEn->DateTimeFormat($v['detail'][$v['no']][7],$v['detail'][$v['no']][6]);
                }

            ?>
           </td>
           <td class="trackingbottom">
	        <?php
	            if(trim($v[2]) != "" && trim($v[3]) != ""){
	                 echo $this->TrackingNoEn->DateTimeFormat($v[3],$v[2]);
	            }
	        ?>
           </td>
           <td class="trackingbottom">
           <?php
              if($v[4] == "到着"){
                  echo "配達店到着";
              }else{
                  echo $v[4];
              }
           ?>
           </td>
           <td class="trackingbottom"><?php echo $trackingNoEn->format_results_output($v);?></td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
    <br>
      <p>We ask for your understanding that due to traffic conditions, actual delivery may be later than scheduled.</p>
      <div class="formbtn01">
        <div class="btn btn-default mainbtn"><a href="/situation/tracking_no">Clear All Fields</a></div>
      </div>
    <!--/[[CONTENTS]]-->
  </div>
</div>
</div>
</div>
