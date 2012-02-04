<div class="cards index">
	<h2><?php echo __('Cards');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('card_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('card_number');?></th>
			<th><?php echo $this->Paginator->sort('set_id');?></th>
			<th><?php echo $this->Paginator->sort('wiki_info_id');?></th>
			<th><?php echo $this->Paginator->sort('team_id');?></th>
			<th><?php echo $this->Paginator->sort('dist_start_year');?></th>
			<th><?php echo $this->Paginator->sort('dist_end_year');?></th>
			<th><?php echo $this->Paginator->sort('notes');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($cards as $card): ?>
	<tr>
		<td><?php echo h($card['Card']['card_id']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['name']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['card_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($card['Set']['name'], array('controller' => 'sets', 'action' => 'view', $card['Set']['set_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($card['WikiInfo']['wiki_info_id'], array('controller' => 'wiki_infos', 'action' => 'view', $card['WikiInfo']['wiki_info_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($card['Team']['name'], array('controller' => 'teams', 'action' => 'view', $card['Team']['team_id'])); ?>
		</td>
		<td><?php echo h($card['Card']['dist_start_year']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['dist_end_year']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['notes']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['created']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $card['Card']['card_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $card['Card']['card_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $card['Card']['card_id']), null, __('Are you sure you want to delete # %s?', $card['Card']['card_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Card'), array('action' => 'add')); ?></li>
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
