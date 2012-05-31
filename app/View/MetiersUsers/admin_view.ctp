<div class="metiersUsers view">
<h2><?php  echo __('Metiers User');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($metiersUser['MetiersUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($metiersUser['User']['id'], array('controller' => 'users', 'action' => 'view', $metiersUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metier'); ?></dt>
		<dd>
			<?php echo $this->Html->link($metiersUser['Metier']['id'], array('controller' => 'metiers', 'action' => 'view', $metiersUser['Metier']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($metiersUser['MetiersUser']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Avi'); ?></dt>
		<dd>
			<?php echo h($metiersUser['MetiersUser']['avi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($metiersUser['MetiersUser']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Metiers User'), array('action' => 'edit', $metiersUser['MetiersUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Metiers User'), array('action' => 'delete', $metiersUser['MetiersUser']['id']), null, __('Are you sure you want to delete # %s?', $metiersUser['MetiersUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Metiers Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metiers User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metiers'), array('controller' => 'metiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metier'), array('controller' => 'metiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
