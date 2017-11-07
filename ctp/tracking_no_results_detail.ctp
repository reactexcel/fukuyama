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
									<th scope="col" class="address_title" data-tablesaw-priority="persist">���₢���킹�ԍ�</th>
									<th scope="col" class="address_title" data-tablesaw-sortable-default-col data-tablesaw-priority="3">��</th>
									<th scope="col" class="address_title" data-tablesaw-priority="2">�d��</th>
								</tr>
							</thead>
							<tbody>
								<tr class="address_content">
									<td>
										<?php if (trim($track_results_detail['no']) != "") echo substr($track_results_detail['no'], 0, 3) . '-' . substr($track_results_detail['no'], 3, 4) . '-' . substr($track_results_detail['no'], 7); ?>
									</td>
									<td>
										<?php echo number_format($track_results_detail['detail'][$track_results_detail['no']][19]); ?> ��
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
								<th><p class="subtitle">���݂̔z�B�� :<br>
									<font color="red"><?php echo $this->TrackingNoEn->send_status($track_results_detail)?></font></p>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr class="address_content">
								<td>
									���͂��\���/�z�B������<br>
									<?php if($track_results_detail['yoteKantyoTime']): ?>
										<b>2017/10/12 10:00 �z�B����</b><br>
										<font color="red">����ʓI�Ȃ��ו������\������ƂȂ�܂�</font>
										<b><?php echo $track_results_detail['yoteKantyoTime'];?></b><br>
									<?php endif; ?>

									<?php if($track_results_detail[4] == "��t" && !empty($track_results_detail['yoteKantyoTime'])): ?>
										<font style="color:red">&nbsp;����ʓI�Ȃ��ו������\������ƂȂ�܂��B<br>
										&nbsp;���z�B�w��������w�肢�������Ă���ꍇ�́A�w����ɂ����������܂��B<br>
										&nbsp;����ʎ���ɂ�肨�͂��\�莞�Ԓʂ�̔z�B���o���Ȃ��ꍇ���������܂��B<br></font>
									<?php endif; ?>
									
									<?php if($track_results_detail[4] == "����" && !empty($track_results_detail['yoteKantyoTime'])): ?>
										<font style="color:red">&nbsp;����ʓI�Ȃ��ו������\������ƂȂ�܂��B<br>
										&nbsp;���z�B�w��������w�肢�������Ă���ꍇ�́A�w����ɂ��͂��������܂��B<br>
										&nbsp;����ʎ���ɂ�肨�͂��\�莞�Ԓʂ�̔z�B���o���Ȃ��ꍇ���������܂��B<br></font>
									<?php endif; ?>
									
									<?php if($track_results_detail[4] == "����" && !empty($track_results_detail['yoteKantyoTime'])): ?>
										<font style="color:red">&nbsp;���z�B���̎w��������ꍇ��y�E���j���̂��͂�������]�̍ۂ́A����̃X�e�b�J�[��<br>
										&nbsp;&nbsp;&nbsp;&nbsp;���͕��ɓ\�t���������܂��悤���肢�������܂��B�i�X�e�b�J�[�́A�e�x�X�E�c�Ə���<br>
										&nbsp;&nbsp;&nbsp;&nbsp;�Ă��p�ӂ����Ă��������Ă���܂��j<br>
										&nbsp;�����j���ɂ��܂��ẮA���͂����o���Ȃ��n�悪�������܂��B<br></font>
									<?php endif; ?>
									
									<?php if($track_results_detail[4] == "���o" && !empty($track_results_detail['yoteKantyoTime'])): ?>
										<font style="color:red">&nbsp;����ʎ���ɂ�肨�͂��\�莞�Ԓʂ�̔z�B���o���Ȃ��ꍇ���������܂��B<br></font>
									<?php endif; ?>
								</td>
							</tr>
						</tbody>
					</table>

					<table border="0" cellpadding="0" cellspacing="0" summary="" class="table01 formtable">
						<table class="tablesaw mt-40" data-tablesaw-mode="stack">
							<thead>
								<tr>
								<th scope="col" class="address_title" data-tablesaw-priority="persist">��</th>
								<th scope="col" class="address_title" data-tablesaw-sortable-default-col data-tablesaw-priority="3">�N����</th>
								<th scope="col" class="address_title" data-tablesaw-priority="2">�x�X��</th>
								<th scope="col" class="address_title" data-tablesaw-priority="1">�x�X�d�b�ԍ�</th>
								</tr>
							</thead>
							<tbody>
								<tr class="address_content">
									<td>��t</td>
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
									<td>����</td>
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
									<td>����</td>
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
									<td>���o</td>
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
									<td>�z�B����</td>
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
									<th scope="col" class="address_title" data-tablesaw-priority="persist">�x�X�R�[�h</th>
									<th scope="col" class="address_title" data-tablesaw-sortable-default-col data-tablesaw-priority="3">�x�X��</th>
									<th scope="col" class="address_title" data-tablesaw-priority="2">�Z��</th>
									<th scope="col" class="address_title" data-tablesaw-priority="1">�x�X�d�b�ԍ�</th>
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
							<dt>�����[���m�F�������ꍇ�́A���L�{�^�����N���b�N���Ă��������B</dt>
							<dd>
							<ul>
								<li><a href="javascript:void(0)" onclick = "tracking_snd_image()">�������[���m�F����</a></li>
								<li><a href="javascript:void(0)" onclick = "tracking_rsv_image()">�̎����[���m�F����</a></li>
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
