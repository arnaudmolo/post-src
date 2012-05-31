<div class="formationsMetiers index">
	<h2><?php echo __('Formations Metiers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('formation_id');?></th>
			<th><?php echo $this->Paginator->sort('metier_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($formationsMetiers as $formationsMetier): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($formationsMetier['Formation']['title'], array('controller' => 'formations', 'action' => 'view', $formationsMetier['Formation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($formationsMetier['Metier']['id'], array('controller' => 'metiers', 'action' => 'view', $formationsMetier['Metier']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $formationsMetier['FormationsMetier']['formation_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $formationsMetier['FormationsMetier']['formation_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $formationsMetier['FormationsMetier']['formation_id']), null, __('Are you sure you want to delete # %s?', $formationsMetier['FormationsMetier']['formation_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Formations Metier'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metiers'), array('controller' => 'metiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metier'), array('controller' => 'metiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
