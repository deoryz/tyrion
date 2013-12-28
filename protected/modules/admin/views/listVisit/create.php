<?php
$this->breadcrumbs=array(
	'List Visits'=>array('index'),
	'Add',
);

$this->menu=array(
	array('label'=>'List ListVisit', 'icon'=>'th-list','url'=>array('index')),
);
?>

<h1>Add ListVisit</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>