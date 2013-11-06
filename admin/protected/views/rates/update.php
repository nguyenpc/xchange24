<?php
/* @var $this RatesController */
/* @var $model Rates */

$this->breadcrumbs=array(
	'Rates'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rates', 'url'=>array('index')),
	array('label'=>'Create Rates', 'url'=>array('create')),
	array('label'=>'View Rates', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Rates', 'url'=>array('admin')),
);
?>

<h1>Update Rates <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>