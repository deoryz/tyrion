<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('posisi')); ?>:</b>
	<?php echo CHtml::encode($data->posisi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_open')); ?>:</b>
	<?php echo CHtml::encode($data->date_open); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_close')); ?>:</b>
	<?php echo CHtml::encode($data->date_close); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_input')); ?>:</b>
	<?php echo CHtml::encode($data->date_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_modif')); ?>:</b>
	<?php echo CHtml::encode($data->date_modif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sort')); ?>:</b>
	<?php echo CHtml::encode($data->sort); ?>
	<br />

	*/ ?>

</div>