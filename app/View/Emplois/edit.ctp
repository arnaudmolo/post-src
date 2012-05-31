<div class="emplois form">
<?php echo $this->Form->create('Emplois');?>
	<fieldset>
		<legend><?php echo __('Edit Emplois'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('entreprise');
		echo $this->Form->input('fonction');
		echo $this->Form->input('date_debut');
		echo $this->Form->input('date_fin');
		echo $this->Form->input('actuel');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Emplois.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Emplois.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Emplois'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
