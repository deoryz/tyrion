<?php
$this->breadcrumbs=array(
	'Kantors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kantor', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Kantor', 'icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Edit Kantor', 'icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Kantor', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Kantor #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pusat_kota',
		'pusat_alamat',
		'pusat_map',
		'pusat_phone',
		'pusat_fax',
		'pusat_email',
		'wakil_kota',
		'wakil_alamat',
		'wakil_map',
		'wakil_phone',
		'wakil_fax',
		'wakil_email',
	),
)); ?>
