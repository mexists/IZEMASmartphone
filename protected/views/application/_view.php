<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('application_no')); ?>:</b>
	<?php echo CHtml::encode($data->application_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_method')); ?>:</b>
	<?php echo CHtml::encode($data->payment_method); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtotal')); ?>:</b>
	<?php echo CHtml::encode($data->subtotal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_charge')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_charge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('receipt_file')); ?>:</b>
	<?php echo CHtml::encode($data->receipt_file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_first_name')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_last_name')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_company')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_company); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_address_1')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_address_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_address_2')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_address_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_city')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_state')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_country')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_postcode')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_postcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_method')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_method); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_comments')); ?>:</b>
	<?php echo CHtml::encode($data->order_comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('application_status_id')); ?>:</b>
	<?php echo CHtml::encode($data->application_status_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />

	*/ ?>

</div>