<?php
$cakeDescription = __d('Post-src', "Post-SRC, le réseau social des anciens de l'IUT SRC de laval");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		/*echo $this->Html->css('cake.generic');*/

		echo $this->fetch('meta');
		/*echo $this->fetch('css');*/
		echo $this->fetch('script');
	?>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet/less" href="http://127.0.0.1/post-src/app/webroot/less/style.less">
	<script src="http://127.0.0.1/post-src/app/webroot/js/libs/less-1.3.0.min.js"></script>
	<script src="http://127.0.0.1/post-src/app/webroot/js/jquery.js"></script>
	<script src="http://127.0.0.1/post-src/app/webroot/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
</head>
<div id="arriere2">
    <img src="img/background.jpg" class="arriere" alt="fond">
</div>
<body>
	<header class="row">
		<div class="container">
			<div class="row">
				<center>
					<a href="/"> <img src="img/header.png" alt="" /></a>
				</center>
				<div class="menu horizontal offset8 span4">
					<ul>
						<li>
							<a href="monprofil.php" title="mon profil">Mon Profil</a>
						</li>
						<li>
							<a href="deconnexion.php" title="deconnexion">Déconnexion</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
<div id="news-container">
	<div class="container">
		<h3><a href="index.php">News : </a></h3>
		<span>Proposition de stage </span><a href="#" title="A title">lire la suite ...</a>
		<a class="archives" href="#">Archives</a>
		<div id="news">
			<p class="alert-message block-message info">The path of the righteous man is beset on all sides by the iniquities of the selfish
			and the tyranny of evil men. Blessed is he who, in the name of <a href="">charity</a> and good
			will, shepherds the weak through the valley of darkness, for he is truly his brother's
			keeper and the finder of lost children. And I will strike down upon thee with great
			vengeance and furious anger those who would attempt to poison and destroy My brothers.
			And you will know My name is the Lord when I lay My vengeance upon thee.
			</p>
		</div>
	</div>
</div>
	<div class="container">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		<div id="footer">
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	<?php echo $scripts_for_layout; ?>
</body>
</html>