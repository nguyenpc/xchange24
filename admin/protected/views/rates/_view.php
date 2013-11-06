<?php
/* @var $this RatesController */
/* @var $data Rates */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_proc')); ?>:</b>
	<?php echo CHtml::encode($data->from_proc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to_proc')); ?>:</b>
	<?php echo CHtml::encode($data->to_proc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate')); ?>:</b>
	<?php echo CHtml::encode($data->rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level')); ?>:</b>
	<?php echo CHtml::encode($data->level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min')); ?>:</b>
	<?php echo CHtml::encode($data->min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max')); ?>:</b>
	<?php echo CHtml::encode($data->max); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('extra_fees')); ?>:</b>
	<?php echo CHtml::encode($data->extra_fees); ?>
	<br />

	*/ ?>

</div>