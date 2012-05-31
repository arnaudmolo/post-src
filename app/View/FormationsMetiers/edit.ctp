<div class="formationsMetiers form">
<?php echo $this->Form->create('FormationsMetier');?>
	<fieldset>
		<legend><?php echo __('Edit Formations Metier'); ?></legend>
	<?php
		echo $this->Form->input('formation_id');
		echo $this->Form->input('metier_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FormationsMetier.formation_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FormationsMetier.formation_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Formations Metiers'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metiers'), array('controller' => 'metiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metier'), array('controller' => 'metiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
