<div class="teams form">
<?php echo $this->Form->create('Team');?>
	<fieldset>
		<legend><?php echo __('Add Team'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('franchise');
		echo $this->Form->input('ballpark');
		echo $this->Form->input('year_started');
		echo $this->Form->input('year_finished');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Teams'), array('action' => 'index'));?></li>
	</ul>
</div>
