<?php
/* @var $this HomeController */
$this->widget('application.extensions.fancyapps.EFancyApps', array(
	'target'=>'.various',
	'config'=>array(
		'maxWidth'=> 800,
		'maxHeight'=> 600,
		'fitToView'=> false,
		'width'	=> '70%',
		'height'	=> '70%',
		'autoSize'=> false,
		'closeClick'=> false,
		'openEffect'=> 'none',
		'closeEffect'=> 'none',
	),
));
?>
				<div class="content-dalam-header">
					<div class="content-dalam-title">
						Jaringan Rekan
					</div>
					<div class="content-dalam-share">
						<div class="content-dalam-share-img">
						<a href="#"><img style="vertical-align:middle" src="<?php echo Yii::app()->baseUrl ?>/asset/images/tombol-facebook.png" /></a>
						</div>
						<div class="content-dalam-share-text">
						<a href="#">Share on Facebook</a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="text-content">
					<p>Cahaya Medika Healthcare memiliki jaringan rekan yang tersebar di Indonesia, silahkan mencari lokasi jaringan rekan kami yang
terdekat dengan lokasi Anda.</p>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>array('/jaringan/index'),
	'id'=>'search-form',
	'enableClientValidation'=>false,
	'method'=>'get',
)); ?>
				<div class="infohome">
					<div class="fleft span-6 margin-right-5">
						<?php echo $form->labelEx($model,'prov'); ?>
<?php
$jqcs = $this->createWidget('application.extensions.jqchain.jqchain');
?>
						<div class="select-box">
							<div class="inner-box">
								<?php
								$dataProv2['All']='Semua Provinsi';
								$dataProv = cHtml::listData(MasterState::model()->findAll(),'id','state_name');
								foreach ($dataProv as $key => $value) {
									$dataProv2[$key]=$value;
								}
								echo $jqcs->mainDropDown('state', '', 
								$dataProv2,
								array('empty'=>'---------- Pilih Propinsi ----------'), 
								'/home/getData','kota');
								 ?>
							</div>
						</div>
					</div>
					<div class="fleft span-6 margin-right-5">
						<?php echo $form->labelEx($model,'kota'); ?>
						<div class="select-box">
							<div class="inner-box">
								<?php
								echo $jqcs->mainDropDown('kota', '', 
								array(),
								array('empty'=>'---------- Pilih Kota ----------'), 
								'/home/getData');
								?>
							</div>
						</div>
					</div>
					<div class="jaringan-button">
						<div class="button-box">
							<div class="inner-box">
								<?php echo CHtml::submitButton(''); ?>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
<?php $this->endWidget(); ?>
				<div class="height-20"></div>
				<div class="content-dalam-header">
					<div class="content-dalam-title">
						Jaringan Rekan berdasar kota
					</div>
					<div class="clear"></div>
					<div class="height-10"></div>
				</div>
				<div class="height-10"></div>
				<div style="min-height: 100px;">
					<?php if ($_GET['kota']): ?>
						<div class="lokasi-warp">
							<?php foreach ($kota as $key => $value): ?>
							<?php
							$dom = new DOMDocument();
							$dom->loadHTML($value->map);
							$iframe = $dom->getElementsByTagName('iframe');
							for ($i; $i < $iframe->length; $i++) {
								$attr = $iframe->item($i)->getAttribute('src');
							}
							?>
							<div class="lokasi-list">
								<div class="lokasi-kota">
									<?php echo $value->city->city_name ?>
								</div>
								<div class="lokasi-alamat">
									<?php echo $value->alamat ?></br>
									<span>(klik <a class="various fancybox.iframe" href="<?php echo $attr ?>">di sini</a> untuk melihat peta)</span></br>
									</br>
									Phone: <?php echo $value->phone ?></br>
									Fax: <?php echo $value->fax ?></br>
									E-Mail: <a href="mailto:<?php echo $value->email ?>"><?php echo $value->email ?></a></br>
								</div>
							</div>
							<?php endforeach ?>
							<div class="clear"></div>
						</div>
					<?php else: ?>
						<?php
						$this->widget('zii.widgets.CMenu', array(
							'items'=>$kota,
							'htmlOptions'=>array('class'=>'jaringan-list'),
						));
						?>
					<?php endif ?>
				</div>
					<div class="clear"></div>
					<div class="height-10"></div>
				</div>
				<div class="content-dalam-footer">
					<div class="content-dalam-share">
						<div class="content-dalam-share-img">
						<a href="#"><img style="vertical-align:middle" src="<?php echo Yii::app()->baseUrl ?>/asset/images/tombol-facebook.png" /></a>
						</div>
						<div class="content-dalam-share-text">
						<a href="#">Share on Facebook</a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
