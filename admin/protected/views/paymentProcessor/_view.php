<?php
/* @var $this PaymentProcessorController */
/* @var $data PaymentProcessor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_send')); ?>:</b>
	<?php echo CHtml::encode($data->is_send); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_receive')); ?>:</b>
	<?php echo CHtml::encode($data->is_receive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('send_fees')); ?>:</b>
	<?php echo CHtml::encode($data->send_fees); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('receive_fees')); ?>:</b>
	<?php echo CHtml::encode($data->receive_fees); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Reserve')); ?>:</b>
	<?php echo CHtml::encode($data->Reserve); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('send_extra')); ?>:</b>
	<?php echo CHtml::encode($data->send_extra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('receive_extra')); ?>:</b>
	<?php echo CHtml::encode($data->receive_extra); ?>
	<br />

	*/ ?>

</div>