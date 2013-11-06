<?php
/* @var $this PaymentProcessorController */
/* @var $model PaymentProcessor */

$this->breadcrumbs=array(
	'Payment Processors'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PaymentProcessor', 'url'=>array('index')),
	array('label'=>'Create PaymentProcessor', 'url'=>array('create')),
	array('label'=>'View PaymentProcessor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PaymentProcessor', 'url'=>array('admin')),
);
?>

<h1>Update PaymentProcessor <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>