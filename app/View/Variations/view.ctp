<div class="variations view">
<h2><?php  echo __('Variation');?></h2>
	<dl>
		<dt><?php echo __('Variation Id'); ?></dt>
		<dd>
			<?php echo h($variation['Variation']['variation_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($variation['Variation']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Front Img'); ?></dt>
		<dd>
			<?php echo h($variation['Variation']['front_img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rear Img'); ?></dt>
		<dd>
			<?php echo h($variation['Variation']['rear_img']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Variation'), array('action' => 'edit', $variation['Variation']['variation_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Variation'), array('action' => 'delete', $variation['Variation']['variation_id']), null, __('Are you sure you want to delete # %s?', $variation['Variation']['variation_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Variations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cards');?></h3>
	<?php if (!empty($variation['Card'])):?>
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
		foreach ($variation['Card'] as $card): ?>
		<tr>
			<td><?php echo $card['card_id'];?></td>
			<td><?php echo $card['name'];?></td>
			<td><?php echo $card['card_number'];?></td>
			<td><?php echo $card['set_id'];?></td>
			<td><?php echo $card['wiki_info_id'];?></td>
			<td><?php echo $card['team_id'];?></td>
			<td><?php echo $card['dist_start_year'];?></td>
			<td><?php echo $card['dist_end_year'];?></td>
			<td><?php echo $card['notes'];?></td>
			<td><?php echo $card['created'];?></td>
			<td><?php echo $card['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cards', 'action' => 'view', $card['card_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cards', 'action' => 'edit', $card['card_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cards', 'action' => 'delete', $card['card_id']), null, __('Are you sure you want to delete # %s?', $card['card_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
