<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('location_user');
		echo $this->Form->input('born_user');
		echo $this->Form->input('password');
		echo $this->Form->input('annee_entree');
		echo $this->Form->input('annee_sortie');
		echo $this->Form->input('date_inscription');
		echo $this->Form->input('last_connexion');
		echo $this->Form->input('active');
		echo $this->Form->input('facebook');
		echo $this->Form->input('twitter');
		echo $this->Form->input('youtube');
		echo $this->Form->input('doyoubuzz');
		echo $this->Form->input('yupeek');
		echo $this->Form->input('viadeo');
		echo $this->Form->input('Formation');
		echo $this->Form->input('Metier');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Annonces'), array('controller' => 'annonces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annonce'), array('controller' => 'annonces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emplois'), array('controller' => 'emplois', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emplois'), array('controller' => 'emplois', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metiers'), array('controller' => 'metiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metier'), array('controller' => 'metiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
