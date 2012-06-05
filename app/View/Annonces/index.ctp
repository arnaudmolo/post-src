<div class="annonces index">
	<h2><?php echo __('Annonces');?></h2>
	<table cellpadding="0" cellspacing="0">
	<?php
	foreach ($annonces as $annonce): ?>
	<?php $user = $annonce['User']; ?>
	<tr>
		<td><?php echo h($annonce['Annonce']['id']); ?>&nbsp;</td>
		<td><?php echo h($annonce['Annonce']['titre']); ?>&nbsp;</td>
		<td><?php echo h($annonce['Annonce']['type_recherche']); ?>&nbsp;</td>
		<td><?php echo h($annonce['Annonce']['domaine']); ?>&nbsp;</td>
		<td><?php echo h($annonce['Annonce']['localisation']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($annonce['Annonce']['entreprise_annonce'],$annonce['Annonce']['url_entreprise'], array("target"=>"_blanc")); ?></td>
		<td>
			<?php echo $this->Html->link($user['first_name']." ".$user['last_name'], array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $annonce['Annonce']['id'])); ?>
			<?php ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $annonce['Annonce']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $annonce['Annonce']['id']), null, __('Are you sure you want to delete # %s?', $annonce['Annonce']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Annonce'), array('action' => 'signin')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'signin')); ?> </li>
	</ul>
</div>
