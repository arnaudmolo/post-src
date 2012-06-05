<div class="users index">
	<h2><?php echo __('Users');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('location_user');?></th>
			<th><?php echo $this->Paginator->sort('born_user');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('annee_entree');?></th>
			<th><?php echo $this->Paginator->sort('annee_sortie');?></th>
			<th><?php echo $this->Paginator->sort('date_inscription');?></th>
			<th><?php echo $this->Paginator->sort('last_connexion');?></th>
			<th><?php echo $this->Paginator->sort('role');?></th>
			<th><?php echo $this->Paginator->sort('active');?></th>
			<th><?php echo $this->Paginator->sort('facebook');?></th>
			<th><?php echo $this->Paginator->sort('twitter');?></th>
			<th><?php echo $this->Paginator->sort('youtube');?></th>
			<th><?php echo $this->Paginator->sort('doyoubuzz');?></th>
			<th><?php echo $this->Paginator->sort('yupeek');?></th>
			<th><?php echo $this->Paginator->sort('viadeo');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['location_user']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['born_user']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['annee_entree']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['annee_sortie']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['date_inscription']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['last_connexion']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['role']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['active']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['facebook']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['twitter']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['youtube']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['doyoubuzz']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['yupeek']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['viadeo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Annonces'), array('controller' => 'annonces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annonce'), array('controller' => 'annonces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emplois'), array('controller' => 'emplois', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emplois'), array('controller' => 'emplois', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metiers'), array('controller' => 'metiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metier'), array('controller' => 'metiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
