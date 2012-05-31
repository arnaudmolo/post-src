<div class="annonces form">
<?php echo $this->Form->create('Annonce');?>
	<fieldset>
		<legend><?php echo __('Add Annonce'); ?></legend>
	<?php
		echo $this->Form->input('titre');
		echo $this->Form->input('type_recherche');
		echo $this->Form->input('domaine');
		echo $this->Form->input('localisation');
		echo $this->Form->input('entreprise_annonce');
		echo $this->Form->input('url_entreprise');
		echo $this->Form->input('contenu');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Annonces'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
