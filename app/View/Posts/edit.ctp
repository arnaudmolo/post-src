<div class="posts form">
<?php echo $this->Form->create('Post');?>
	<fieldset>
		<legend><?php echo __('Edit Post'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('slug');
		echo $this->Form->input('content');
		echo $this->Form->input('type');
		echo $this->Form->input('date');
		echo $this->Form->input('online');
		echo $this->Form->input('user_id');
		echo $this->Form->input('Term', array('label'=>"Taxonomy","type"=>'select','multiple'=>'checkbox'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Post.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Post.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terms'), array('controller' => 'terms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Term'), array('controller' => 'terms', 'action' => 'add')); ?> </li>
	</ul>
</div>
