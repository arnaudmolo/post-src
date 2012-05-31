<div class="annonces index">
	<h2><?php echo __('Annonces');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('titre');?></th>
			<th><?php echo $this->Paginator->sort('type_recherche');?></th>
			<th><?php echo $this->Paginator->sort('domaine');?></th>
			<th><?php echo $this->Paginator->sort('localisation');?></th>
			<th><?php echo $this->Paginator->sort('entreprise_annonce');?></th>
			<th><?php echo $this->Paginator->sort('url_entreprise');?></th>
			<th><?php echo $this->Paginator->sort('contenu');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($annonces as $annonce): ?>
	<tr>
		<td><?php echo h($annonce['Annonce']['id']); ?>&nbsp;</td>
		<td><?php echo h($annonce['Annonce']['titre']); ?>&nbsp;</td>
		<td><?php echo h($annonce['Annonce']['type_recherche']); ?>&nbsp;</td>
		<td><?php echo h($annonce['Annonce']['domaine']); ?>&nbsp;</td>
		<td><?php echo h($annonce['Annonce']['localisation']); ?>&nbsp;</td>
		<td><?php echo h($annonce['Annonce']['entreprise_annonce']); ?>&nbsp;</td>
		<td><?php echo h($annonce['Annonce']['url_entreprise']); ?>&nbsp;</td>
		<td><?php echo h($annonce['Annonce']['contenu']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($annonce['User']['id'], array('controller' => 'users', 'action' => 'view', $annonce['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $annonce['Annonce']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $annonce['Annonce']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $annonce['Annonce']['id']), null, __('Are you sure you want to delete # %s?', $annonce['Annonce']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Annonce'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
