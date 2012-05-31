<div class="metiersUsers form">
<?php echo $this->Form->create('MetiersUser');?>
	<fieldset>
		<legend><?php echo __('Add Metiers User'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('metier_id');
		echo $this->Form->input('titre');
		echo $this->Form->input('avi');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Metiers Users'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metiers'), array('controller' => 'metiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metier'), array('controller' => 'metiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
