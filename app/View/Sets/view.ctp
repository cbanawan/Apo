<div class="sets view">
<h2><?php  echo __('Set');?></h2>
	<dl>
		<dt><?php echo __('Set Id'); ?></dt>
		<dd>
			<?php echo h($set['Set']['set_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($set['Set']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wiki Info'); ?></dt>
		<dd>
			<?php echo $this->Html->link($set['WikiInfo']['wiki_info_id'], array('controller' => 'wiki_infos', 'action' => 'view', $set['WikiInfo']['wiki_info_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dist Start Year'); ?></dt>
		<dd>
			<?php echo h($set['Set']['dist_start_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dist End Year'); ?></dt>
		<dd>
			<?php echo h($set['Set']['dist_end_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo $this->Html->link($set['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $set['Brand']['brand_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acc Catalog'); ?></dt>
		<dd>
			<?php echo $this->Html->link($set['AccCatalog']['name'], array('controller' => 'acc_catalogs', 'action' => 'view', $set['AccCatalog']['acc_catalog_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($set['Set']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Set'), array('action' => 'edit', $set['Set']['set_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Set'), array('action' => 'delete', $set['Set']['set_id']), null, __('Are you sure you want to delete # %s?', $set['Set']['set_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wiki Infos'), array('controller' => 'wiki_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wiki Info'), array('controller' => 'wiki_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acc Catalogs'), array('controller' => 'acc_catalogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acc Catalog'), array('controller' => 'acc_catalogs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cards');?></h3>
	<?php if (!empty($set['Card'])):?>
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
		foreach ($set['Card'] as $card): ?>
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
