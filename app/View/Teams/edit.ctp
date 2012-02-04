<div class="teams form">
<?php echo $this->Form->create('Team');?>
	<fieldset>
		<legend><?php echo __('Edit Team'); ?></legend>
	<?php
		echo $this->Form->input('team_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Team.team_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Team.team_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Teams'), array('action' => 'index'));?></li>
	</ul>
</div>
