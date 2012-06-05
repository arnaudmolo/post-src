<div class="formations index">
	<h2><?php echo __('Formations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('contenu');?></th>
			<th><?php echo $this->Paginator->sort('location');?></th>
			<th><?php echo $this->Paginator->sort('niveau');?></th>
			<th><?php echo $this->Paginator->sort('school_name');?></th>
			<th><?php echo $this->Paginator->sort('school_url');?></th>
			<th><?php echo $this->Paginator->sort('creation');?></th>
			<th><?php echo $this->Paginator->sort('communication');?></th>
			<th><?php echo $this->Paginator->sort('developpement');?></th>
			<th><?php echo $this->Paginator->sort('creatif');?></th>
			<th><?php echo $this->Paginator->sort('public');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($formations as $formation): ?>
	<tr>
		<td><?php echo h($formation['Formation']['id']); ?>&nbsp;</td>
		<td><?php echo h($formation['Formation']['title']); ?>&nbsp;</td>
		<td><?php echo h($formation['Formation']['contenu']); ?>&nbsp;</td>
		<td><?php echo h($formation['Formation']['location']); ?>&nbsp;</td>
		<td><?php echo h($formation['Formation']['niveau']); ?>&nbsp;</td>
		<td><?php echo h($formation['Formation']['school_name']); ?>&nbsp;</td>
		<td><?php echo h($formation['Formation']['school_url']); ?>&nbsp;</td>
		<td><?php echo h($formation['Formation']['creation']); ?>&nbsp;</td>
		<td><?php echo h($formation['Formation']['communication']); ?>&nbsp;</td>
		<td><?php echo h($formation['Formation']['developpement']); ?>&nbsp;</td>
		<td><?php echo h($formation['Formation']['creatif']); ?>&nbsp;</td>
		<td><?php echo h($formation['Formation']['public']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $formation['Formation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $formation['Formation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $formation['Formation']['id']), null, __('Are you sure you want to delete # %s?', $formation['Formation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Formation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Formations Users'), array('controller' => 'formations_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formations Users'), array('controller' => 'formations_users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metiers'), array('controller' => 'metiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metier'), array('controller' => 'metiers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
