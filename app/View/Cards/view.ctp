<div class="cards view">
<h2><?php  echo __('Card');?></h2>
	<dl>
		<dt><?php echo __('Card Id'); ?></dt>
		<dd>
			<?php echo h($card['Card']['card_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($card['Card']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Number'); ?></dt>
		<dd>
			<?php echo h($card['Card']['card_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Set'); ?></dt>
		<dd>
			<?php echo $this->Html->link($card['Set']['name'], array('controller' => 'sets', 'action' => 'view', $card['Set']['set_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wiki Info'); ?></dt>
		<dd>
			<?php echo $this->Html->link($card['WikiInfo']['wiki_info_id'], array('controller' => 'wiki_infos', 'action' => 'view', $card['WikiInfo']['wiki_info_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($card['Team']['name'], array('controller' => 'teams', 'action' => 'view', $card['Team']['team_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dist Start Year'); ?></dt>
		<dd>
			<?php echo h($card['Card']['dist_start_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dist End Year'); ?></dt>
		<dd>
			<?php echo h($card['Card']['dist_end_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($card['Card']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($card['Card']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($card['Card']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Card'), array('action' => 'edit', $card['Card']['card_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Card'), array('action' => 'delete', $card['Card']['card_id']), null, __('Are you sure you want to delete # %s?', $card['Card']['card_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Users');?></h3>
	<?php if (!empty($card['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('User Name'); ?></th>
		<th><?php echo __('Paypal Account Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($card['User'] as $user): ?>
		<tr>
			<td><?php echo $user['user_id'];?></td>
			<td><?php echo $user['first_name'];?></td>
			<td><?php echo $user['last_name'];?></td>
			<td><?php echo $user['user_name'];?></td>
			<td><?php echo $user['paypal_account_name'];?></td>
			<td><?php echo $user['address'];?></td>
			<td><?php echo $user['phone'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['user_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['user_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['user_id']), null, __('Are you sure you want to delete # %s?', $user['user_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cards');?></h3>
	<?php if (!empty($card['Variation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Card Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Card Number'); ?></th>
		<th><?php echo __('Set Id'); ?></th>
		<th><?php echo __('Wiki Info Id'); ?></th>
		<th><?php echo __('Team Id'); ?></th>
		<th><?php echo __('Dist Start Year'); ?></th>
		<th><?php echo __('Dist End Year'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($card['Variation'] as $variation): ?>
		<tr>
			<td><?php echo $variation['card_id'];?></td>
			<td><?php echo $variation['name'];?></td>
			<td><?php echo $variation['card_number'];?></td>
			<td><?php echo $variation['set_id'];?></td>
			<td><?php echo $variation['wiki_info_id'];?></td>
			<td><?php echo $variation['team_id'];?></td>
			<td><?php echo $variation['dist_start_year'];?></td>
			<td><?php echo $variation['dist_end_year'];?></td>
			<td><?php echo $variation['notes'];?></td>
			<td><?php echo $variation['created'];?></td>
			<td><?php echo $variation['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cards', 'action' => 'view', $variation['card_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cards', 'action' => 'edit', $variation['card_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cards', 'action' => 'delete', $variation['card_id']), null, __('Are you sure you want to delete # %s?', $variation['card_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Variation'), array('controller' => 'cards', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
