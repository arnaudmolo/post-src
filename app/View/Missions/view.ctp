<div class="missions view">
<h2><?php  echo __('Mission');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mission['Mission']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Intitule'); ?></dt>
		<dd>
			<?php echo h($mission['Mission']['intitule']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($mission['Mission']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo Client'); ?></dt>
		<dd>
			<?php echo h($mission['Mission']['logo_client']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emploi'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mission['Emploi']['id'], array('controller' => 'emplois', 'action' => 'view', $mission['Emploi']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($mission['Mission']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mission'), array('action' => 'edit', $mission['Mission']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mission'), array('action' => 'delete', $mission['Mission']['id']), null, __('Are you sure you want to delete # %s?', $mission['Mission']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Missions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mission'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emplois'), array('controller' => 'emplois', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emploi'), array('controller' => 'emplois', 'action' => 'add')); ?> </li>
	</ul>
</div>
