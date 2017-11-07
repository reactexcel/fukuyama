<?php 
$site_name = "Fukuyama Transporting";
$page_title = "Tracking";
$page_description = "Description Here";
$site_url = "Put the base site url here";
$key_words = "Keywords go in here";
$author = "J-Cast";
$footer_copy = "Fukuyama Transportation. All Rights Reserved."
?>

<meta charset="shift_jis" /> 

<div class="container">
<div class="row no-gutters">
	<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 mt-70">
	<div id="contents">
	<!--[[CONTENTS]]-->

		<?php echo $form->create('TrackingNo', array('url'=>'/tracking_no', 'id' => 'tracking_noForm' , 'name' => 'tracking_noForm')); ?>
			<h3>Inquiry of luggage delivery status / Referral from inquiry number</h3>
			<?php echo $form->hidden('formValiNo',array('value'=>$formValiNo)); ?>
			<p class="bold">Inquiry from inquiry number.</p>
			<?php if( $form->isFieldError('TrackingNo.hasErrFlg') ):?>
				<p class="red"><?php echo $form->error( 'TrackingNo.hasErrFlg', null, array('wrap'=>false,'autocomplete'=>'off') );?></p>
			<?php endif;?>

    <table border="0" cellpadding="0" cellspacing="0" summary="" class="table01 formtable">
		<table class="tablesaw  tablesaw-stack" data-tablesaw-mode="stack">
			<thead>
				<tr>
					<th scope="col" class="address_title" data-tablesaw-priority="persist">Contact Number</th>
					<th scope="col" class="address_title" data-tablesaw-sortable-default-col data-tablesaw-priority="3">Date of Shipment</th>
					<th scope="col" class="address_title" data-tablesaw-priority="2">Update Date and Time</th>
					<th scope="col" class="address_title" data-tablesaw-priority="1">Delivery Situation</th>
					<th scope="col" class="address_title" data-tablesaw-priority="4">Remarks</th>
				</tr>
			</thead>
			<tbody>
				<tr class="address_content">
          <td>
            <?php echo $form->error('tracking_no1',null,array('wrap' => 'p','class' => 'errmsg')); ?>
            <?php echo $form->text('TrackingNo.tracking_no1', array('id'=>'tracking_no1','class'=>'w120 ime_mode_disabled')); ?>
          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr class="address_content">
          <td>
            <?php echo $form->error('tracking_no2',null,array('wrap' => 'p','class' => 'errmsg')); ?>
            <?php echo $form->text('TrackingNo.tracking_no2', array('id'=>'tracking_no2','class'=>'w120 ime_mode_disabled')); ?>
          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr class="address_content">
          <td>
            <?php echo $form->error('tracking_no3',null,array('wrap' => 'p','class' => 'errmsg')); ?>
            <?php echo $form->text('TrackingNo.tracking_no3', array('id'=>'tracking_no3','class'=>'w120 ime_mode_disabled')); ?>
          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr class="address_content">
          <td>
            <?php echo $form->error('tracking_no4',null,array('wrap' => 'p','class' => 'errmsg')); ?>
            <?php echo $form->text('TrackingNo.tracking_no4', array('id'=>'tracking_no4','class'=>'w120 ime_mode_disabled')); ?>
          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr class="address_content">
          <td>
            <?php echo $form->error('tracking_no5',null,array('wrap' => 'p','class' => 'errmsg')); ?>
            <?php echo $form->text('TrackingNo.tracking_no5', array('id'=>'tracking_no5','class'=>'w120 ime_mode_disabled')); ?>
          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr class="address_content">
          <td>
            <?php echo $form->error('tracking_no6',null,array('wrap' => 'p','class' => 'errmsg')); ?>
            <?php echo $form->text('TrackingNo.tracking_no6', array('id'=>'tracking_no6','class'=>'w120 ime_mode_disabled')); ?>
          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr class="address_content">
          <td>
            <?php echo $form->error('tracking_no7',null,array('wrap' => 'p','class' => 'errmsg')); ?>
            <?php echo $form->text('TrackingNo.tracking_no7', array('id'=>'tracking_no7','class'=>'w120 ime_mode_disabled')); ?>
          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr class="address_content">
          <td>
            <?php echo $form->error('tracking_no8',null,array('wrap' => 'p','class' => 'errmsg')); ?>
            <?php echo $form->text('TrackingNo.tracking_no8', array('id'=>'tracking_no8','class'=>'w120 ime_mode_disabled')); ?>
          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr class="address_content">
          <td>
            <?php echo $form->error('tracking_no9',null,array('wrap' => 'p','class' => 'errmsg')); ?>
            <?php echo $form->text('TrackingNo.tracking_no9', array('id'=>'tracking_no9','class'=>'w120 ime_mode_disabled')); ?>
          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr class="address_content">
          <td>
            <?php echo $form->error('tracking_no10',null,array('wrap' => 'p','class' => 'errmsg')); ?>
            <?php echo $form->text('TrackingNo.tracking_no10', array('id'=>'tracking_no10','class'=>'w120 ime_mode_disabled')); ?>
          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
				
			</tbody>
		</table>
      <br>
      <p>We ask for your understanding that due to traffic conditions, actual delivery may be later than scheduled.</p>
      <br>
      <div class="formbtn01">
        <div class="btn btn-default"><a href="/tracking_no_hunt">Clear All Fields</a></div>
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