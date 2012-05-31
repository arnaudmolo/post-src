<div class="formationsUsers view">
<h2><?php  echo __('Formations User');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($formationsUser['FormationsUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Formation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($formationsUser['Formation']['title'], array('controller' => 'formations', 'action' => 'view', $formationsUser['Formation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($formationsUser['User']['id'], array('controller' => 'users', 'action' => 'view', $formationsUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($formationsUser['FormationsUser']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Avi'); ?></dt>
		<dd>
			<?php echo h($formationsUser['FormationsUser']['avi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($formationsUser['FormationsUser']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Obtention'); ?></dt>
		<dd>
			<?php echo h($formationsUser['FormationsUser']['obtention']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Formations User'), array('action' => 'edit', $formationsUser['FormationsUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Formations User'), array('action' => 'delete', $formationsUser['FormationsUser']['id']), null, __('Are you sure you want to delete # %s?', $formationsUser['FormationsUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Formations Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formations User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
