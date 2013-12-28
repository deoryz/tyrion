<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pusat_kota')); ?>:</b>
	<?php echo CHtml::encode($data->pusat_kota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pusat_alamat')); ?>:</b>
	<?php echo CHtml::encode($data->pusat_alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pusat_map')); ?>:</b>
	<?php echo CHtml::encode($data->pusat_map); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pusat_phone')); ?>:</b>
	<?php echo CHtml::encode($data->pusat_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pusat_fax')); ?>:</b>
	<?php echo CHtml::encode($data->pusat_fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pusat_email')); ?>:</b>
	<?php echo CHtml::encode($data->pusat_email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('wakil_kota')); ?>:</b>
	<?php echo CHtml::encode($data->wakil_kota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wakil_alamat')); ?>:</b>
	<?php echo CHtml::encode($data->wakil_alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wakil_map')); ?>:</b>
	<?php echo CHtml::encode($data->wakil_map); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wakil_phone')); ?>:</b>
	<?php echo CHtml::encode($data->wakil_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wakil_fax')); ?>:</b>
	<?php echo CHtml::encode($data->wakil_fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wakil_email')); ?>:</b>
	<?php echo CHtml::encode($data->wakil_email); ?>
	<br />

	*/ ?>

</div>