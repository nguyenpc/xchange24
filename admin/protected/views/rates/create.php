<?php
/* @var $this RatesController */
/* @var $model Rates */

$this->breadcrumbs=array(
	'Rates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rates', 'url'=>array('index')),
	array('label'=>'Manage Rates', 'url'=>array('admin')),
);
?>

<h1>Create Rates</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>