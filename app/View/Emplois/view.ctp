<div class="emplois view">
<h2><?php  echo __('Emplois');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($emplois['Emplois']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entreprise'); ?></dt>
		<dd>
			<?php echo h($emplois['Emplois']['entreprise']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fonction'); ?></dt>
		<dd>
			<?php echo h($emplois['Emplois']['fonction']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Debut'); ?></dt>
		<dd>
			<?php echo h($emplois['Emplois']['date_debut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Fin'); ?></dt>
		<dd>
			<?php echo h($emplois['Emplois']['date_fin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actuel'); ?></dt>
		<dd>
			<?php echo h($emplois['Emplois']['actuel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($emplois['User']['id'], array('controller' => 'users', 'action' => 'view', $emplois['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Emplois'), array('action' => 'edit', $emplois['Emplois']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Emplois'), array('action' => 'delete', $emplois['Emplois']['id']), null, __('Are you sure you want to delete # %s?', $emplois['Emplois']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Emplois'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emplois'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
