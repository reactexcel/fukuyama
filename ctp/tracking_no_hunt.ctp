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

<div class="container">
 <div class="row no-gutters">
  <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 mt-70">
   <div id="contents">
    <!--[[CONTENTS]]-->

    <h3>Cargo Status Tracking</h3>
    <?php echo $form->create('TrackingNo', array('url'=>'/tracking_no_hunt', 'id' => 'tracking_no_huntForm' , 'name' => 'tracking_no_huntForm')); ?>

      <p class="bold">Tracking by query number.</p>
      <?php if( $form->isFieldError('TrackingNo.hasErrFlg') ):?>
              <p class="red"><?php echo $form->error( 'TrackingNo.hasErrFlg', null, array('wrap'=>false,'autocomplete'=>'off') );?></p>
      <?php endif;?>

    <table border="0" cellpadding="0" cellspacing="0" summary="" class="table01 formtable">
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
				<tr class="address_content">
					<td class="trackingbottom">
						<?php echo $form->error('tracking_no',null,array('wrap' => 'p','class' => 'errmsg')); ?>
						<?php echo $form->text('TrackingNo.tracking_no', array('id'=>'tracking_no_hunt','class'=>'w120')); ?>
					</td>
					 <td class="trackingbottom">&nbsp;</td>
					 <td class="trackingbottom">&nbsp;</td>
					 <td class="trackingbottom">&nbsp;</td>
					 <td class="trackingbottom">&nbsp;</td>
				</tr>
				
			</tbody>
		</table>
      <br>
      <p>We ask for your understanding that due to traffic conditions, actual delivery may be later than scheduled.</p>
      <br>
      <div class="formbtn01">
        <div class="btn btn-default subbtn"><a href="/tracking_no_hunt">Clear All Fields</a></div>
        <div class="btn btn-danger mainbtn"><input type="image" src="/lib/img/h.jpg" alt="Submit" /></div>
      </div>
    </form>
    <!--/[[CONTENTS]]-->
  </div>
 
    <!--[[RSIDE]]-->
       
</div>
	
<!-- ==== /Container ==== -->
<!--/[[CONTENTS]]-->

<!--/[[CONTAINER]]-->
<!--[[FOOTER]]-->
<!--[[GA TAG]]--> 


</div></div></div>



