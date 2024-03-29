<div class="userCards view">
<h2><?php  echo __('User Card');?></h2>
	<dl>
		<dt><?php echo __('User Card Id'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['user_card_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userCard['User']['user_id'], array('controller' => 'users', 'action' => 'view', $userCard['User']['user_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Variation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userCard['CardVariation']['card_variation_id'], array('controller' => 'card_variations', 'action' => 'view', $userCard['CardVariation']['card_variation_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grade Type'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['grade_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grade Value'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['grade_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grade Number'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['grade_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Own Card'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['own_card']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active Sell'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['active_sell']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('White Whale'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['white_whale']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Front Img'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['front_img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rear Img'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['rear_img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bought Date'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['bought_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Listed Date'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['listed_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sell Price'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['sell_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Low Price'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['low_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('High Price'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['high_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Private Notes'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['private_notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Public Notes'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['public_notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Card'), array('action' => 'edit', $userCard['UserCard']['user_card_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Card'), array('action' => 'delete', $userCard['UserCard']['user_card_id']), null, __('Are you sure you want to delete # %s?', $userCard['UserCard']['user_card_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Qualifiers');?></h3>
	<?php if (!empty($userCard['Qualifier'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Qualifier Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userCard['Qualifier'] as $qualifier): ?>
		<tr>
			<td><?php echo $qualifier['qualifier_id'];?></td>
			<td><?php echo $qualifier['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'qualifiers', 'action' => 'view', $qualifier['qualifier_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'qualifiers', 'action' => 'edit', $qualifier['qualifier_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'qualifiers', 'action' => 'delete', $qualifier['qualifier_id']), null, __('Are you sure you want to delete # %s?', $qualifier['qualifier_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Qualifier'), array('controller' => 'qualifiers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Themes');?></h3>
	<?php if (!empty($userCard['Theme'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Theme Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userCard['Theme'] as $theme): ?>
		<tr>
			<td><?php echo $theme['theme_id'];?></td>
			<td><?php echo $theme['name'];?></td>
			<td><?php echo $theme['user_id'];?></td>
			<td><?php echo $theme['parent_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'themes', 'action' => 'view', $theme['theme_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'themes', 'action' => 'edit', $theme['theme_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'themes', 'action' => 'delete', $theme['theme_id']), null, __('Are you sure you want to delete # %s?', $theme['theme_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Theme'), array('controller' => 'themes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
