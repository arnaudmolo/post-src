<div class="metiersUsers index">
	<h2><?php echo __('Metiers Users');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('metier_id');?></th>
			<th><?php echo $this->Paginator->sort('titre');?></th>
			<th><?php echo $this->Paginator->sort('avi');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($metiersUsers as $metiersUser): ?>
	<tr>
		<td><?php echo h($metiersUser['MetiersUser']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($metiersUser['User']['id'], array('controller' => 'users', 'action' => 'view', $metiersUser['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($metiersUser['Metier']['id'], array('controller' => 'metiers', 'action' => 'view', $metiersUser['Metier']['id'])); ?>
		</td>
		<td><?php echo h($metiersUser['MetiersUser']['titre']); ?>&nbsp;</td>
		<td><?php echo h($metiersUser['MetiersUser']['avi']); ?>&nbsp;</td>
		<td><?php echo h($metiersUser['MetiersUser']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $metiersUser['MetiersUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $metiersUser['MetiersUser']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $metiersUser['MetiersUser']['id']), null, __('Are you sure you want to delete # %s?', $metiersUser['MetiersUser']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Metiers User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metiers'), array('controller' => 'metiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metier'), array('controller' => 'metiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
