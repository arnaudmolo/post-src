<div class="formations form">
<?php echo $this->Form->create('Formation');?>
	<fieldset>
		<legend><?php echo __('Add Formation'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('contenu');
		echo $this->Form->input('location');
		echo $this->Form->input('niveau');
		echo $this->Form->input('school_name');
		echo $this->Form->input('school_url');
		echo $this->Form->input('creation');
		echo $this->Form->input('communication');
		echo $this->Form->input('developpement');
		echo $this->Form->input('creatif');
		echo $this->Form->input('public');
		echo $this->Form->input('Metier');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Formations'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Metiers'), array('controller' => 'metiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metier'), array('controller' => 'metiers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
