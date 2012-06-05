<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Inscription'); ?></legend>
	<?php
		echo $this->Form->input('username', array(
			'label'=>'Votre adresse email',
			'placeholder'=>'Votre adresse email'));
		echo $this->Form->input('first_name', array(
			'label'=>'Votre prenom',
			'placeholder'=>'Votre prenom'));
		echo $this->Form->input('last_name', array(
			'label'=>'Votre nom de famille',
			'placeholder'=>'Votre nom de famille'));
		echo $this->Form->input('location_user');
		echo $this->Form->input('born_user', array(
			'label'=>'Votre date de naissance',
			'minYear'=>1940,
			'maxYear'=>date('Y')-15,
			'type'=>'text',
			'class'=>'datepicker',
			'data-format'=>'yy-mm-dd'
			));
		echo $this->Form->input('password');
		echo $this->Form->input('annee_entree', array(
			'label'=>'Votre date d\'entrée en DUT SRC',
			'minYear'=>1996,
			'maxYear'=>date('Y'),
			'type'=>'text',
			'class'=>'datepicker',
			'data-format'=>'yy'
			));
		echo $this->Form->input('annee_sortie', array(
			'label'=>'En quelle année avez vous eu votre diplome ?',
			'minYear'=>1998,
			'maxYear'=>date('Y'),
			'type'=>'text',
			'class'=>'datepicker',
			'data-format'=>'yy'
			));
		echo $this->Form->input('date_inscription', array('type'=>'hidden'));
		echo $this->Form->input('last_connexion', array('type'=>'hidden'));
		echo $this->Form->input('active', array('type'=>'hidden'));
		echo $this->Form->input('facebook', array(
			'label'=>'Facebook',
			'placeholder'=>'Entre l\'adresse de votre page facebook'));
		echo $this->Form->input('twitter', array(
			'label'=>'Twitter',
			'placeholder'=>'Entre votre nom d\'utilisateur Twitter'));
		echo $this->Form->input('youtube', array(
			'label'=>'Youtube',
			'placeholder'=>'Entre l\'adresse de votre page Youtube'));
		echo $this->Form->input('doyoubuzz', array(
			'label'=>'DeYouBuzz',
			'placeholder'=>'Entrez l\'adresse de votre compte DeYouBuzz'));
		echo $this->Form->input('yupeek', array(
			'label'=>'YuPeek',
			'placeholder'=>'Entrez l\'adresse de votre compte YuPeek'));
		echo $this->Form->input('viadeo', array(
			'label'=>'Viadeo',
			'placeholder'=>'Entrez l\'adresse de votre compte Viadeo'));
		echo $this->Form->input('Formation');
		echo $this->Form->input('Metier');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Annonces'), array('controller' => 'annonces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annonce'), array('controller' => 'annonces', 'action' => 'signup')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emplois'), array('controller' => 'emplois', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Emplois'), array('controller' => 'emplois', 'action' => 'signup')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'signup')); ?> </li>
		<li><?php echo $this->Html->link(__('List Metiers'), array('controller' => 'metiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Metier'), array('controller' => 'metiers', 'action' => 'signup')); ?> </li>
	</ul>
</div>
<?php $this->Html->script('jquery-ui.datepicker.js', array('inline'=>false)); ?>
<?php echo $this->Html->css('ui-lightness/jqui.css'); ?>
<?php $this->Html->scriptStart(array('inline'=>false)); ?>
	$(function() {
		$.each($('.datepicker'),
			function(index,value){
				var theDP = $('#ui-datepicker-div');
				$(value).datepicker({
				dateFormat:$(value).data('format'),
				changeMonth:true, changeYear:true,
				dayNames: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"],
				dayNamesMin: ["Di", "Lu", "Ma", "Me", "Je", "Ve", "Sa"],
				dayNamesShort: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"],
				firstDay:1,
				yearRange:$(value).attr('minyear')+":"+$(value).attr('maxyear'),
				monthNames: ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juiller","Aout","Septembre","Octobre","Novembre","Decembre"],
				monthNamesShort: ["Jan","Fev","Mar","Avr","Mai","Jun","Jul","Aou","Sep","Oct","Nov","Dec"],
				showAnim:"slideDown",
				showButtonPanel: true,
				 gotoCurrent: true,
				/*beforeShow:function(input,inst){
					if($(value).data('format')==='yy'){
						theDP.addClass('only-year');
					}
				},
				onClose:function(dateText,inst){
					if(theDP.hasClass('only-year')){
						theDP.removeClass('only-year');
					}
				}*/
			});
		})
	});
<?php $this->Html->scriptEnd(); ?>