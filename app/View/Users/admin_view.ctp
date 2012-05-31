<div class="users view">
<h2><?php  echo __('User');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location User'); ?></dt>
		<dd>
			<?php echo h($user['User']['location_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Born User'); ?></dt>
		<dd>
			<?php echo h($user['User']['born_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Annee Entree'); ?></dt>
		<dd>
			<?php echo h($user['User']['annee_entree']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Annee Sortie'); ?></dt>
		<dd>
			<?php echo h($user['User']['annee_sortie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Inscription'); ?></dt>
		<dd>
			<?php echo h($user['User']['date_inscription']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Connexion'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_connexion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($user['User']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook'); ?></dt>
		<dd>
			<?php echo h($user['User']['facebook']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter'); ?></dt>
		<dd>
			<?php echo h($user['User']['twitter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Youtube'); ?></dt>
		<dd>
			<?php echo h($user['User']['youtube']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doyoubuzz'); ?></dt>
		<dd>
			<?php echo h($user['User']['doyoubuzz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Yupeek'); ?></dt>
		<dd>
			<?php echo h($user['User']['yupeek']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Viadeo'); ?></dt>
		<dd>
			<?php echo h($user['User']['viadeo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Annonces'), array('controller' => 'annonces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annonce'), array('controller' => 'annonces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emplois'), array('controller' => 'emplois', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emplois'), array('controller' => 'emplois', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metiers'), array('controller' => 'metiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metier'), array('controller' => 'metiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Annonces');?></h3>
	<?php if (!empty($user['Annonce'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titre'); ?></th>
		<th><?php echo __('Type Recherche'); ?></th>
		<th><?php echo __('Domaine'); ?></th>
		<th><?php echo __('Localisation'); ?></th>
		<th><?php echo __('Entreprise Annonce'); ?></th>
		<th><?php echo __('Url Entreprise'); ?></th>
		<th><?php echo __('Contenu'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Annonce'] as $annonce): ?>
		<tr>
			<td><?php echo $annonce['id'];?></td>
			<td><?php echo $annonce['titre'];?></td>
			<td><?php echo $annonce['type_recherche'];?></td>
			<td><?php echo $annonce['domaine'];?></td>
			<td><?php echo $annonce['localisation'];?></td>
			<td><?php echo $annonce['entreprise_annonce'];?></td>
			<td><?php echo $annonce['url_entreprise'];?></td>
			<td><?php echo $annonce['contenu'];?></td>
			<td><?php echo $annonce['user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'annonces', 'action' => 'view', $annonce['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'annonces', 'action' => 'edit', $annonce['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'annonces', 'action' => 'delete', $annonce['id']), null, __('Are you sure you want to delete # %s?', $annonce['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Annonce'), array('controller' => 'annonces', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Emplois');?></h3>
	<?php if (!empty($user['Emplois'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Entreprise'); ?></th>
		<th><?php echo __('Fonction'); ?></th>
		<th><?php echo __('Date Debut'); ?></th>
		<th><?php echo __('Date Fin'); ?></th>
		<th><?php echo __('Actuel'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Emplois'] as $emplois): ?>
		<tr>
			<td><?php echo $emplois['id'];?></td>
			<td><?php echo $emplois['entreprise'];?></td>
			<td><?php echo $emplois['fonction'];?></td>
			<td><?php echo $emplois['date_debut'];?></td>
			<td><?php echo $emplois['date_fin'];?></td>
			<td><?php echo $emplois['actuel'];?></td>
			<td><?php echo $emplois['user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'emplois', 'action' => 'view', $emplois['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'emplois', 'action' => 'edit', $emplois['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'emplois', 'action' => 'delete', $emplois['id']), null, __('Are you sure you want to delete # %s?', $emplois['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Emplois'), array('controller' => 'emplois', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Formations');?></h3>
	<?php if (!empty($user['Formation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Contenu'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Niveau'); ?></th>
		<th><?php echo __('School Name'); ?></th>
		<th><?php echo __('School Url'); ?></th>
		<th><?php echo __('Creation'); ?></th>
		<th><?php echo __('Communication'); ?></th>
		<th><?php echo __('Developpement'); ?></th>
		<th><?php echo __('Creatif'); ?></th>
		<th><?php echo __('Public'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Formation'] as $formation): ?>
		<tr>
			<td><?php echo $formation['id'];?></td>
			<td><?php echo $formation['title'];?></td>
			<td><?php echo $formation['contenu'];?></td>
			<td><?php echo $formation['location'];?></td>
			<td><?php echo $formation['niveau'];?></td>
			<td><?php echo $formation['school_name'];?></td>
			<td><?php echo $formation['school_url'];?></td>
			<td><?php echo $formation['creation'];?></td>
			<td><?php echo $formation['communication'];?></td>
			<td><?php echo $formation['developpement'];?></td>
			<td><?php echo $formation['creatif'];?></td>
			<td><?php echo $formation['public'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'formations', 'action' => 'view', $formation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'formations', 'action' => 'edit', $formation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'formations', 'action' => 'delete', $formation['id']), null, __('Are you sure you want to delete # %s?', $formation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Metiers');?></h3>
	<?php if (!empty($user['Metier'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Contenu'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Creation'); ?></th>
		<th><?php echo __('Communication'); ?></th>
		<th><?php echo __('Developpement'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Metier'] as $metier): ?>
		<tr>
			<td><?php echo $metier['id'];?></td>
			<td><?php echo $metier['contenu'];?></td>
			<td><?php echo $metier['date'];?></td>
			<td><?php echo $metier['creation'];?></td>
			<td><?php echo $metier['communication'];?></td>
			<td><?php echo $metier['developpement'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'metiers', 'action' => 'view', $metier['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'metiers', 'action' => 'edit', $metier['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'metiers', 'action' => 'delete', $metier['id']), null, __('Are you sure you want to delete # %s?', $metier['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Metier'), array('controller' => 'metiers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
