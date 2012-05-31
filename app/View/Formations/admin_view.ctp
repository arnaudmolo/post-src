<div class="formations view">
<h2><?php  echo __('Formation');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contenu'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['contenu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Niveau'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['niveau']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School Name'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['school_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School Url'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['school_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['creation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Communication'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['communication']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Developpement'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['developpement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creatif'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['creatif']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Public'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['public']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Formation'), array('action' => 'edit', $formation['Formation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Formation'), array('action' => 'delete', $formation['Formation']['id']), null, __('Are you sure you want to delete # %s?', $formation['Formation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Formations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metiers'), array('controller' => 'metiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metier'), array('controller' => 'metiers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Metiers');?></h3>
	<?php if (!empty($formation['Metier'])):?>
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
		foreach ($formation['Metier'] as $metier): ?>
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
<div class="related">
	<h3><?php echo __('Related Users');?></h3>
	<?php if (!empty($formation['User'])):?>
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
		foreach ($formation['User'] as $user): ?>
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
