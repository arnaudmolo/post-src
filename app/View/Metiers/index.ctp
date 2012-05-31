<div class="metiers index">
	<h2><?php echo __('Metiers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('contenu');?></th>
			<th><?php echo $this->Paginator->sort('creation');?></th>
			<th><?php echo $this->Paginator->sort('communication');?></th>
			<th><?php echo $this->Paginator->sort('developpement');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($metiers as $metier): ?>
	<tr>
		<td><?php echo h($metier['Metier']['id']); ?>&nbsp;</td>
		<td><?php echo h($metier['Metier']['contenu']); ?>&nbsp;</td>
		<td><?php echo h($metier['Metier']['creation']); ?>&nbsp;</td>
		<td><?php echo h($metier['Metier']['communication']); ?>&nbsp;</td>
		<td><?php echo h($metier['Metier']['developpement']); ?>&nbsp;</td>
		<td><?php echo h($metier['Metier']['title']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $metier['Metier']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $metier['Metier']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $metier['Metier']['id']), null, __('Are you sure you want to delete # %s?', $metier['Metier']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Metier'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
