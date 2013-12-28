<?php
$this->breadcrumbs=array(
	'Lokasi',
);

$this->menu=array(
	array('label'=>'Add Lokasi', 'icon'=>'th-list','url'=>array('create')),
);
?>

<h1>Lokasi</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'lokasi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'id',
		array(
			'name'=>'city_id',
			'filter'=>false,
			'value'=>'$data->city->city_name',
		),
		// 'city_id',
		'alamat',
		'phone',
		'fax',
		'email',
		/*
		'map',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} {delete}'
		),
	),
)); ?>
