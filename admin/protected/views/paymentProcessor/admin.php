<?php
/* @var $this PaymentProcessorController */
/* @var $model PaymentProcessor */

$this->breadcrumbs=array(
	'Payment Processors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PaymentProcessor', 'url'=>array('index')),
	array('label'=>'Create PaymentProcessor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#payment-processor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Payment Processors</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"Payment Processors",
		));
		
	?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    	'itemsCssClass'=>'table table-striped',
	'template'=>"{items}",
	'id'=>'payment-processor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array('name'=>'id', 'header'=>'#'),
		'code',
		'name',
		/*'is_send',
		'is_receive',*/
		'send_fees',
		
		'receive_fees',
		'Reserve',
		'send_extra',
		'receive_extra',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<?php $this->endWidget();?>