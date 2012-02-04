<div class="variations form">
<?php echo $this->Form->create('Variation');?>
	<fieldset>
		<legend><?php echo __('Edit Variation'); ?></legend>
	<?php
		echo $this->Form->input('variation_id');
		echo $this->Form->input('description');
		echo $this->Form->input('front_img');
		echo $this->Form->input('rear_img');
		echo $this->Form->input('Card');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Variation.variation_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Variation.variation_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Variations'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
