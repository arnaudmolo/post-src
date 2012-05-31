<div class="metiers form">
<?php echo $this->Form->create('Metier');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Metier'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('contenu');
		echo $this->Form->input('creation');
		echo $this->Form->input('communication');
		echo $this->Form->input('developpement');
		echo $this->Form->input('title');
		echo $this->Form->input('Formation');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Metier.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Metier.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Metiers'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
