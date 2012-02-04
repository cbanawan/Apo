<div class="cards form">
<?php echo $this->Form->create('Card');?>
	<fieldset>
		<legend><?php echo __('Edit Card'); ?></legend>
	<?php
		echo $this->Form->input('card_id');
		echo $this->Form->input('name');
		echo $this->Form->input('card_number');
		echo $this->Form->input('set_id');
		echo $this->Form->input('wiki_info_id');
		echo $this->Form->input('team_id');
		echo $this->Form->input('dist_start_year');
		echo $this->Form->input('dist_end_year');
		echo $this->Form->input('notes');
		echo $this->Form->input('User');
		echo $this->Form->input('Variation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Card.card_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Card.card_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cards'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sets'), array('controller' => 'sets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set'), array('controller' => 'sets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wiki Infos'), array('controller' => 'wiki_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wiki Info'), array('controller' => 'wiki_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variation'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
