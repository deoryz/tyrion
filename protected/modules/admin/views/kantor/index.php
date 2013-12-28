<?php
$this->breadcrumbs=array(
	'Kantors',
);

$this->menu=array(
	array('label'=>'Add Kantor', 'icon'=>'th-list','url'=>array('create')),
);
?>

<h1>Kantors</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'kantor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'pusat_kota',
		'pusat_alamat',
		'pusat_map',
		'pusat_phone',
		'pusat_fax',
		/*
		'pusat_email',
		'wakil_kota',
		'wakil_alamat',
		'wakil_map',
		'wakil_phone',
		'wakil_fax',
		'wakil_email',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} {delete}'
		),
	),
)); ?>
