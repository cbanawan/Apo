<div class="userCards index">
	<h2><?php echo __('User Cards');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('user_card_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('card_variation_id');?></th>
			<th><?php echo $this->Paginator->sort('grade_type');?></th>
			<th><?php echo $this->Paginator->sort('grade_value');?></th>
			<th><?php echo $this->Paginator->sort('grade_number');?></th>
			<th><?php echo $this->Paginator->sort('own_card');?></th>
			<th><?php echo $this->Paginator->sort('active_sell');?></th>
			<th><?php echo $this->Paginator->sort('white_whale');?></th>
			<th><?php echo $this->Paginator->sort('front_img');?></th>
			<th><?php echo $this->Paginator->sort('rear_img');?></th>
			<th><?php echo $this->Paginator->sort('bought_date');?></th>
			<th><?php echo $this->Paginator->sort('listed_date');?></th>
			<th><?php echo $this->Paginator->sort('sell_price');?></th>
			<th><?php echo $this->Paginator->sort('low_price');?></th>
			<th><?php echo $this->Paginator->sort('high_price');?></th>
			<th><?php echo $this->Paginator->sort('private_notes');?></th>
			<th><?php echo $this->Paginator->sort('public_notes');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($userCards as $userCard): ?>
	<tr>
		<td><?php echo h($userCard['UserCard']['user_card_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userCard['User']['user_id'], array('controller' => 'users', 'action' => 'view', $userCard['User']['user_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userCard['CardVariation']['card_variation_id'], array('controller' => 'card_variations', 'action' => 'view', $userCard['CardVariation']['card_variation_id'])); ?>
		</td>
		<td><?php echo h($userCard['UserCard']['grade_type']); ?>&nbsp;</td>
		<td><?php echo h($userCard['UserCard']['grade_value']); ?>&nbsp;</td>
		<td><?php echo h($userCard['UserCard']['grade_number']); ?>&nbsp;</td>
		<td><?php echo h($userCard['UserCard']['own_card']); ?>&nbsp;</td>
		<td><?php echo h($userCard['UserCard']['active_sell']); ?>&nbsp;</td>
		<td><?php echo h($userCard['UserCard']['white_whale']); ?>&nbsp;</td>
		<td><?php echo h($userCard['UserCard']['front_img']); ?>&nbsp;</td>
		<td><?php echo h($userCard['UserCard']['rear_img']); ?>&nbsp;</td>
		<td><?php echo h($userCard['UserCard']['bought_date']); ?>&nbsp;</td>
		<td><?php echo h($userCard['UserCard']['listed_date']); ?>&nbsp;</td>
		<td><?php echo h($userCard['UserCard']['sell_price']); ?>&nbsp;</td>
		<td><?php echo h($userCard['UserCard']['low_price']); ?>&nbsp;</td>
		<td><?php echo h($userCard['UserCard']['high_price']); ?>&nbsp;</td>
		<td><?php echo h($userCard['UserCard']['private_notes']); ?>&nbsp;</td>
		<td><?php echo h($userCard['UserCard']['public_notes']); ?>&nbsp;</td>
		<td><?php echo h($userCard['UserCard']['created']); ?>&nbsp;</td>
		<td><?php echo h($userCard['UserCard']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userCard['UserCard']['user_card_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userCard['UserCard']['user_card_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userCard['UserCard']['user_card_id']), null, __('Are you sure you want to delete # %s?', $userCard['UserCard']['user_card_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User Card'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Variations'), array('controller' => 'card_variations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation'), array('controller' => 'card_variations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qualifiers'), array('controller' => 'qualifiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qualifier'), array('controller' => 'qualifiers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Themes'), array('controller' => 'themes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Theme'), array('controller' => 'themes', 'action' => 'add')); ?> </li>
	</ul>
</div>
