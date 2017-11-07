<?php 
$site_name = "Fukuyama Transporting";
$page_title = "Tracking";
$page_description = "Description Here";
$site_url = "Put the base site url here";
$key_words = "Keywords go in here";
$author = "J-Cast";
$footer_copy = "Fukuyama Transportation. All Rights Reserved."
?>
<script type="text/javascript">

	
	function tracking_snd_image(){
		var form = document.forms[0];
		form.action="/situation/tracking_snd_image";
		form.target="_blank";
		form.submit();
	}

	
	function tracking_rsv_image(){
		var form = document.forms[0];
		form.action="/situation/tracking_rsv_image";
		form.target="_blank";
		form.submit();
	}

</script>
<!--[[CONTAINER]]-->
<div class="container">
	<div class="row no-gutters">
		<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 mt-70">
			<div id="contents">
				<?php if (trim($track_results_detail['status']) == 'OK'): ?>
					<h3>Details</h3>
					<table border="0" cellpadding="0" cellspacing="0" summary="" class="table01 formtable">
						<table class="tablesaw mt-40" data-tablesaw-mode="stack">
							<thead>
								<tr>
									<th scope="col" class="address_title" data-tablesaw-priority="persist">お問い合わせ番号</th>
									<th scope="col" class="address_title" data-tablesaw-sortable-default-col data-tablesaw-priority="3">個数</th>
									<th scope="col" class="address_title" data-tablesaw-priority="2">重量</th>
								</tr>
							</thead>
							<tbody>
								<tr class="address_content">
									<td>
										<?php if (trim($track_results_detail['no']) != "") echo substr($track_results_detail['no'], 0, 3) . '-' . substr($track_results_detail['no'], 3, 4) . '-' . substr($track_results_detail['no'], 7); ?>
									</td>
									<td>
										<?php echo number_format($track_results_detail['detail'][$track_results_detail['no']][19]); ?> 個
									</td>
									<td>
										<?php echo number_format($track_results_detail['detail'][$track_results_detail['no']][20]); ?> kg
									</td>
								</tr>
							</tbody>
						</table>
					</table>

					<table border="0" cellpadding="0" cellspacing="0" summary="" class="table01 formtable">
						<thead>
							<tr>
								<th><p class="subtitle">現在の配達状況 :<br>
									<font color="red"><?php echo $this->TrackingNoEn->send_status($track_results_detail)?></font></p>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr class="address_content">
								<td>
									お届け予定日/配達完了日<br>
									<?php if($track_results_detail['yoteKantyoTime']): ?>
										<b>2017/10/12 10:00 配達完了</b><br>
										<font color="red">※一般的なお荷物到着予定日時となります</font>
										<b><?php echo $track_results_detail['yoteKantyoTime'];?></b><br>
									<?php endif; ?>

									<?php if($track_results_detail[4] == "受付" && !empty($track_results_detail['yoteKantyoTime'])): ?>
										<font style="color:red">&nbsp;※一般的なお荷物到着予定日時となります。<br>
										&nbsp;※配達指定日をご指定いただいている場合は、指定日におけいたします。<br>
										&nbsp;※交通事情等によりお届け予定時間通りの配達が出来ない場合がございます。<br></font>
									<?php endif; ?>
									
									<?php if($track_results_detail[4] == "発送" && !empty($track_results_detail['yoteKantyoTime'])): ?>
										<font style="color:red">&nbsp;※一般的なお荷物到着予定日時となります。<br>
										&nbsp;※配達指定日をご指定いただいている場合は、指定日にお届けいたします。<br>
										&nbsp;※交通事情等によりお届け予定時間通りの配達が出来ない場合がございます。<br></font>
									<?php endif; ?>
									
									<?php if($track_results_detail[4] == "到着" && !empty($track_results_detail['yoteKantyoTime'])): ?>
										<font style="color:red">&nbsp;※配達日の指定をされる場合や土・日祝日のお届けをご希望の際は、所定のステッカーを<br>
										&nbsp;&nbsp;&nbsp;&nbsp;お届物に貼付いただきますようお願いいたします。（ステッカーは、各支店・営業所に<br>
										&nbsp;&nbsp;&nbsp;&nbsp;てご用意させていただいております）<br>
										&nbsp;※日祝日につきましては、お届けが出来ない地域がございます。<br></font>
									<?php endif; ?>
									
									<?php if($track_results_detail[4] == "持出" && !empty($track_results_detail['yoteKantyoTime'])): ?>
										<font style="color:red">&nbsp;※交通事情等によりお届け予定時間通りの配達が出来ない場合がございます。<br></font>
									<?php endif; ?>
								</td>
							</tr>
						</tbody>
					</table>

					<table border="0" cellpadding="0" cellspacing="0" summary="" class="table01 formtable">
						<table class="tablesaw mt-40" data-tablesaw-mode="stack">
							<thead>
								<tr>
								<th scope="col" class="address_title" data-tablesaw-priority="persist">状況</th>
								<th scope="col" class="address_title" data-tablesaw-sortable-default-col data-tablesaw-priority="3">年月日</th>
								<th scope="col" class="address_title" data-tablesaw-priority="2">支店名</th>
								<th scope="col" class="address_title" data-tablesaw-priority="1">支店電話番号</th>
								</tr>
							</thead>
							<tbody>
								<tr class="address_content">
									<td>受付</td>
									<td>
										<?php
											echo $this->TrackingNoEn->DateTimeFormat($track_results_detail['detail'][$track_results_detail['no']][3],$track_results_detail['detail'][$track_results_detail['no']][4]);
										?>
									</td>
									<td>
										<a href="/shop/map_01/<?php echo $track_results_detail['detail']['5_shopinfo']['Shop']['id'];?>" target="_blank">
										<?php echo $track_results_detail['detail']['5_shopinfo']['Shop']['tenname']?></a>
									</td>
									<td>
										<?php echo $track_results_detail['detail']['5_shopinfo']['Shop']['tel_no']?>
									</td>
								</tr>
								<tr class="address_content">
									<td>発送</td>
									<td>
										<?php
											echo $this->TrackingNoEn->DateTimeFormat($track_results_detail['detail'][$track_results_detail['no']][6]);
										?>
									</td>
									<td>
										<a href="/shop/map_01/<?php echo $track_results_detail['detail']['8_shopinfo']['Shop']['id'];?>" target="_blank">
										<?php echo $track_results_detail['detail']['8_shopinfo']['Shop']['tenname']?></a>
									</td>
									<td>
										<?php echo $track_results_detail['detail']['8_shopinfo']['Shop']['tel_no']?>
									</td>
								</tr>
								<tr class="address_content">
									<td>到着</td>
									<td>
										<?php
											echo $this->TrackingNoEn->DateTimeFormat($track_results_detail['detail'][$track_results_detail['no']][9],$track_results_detail['detail'][$track_results_detail['no']][10]);
										?>
									</td>
									<td>
										<a href="/shop/map_01/<?php echo $track_results_detail['detail']['11_shopinfo']['Shop']['id'];?>" target="_blank">
										<?php echo $track_results_detail['detail']['11_shopinfo']['Shop']['tenname']?></a>
									</td>
									<td>
										<?php echo $track_results_detail['detail']['11_shopinfo']['Shop']['tel_no']?>
									</td>
								</tr>
								<tr class="address_content">
									<td>持出</td>
									<td>
										<?php if($isRenderCarriedOutTime): ?>
											<?php
												echo $this->TrackingNoEn->DateTimeFormat($track_results_detail['detail'][$track_results_detail['no']][12],$track_results_detail['detail'][$track_results_detail['no']][13]);
											?>
										<?php endif; ?>
									</td>
									<td>
										<a href="/shop/map_01/<?php echo $track_results_detail['detail']['14_shopinfo']['Shop']['id'];?>" target="_blank">
										<?php echo $track_results_detail['detail']['14_shopinfo']['Shop']['tenname']?></a>
									</td>
									<td><?php echo $track_results_detail['detail']['14_shopinfo']['Shop']['tel_no']?></td>
								</tr>
								<tr class="address_content">
									<td>配達完了</td>
									<td>
										<?php
											echo $this->TrackingNoEn->DateTimeFormat($track_results_detail['detail'][$track_results_detail['no']][15],$track_results_detail['detail'][$track_results_detail['no']][16]);
										?>
									</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</table>

					<table border="0" cellpadding="0" cellspacing="0" summary="" class="table01 formtable">
						<table class="tablesaw mt-40" data-tablesaw-mode="stack">
							<thead>
								<tr>
									<th scope="col" class="address_title" data-tablesaw-priority="persist">支店コード</th>
									<th scope="col" class="address_title" data-tablesaw-sortable-default-col data-tablesaw-priority="3">支店名</th>
									<th scope="col" class="address_title" data-tablesaw-priority="2">住所</th>
									<th scope="col" class="address_title" data-tablesaw-priority="1">支店電話番号</th>
								</tr>
							</thead>
							<tbody>
								<?php $showed_shop = array();
								if( !empty($track_results_detail['detail']['5_shopinfo']['Shop']) ):
									$showed_shop[$track_results_detail['detail']['5_shopinfo']['Shop']['id']] = $track_results_detail['detail']['5_shopinfo']['Shop']['tencode']; ?>
									<tr class="address_content">
										<td><?php echo $track_results_detail['detail']['5_shopinfo']['Shop']['tencode']; ?></td>
										<td><a href="/shop/map_01/<?php echo $track_results_detail['detail']['5_shopinfo']['Shop']['id'];?>" target="_blank">
										<?php echo $track_results_detail['detail']['5_shopinfo']['Shop']['tenname']; ?></a></td>
										<td><?php echo $track_results_detail['detail']['5_shopinfo']['Shop']['addr1']; ?></td>
										<td><?php echo $track_results_detail['detail']['5_shopinfo']['Shop']['tel_no']; ?></td>
									</tr>
								<?php endif;
								if( !empty($track_results_detail['detail']['8_shopinfo']['Shop']) && !isset($showed_shop[$track_results_detail['detail']['8_shopinfo']['Shop']['id']]) ):
									$showed_shop[$track_results_detail['detail']['8_shopinfo']['Shop']['id']] = $track_results_detail['detail']['8_shopinfo']['Shop']['tencode']; ?>
									<tr class="address_content">
										<td><?php echo $track_results_detail['detail']['8_shopinfo']['Shop']['tencode']; ?></td>
										<td><a href="/shop/map_01/<?php echo $track_results_detail['detail']['8_shopinfo']['Shop']['id'];?>" target="_blank">
										<?php echo $track_results_detail['detail']['8_shopinfo']['Shop']['tenname']; ?></a></td>
										<td><?php echo $track_results_detail['detail']['8_shopinfo']['Shop']['addr1']; ?></td>
										<td><?php echo $track_results_detail['detail']['8_shopinfo']['Shop']['tel_no']; ?></td>
									</tr>
								<?php endif;
								if( !empty($track_results_detail['detail']['11_shopinfo']['Shop']) && !isset($showed_shop[$track_results_detail['detail']['11_shopinfo']['Shop']['id']]) ):
									$showed_shop[$track_results_detail['detail']['11_shopinfo']['Shop']['id']] = $track_results_detail['detail']['11_shopinfo']['Shop']['tencode']; ?>
									<tr class="address_content">
										<td><?php echo $track_results_detail['detail']['11_shopinfo']['Shop']['tencode']; ?></td>
										<td><a href="/shop/map_01/<?php echo $track_results_detail['detail']['11_shopinfo']['Shop']['id'];?>" target="_blank">
										<?php echo $track_results_detail['detail']['11_shopinfo']['Shop']['tenname']; ?></a></td>
										<td><?php echo $track_results_detail['detail']['11_shopinfo']['Shop']['addr1']; ?></td>
										<td><?php echo $track_results_detail['detail']['11_shopinfo']['Shop']['tel_no']; ?></td>
									</tr>
								<?php endif;
								if( !empty($track_results_detail['detail']['14_shopinfo']['Shop']) && !isset($showed_shop[$track_results_detail['detail']['14_shopinfo']['Shop']['id']]) ):
									$showed_shop[$track_results_detail['detail']['14_shopinfo']['Shop']['id']] = $track_results_detail['detail']['14_shopinfo']['Shop']['tencode']; ?>
									<tr class="address_content">
										<td><?php echo $track_results_detail['detail']['14_shopinfo']['Shop']['tencode']; ?></td>
										<td><a href="/shop/map_01/<?php echo $track_results_detail['detail']['14_shopinfo']['Shop']['id'];?>" target="_blank">
										<?php echo $track_results_detail['detail']['14_shopinfo']['Shop']['tenname']; ?></a></td>
										<td><?php echo $track_results_detail['detail']['14_shopinfo']['Shop']['addr1']; ?></td>
										<td><?php echo $track_results_detail['detail']['14_shopinfo']['Shop']['tel_no']; ?></td>
									</tr>
								<?php endif; ?>
							</tbody>
						</table>
					</table>

					<?php if($tranking_display):?>
						<?php echo $form->create('TrackingImage', array('url'=>'/tracking_snd_image')); ?>
						<?php echo $form->hidden('TrackingNo',array('value'=>$track_results_detail['no'])); ?>
						<?php
							$sndTenNo = (!empty($track_results_detail['detail']['5_shopinfo']['Shop']))?$track_results_detail['detail']['5_shopinfo']['Shop']['tencode']:"";
							$rsvTenNo = (!empty($track_results_detail['detail']['14_shopinfo']['Shop']))?$track_results_detail['detail']['14_shopinfo']['Shop']['tencode']:"";
							echo $form->hidden('sndTenNo',array('value'=>$sndTenNo));
							echo $form->hidden('rsvTenNo',array('value'=>$rsvTenNo));
						?>

						<div class="genpyo_tips">
						<dl>
							<dt>※原票を確認したい場合は、下記ボタンをクリックしてください。</dt>
							<dd>
							<ul>
								<li><a href="javascript:void(0)" onclick = "tracking_snd_image()">発送原票を確認する</a></li>
								<li><a href="javascript:void(0)" onclick = "tracking_rsv_image()">領収原票を確認する</a></li>
							</ul>
							</dd>
						</dl>
						</div>
						</form>
					<?php endif;?>
					<div class="formbtn01 mt-30">
						<div class="mainbtn">
							<div class="btn btn-default"><a href="/tracking_no_hunt">Clear All Fields</a></div>
							<div class="btn btn-danger">Submit</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<!--/[[CONTENTS]]-->
			<!--/[package_info]-->
			<!--[web service]-->
			<!--/[mobile_info]-->
			<!--/[[RSIDE]]-->
		</div>
	</div>
</div>
<!--/[[CONTAINER]]-->
<!-- ==== /Container ==== -->
<!--/[[CONTENTS]]-->

<!--/[[CONTAINER]]-->
<!--[[FOOTER]]-->
<!--[[GA TAG]]--> 

<!--/[[GA TAG]]--> 
