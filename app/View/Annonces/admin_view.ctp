<div class="annonces view">
<h2><?php  echo __('Annonce');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($annonce['Annonce']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($annonce['Annonce']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type Recherche'); ?></dt>
		<dd>
			<?php echo h($annonce['Annonce']['type_recherche']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Domaine'); ?></dt>
		<dd>
			<?php echo h($annonce['Annonce']['domaine']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Localisation'); ?></dt>
		<dd>
			<?php echo h($annonce['Annonce']['localisation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entreprise Annonce'); ?></dt>
		<dd>
			<?php echo h($annonce['Annonce']['entreprise_annonce']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Entreprise'); ?></dt>
		<dd>
			<?php echo h($annonce['Annonce']['url_entreprise']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contenu'); ?></dt>
		<dd>
			<?php echo h($annonce['Annonce']['contenu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($annonce['User']['id'], array('controller' => 'users', 'action' => 'view', $annonce['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Annonce'), array('action' => 'edit', $annonce['Annonce']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Annonce'), array('action' => 'delete', $annonce['Annonce']['id']), null, __('Are you sure you want to delete # %s?', $annonce['Annonce']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Annonces'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annonce'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
