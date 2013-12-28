<?php
/* @var $this HomeController */
?>
				<div class="content-dalam-header">
					<div class="content-dalam-title">
						Lokasi Kami
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
				<div style="min-height: 400px;">
					<div class="lokasi-warp">
						<?php foreach ($kota as $key => $value): ?>
						<div class="lokasi-list">
							<div class="lokasi-kota">
								<?php echo $value->city->city_name ?>
							</div>
							<div class="lokasi-alamat">
								<?php echo $value->alamat ?></br>
								<span>(klik <a href="#">di sini</a> untuk melihat peta)</span></br>
								</br>
								Phone: <?php echo $value->phone ?></br>
								Fax: <?php echo $value->fax ?></br>
								E-Mail: <a href="mailto:<?php echo $value->email ?>"><?php echo $value->email ?></a></br>
							</div>
						</div>
						<?php endforeach ?>
						<div class="clear"></div>
					</div>
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
