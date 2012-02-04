<?php

if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>

<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>

<h3><?php echo __d('cake_dev', 'Admin Links'); ?></h3>
<p>
	<?php
		echo $this->Html->link(
			sprintf('<strong>%s</strong> %s', __d('cake_dev', 'New'), __d('cake_dev', 'CakePHP 2.0 Docs')),
			'http://book.cakephp.org/2.0/en/',
			array('target' => '_blank', 'escape' => false)
		);
	?>
</p>

<h3><?php echo __d('cake_dev', 'Phase One Page Links'); ?></h3>
<p>
	<?php
		echo $this->Html->link(
			sprintf('<strong>%s</strong> %s', __d('cake_dev', 'New'), __d('cake_dev', 'CakePHP 2.0 Docs')),
			'http://book.cakephp.org/2.0/en/',
			array('target' => '_blank', 'escape' => false)
		);
	?>
</p>

