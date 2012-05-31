<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>
<div class="row mainRecherche" class="span9">
	<form name="recherche" action="search.php" method="get">
		<div class="row">
			<div class="span3">
				<fieldset>
					<div class="recherche">
						<center><h2 class="formation">FORMATION</h2></center>
					</div>
					<div class="clearfix">
						<input type="text" placeholder="Nom">
					</div>
					<div class="clearfix">
						<select value="5" style="background:blue;">
							<option value="1" style="background:red;">Graphisme</option>
							<option value="2" style="background:purple;">Developement web</option>
							<option value="3" style="background:gray;">Traitement d'image</option>
							<option value="4" style="background:yellow;">Communication</option>
							<option value="5" style="background:cyan;">Evenementielle</option>
						</select>
					</div>
					<div class="clearfix">
						<select>
							<option value="non" selected="selected">Choisissez un département</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
						</select>
					</div>
				</fieldset>
			</div>
			<div class="span3">
				<fieldset>
					<div class="recherche">
						<center><h2 class="metier">METIER</h2></center>
					</div>
					<div class="clearfix">
						<input type="text" placeholder="Nom">
					</div>
					
					<div class="clearfix">
						<select value="5" multiple="true">
							<option value="1">Graphisme</option>
							<option value="2">Developement web</option>
							<option value="3">Traitement d'image</option>
							<option value="4">Communication</option>
							<option value="5">Evenementielle</option>
						</select>
					</div>
					<div class="clearfix">
						<select>
							<option value="non" selected="selected">Choisissez un département</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
						</select>
					</div>
				</fieldset>
			</div>
			<div class="span3">
				<fieldset>
					<div class="recherche">
						<center><h2 class="profil">PROFIL</h2></center>
					</div>
					<div class="clearfix">
						<input type="text" placeholder="Nom">
					</div>
					<div class="clearfix">
						<select value="5" multiple="true">
							<option value="1">Graphisme</option>
							<option value="2">Developement web</option>
							<option value="3">Traitement d'image</option>
							<option value="4">Communication</option>
							<option value="5">Evenementielle</option>
						</select>
					</div>
					<div class="clearfix">
						<select>
							<option value="non" selected="selected">Choisissez un département</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
						</select>
					</div>
				</fieldset>
			</div>
		</div>
		<center>
			<div class="action">
				<input type="submit" class="btnRecherche btn" value="Lancer la recherche">
			</div>
		</center>
	</form>
</div>
<div class="span12">
	<h3>Ajourd'hui</h3>
		<ul class="alea">
			<li>
				<a href="#">
					<img src="http://img2.generation-nt.com/internet-anonyme-2-300x220_0032003200063153.jpg" alt="User 1">
					<p>Nom Prenom</p>
				</a>
				<p>The path of the righteous man is beset on all sides by the iniquities of the selfish
				and the tyranny of evil men. Blessed is he who, in the name of charity ... <small><a href="#">Lire la suite</a></small>
				</p>
			</li>
			
			<li>
				<a href="#">
					<img src="http://img2.generation-nt.com/internet-anonyme-2-300x220_0032003200063153.jpg" alt="User 1">
					<p>Nom Prenom</p>
				</a>
				<p>The path of the righteous man is beset on all sides by the iniquities of the selfish
				and the tyranny of evil men. Blessed is he who, in the name of charity ... <small><a href="#">Lire la suite</a></small>
				</p>
			</li>
			<li>
				<a href="#">
					<img src="http://img2.generation-nt.com/internet-anonyme-2-300x220_0032003200063153.jpg" alt="User 1">
					<p>Nom Prenom</p>
				</a>
				<p>The path of the righteous man is beset on all sides by the iniquities of the selfish
				and the tyranny of evil men. Blessed is he who, in the name of charity ... <small><a href="#">Lire la suite</a></small>
				</p>
			</li>
			<li>
				<a href="#">
					<img src="http://img2.generation-nt.com/internet-anonyme-2-300x220_0032003200063153.jpg" alt="User 1">
					<p>Nom Prenom</p>
				</a>
				<p>The path of the righteous man is beset on all sides by the iniquities of the selfish
				and the tyranny of evil men. Blessed is he who, in the name of charity ... <small><a href="#">Lire la suite</a></small>
				</p>
			</li>
			<li>
				<a href="#">
					<img src="http://img2.generation-nt.com/internet-anonyme-2-300x220_0032003200063153.jpg" alt="User 1">
					<p>Nom Prenom</p>
				</a>
				<p>The path of the righteous man is beset on all sides by the iniquities of the selfish
				and the tyranny of evil men. Blessed is he who, in the name of charity ... <small><a href="#">Lire la suite</a></small>
				</p>
			</li>
		</ul>
	</div>