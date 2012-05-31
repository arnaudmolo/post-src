<div class="missions form">
<?php echo $this->Form->create('Mission');?>
	<fieldset>
		<legend><?php echo __('Admin Add Mission'); ?></legend>
	<?php
		echo $this->Form->input('intitule');
		echo $this->Form->input('description');
		echo $this->Form->input('logo_client');
		echo $this->Form->input('emploi_id');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Missions'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Emplois'), array('controller' => 'emplois', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emploi'), array('controller' => 'emplois', 'action' => 'add')); ?> </li>
	</ul>
</div>
