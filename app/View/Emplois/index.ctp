<div class="emplois index">
	<h2><?php echo __('Emplois');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('entreprise');?></th>
			<th><?php echo $this->Paginator->sort('fonction');?></th>
			<th><?php echo $this->Paginator->sort('date_debut');?></th>
			<th><?php echo $this->Paginator->sort('date_fin');?></th>
			<th><?php echo $this->Paginator->sort('actuel');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($emplois as $emplois): ?>
	<tr>
		<td><?php echo h($emplois['Emplois']['id']); ?>&nbsp;</td>
		<td><?php echo h($emplois['Emplois']['entreprise']); ?>&nbsp;</td>
		<td><?php echo h($emplois['Emplois']['fonction']); ?>&nbsp;</td>
		<td><?php echo h($emplois['Emplois']['date_debut']); ?>&nbsp;</td>
		<td><?php echo h($emplois['Emplois']['date_fin']); ?>&nbsp;</td>
		<td><?php echo h($emplois['Emplois']['actuel']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($emplois['User']['id'], array('controller' => 'users', 'action' => 'view', $emplois['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $emplois['Emplois']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $emplois['Emplois']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $emplois['Emplois']['id']), null, __('Are you sure you want to delete # %s?', $emplois['Emplois']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Emplois'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
