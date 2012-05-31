<div class="metiers view">
<h2><?php  echo __('Metier');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($metier['Metier']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contenu'); ?></dt>
		<dd>
			<?php echo h($metier['Metier']['contenu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation'); ?></dt>
		<dd>
			<?php echo h($metier['Metier']['creation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Communication'); ?></dt>
		<dd>
			<?php echo h($metier['Metier']['communication']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Developpement'); ?></dt>
		<dd>
			<?php echo h($metier['Metier']['developpement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($metier['Metier']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Metier'), array('action' => 'edit', $metier['Metier']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Metier'), array('action' => 'delete', $metier['Metier']['id']), null, __('Are you sure you want to delete # %s?', $metier['Metier']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Metiers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metier'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Formations');?></h3>
	<?php if (!empty($metier['Formation'])):?>
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
		foreach ($metier['Formation'] as $formation): ?>
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
	<h3><?php echo __('Related Users');?></h3>
	<?php if (!empty($metier['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Location User'); ?></th>
		<th><?php echo __('Born User'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Annee Entree'); ?></th>
		<th><?php echo __('Annee Sortie'); ?></th>
		<th><?php echo __('Date Inscription'); ?></th>
		<th><?php echo __('Last Connexion'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Facebook'); ?></th>
		<th><?php echo __('Twitter'); ?></th>
		<th><?php echo __('Youtube'); ?></th>
		<th><?php echo __('Doyoubuzz'); ?></th>
		<th><?php echo __('Yupeek'); ?></th>
		<th><?php echo __('Viadeo'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($metier['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['username'];?></td>
			<td><?php echo $user['first_name'];?></td>
			<td><?php echo $user['last_name'];?></td>
			<td><?php echo $user['location_user'];?></td>
			<td><?php echo $user['born_user'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['annee_entree'];?></td>
			<td><?php echo $user['annee_sortie'];?></td>
			<td><?php echo $user['date_inscription'];?></td>
			<td><?php echo $user['last_connexion'];?></td>
			<td><?php echo $user['role'];?></td>
			<td><?php echo $user['active'];?></td>
			<td><?php echo $user['facebook'];?></td>
			<td><?php echo $user['twitter'];?></td>
			<td><?php echo $user['youtube'];?></td>
			<td><?php echo $user['doyoubuzz'];?></td>
			<td><?php echo $user['yupeek'];?></td>
			<td><?php echo $user['viadeo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
