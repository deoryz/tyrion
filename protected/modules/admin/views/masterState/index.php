<?php
$this->breadcrumbs=array(
	'Master States',
);

$this->menu=array(
	array('label'=>'Add MasterState', 'icon'=>'th-list','url'=>array('create')),
);
?>

<h1>Master States</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'master-state-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'id',
		'state_name',
		// 'state_country_id',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} {delete}'
		),
	),
)); ?>
