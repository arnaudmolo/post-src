<div class="formationsMetiers view">
<h2><?php  echo __('Formations Metier');?></h2>
	<dl>
		<dt><?php echo __('Formation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($formationsMetier['Formation']['title'], array('controller' => 'formations', 'action' => 'view', $formationsMetier['Formation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metier'); ?></dt>
		<dd>
			<?php echo $this->Html->link($formationsMetier['Metier']['id'], array('controller' => 'metiers', 'action' => 'view', $formationsMetier['Metier']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Formations Metier'), array('action' => 'edit', $formationsMetier['FormationsMetier']['formation_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Formations Metier'), array('action' => 'delete', $formationsMetier['FormationsMetier']['formation_id']), null, __('Are you sure you want to delete # %s?', $formationsMetier['FormationsMetier']['formation_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Formations Metiers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formations Metier'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metiers'), array('controller' => 'metiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metier'), array('controller' => 'metiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
