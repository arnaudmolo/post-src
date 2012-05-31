<div class="formationsUsers form">
<?php echo $this->Form->create('FormationsUser');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Formations User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('formation_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('titre');
		echo $this->Form->input('avi');
		echo $this->Form->input('date');
		echo $this->Form->input('obtention');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FormationsUser.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FormationsUser.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Formations Users'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
