<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		

		<div id="header" class="col-md-12">

			<div class="menu fl">
					
				<ul class="menu-bg">
					<li class="menu-link menu-link-arred-esq"><?php echo $this->Html->link('Cacau Show', '/empresa'); ?> </li>
					<li class="menu-link"><?php echo $this->Html->link('Produtos', '/produtos'); ?> </li>
					<li class="menu-link"><?php echo $this->Html->link('Novidades', '/novidades'); ?> </li>
					<li class="menu-link"><?php echo $this->Html->link('Presentes', '/presentes'); ?> </li>
					<li class="menu-img">
					<?php echo $this->Html->link($this->Html->image('logo-cacau.png', array('class' => 'logomarca')), '/', array('escape' => false, 'class' => 'menu-link-img')); ?> 
					</li>
					<li class="menu-link"><a href="#" ><?php echo $this->Html->link('Promoções', '/promocoes'); ?> </li>
					<li class="menu-link"><a href="#" ><?php echo $this->Html->link('Galeria', '/galeria'); ?> </li>
					<li class="menu-link menu-link-duplo"><?php echo $this->Html->link('Tudo sobre Chocolate' , '/chocolate'); ?> </li>
					<li class="menu-link menu-link-arred-dir"><?php echo $this->Html->link('Contato', '/faleconosco'); ?> </li>
				
				</ul>	


			</div>


		</div>
		

		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		
		
	</div>

	<div class="rodape-bg-full">
		<div id="footer" class="footer-rodape">
			
			<?php 

			echo $this->Html->image('logo-rodape-2.png', array('class' => 'logomarca-rodape fl'));
			
			?>

			<ul class="menu-rodape-bloco-1 fl">
				<li class="link-rodape"><?php echo $this->Html->link('Produtos', '/pages/produtos');?></li>
				<li class="link-rodape"><?php echo $this->Html->link('Novidades', '/pages/novidades');?></li>
				<li class="link-rodape"><?php echo $this->Html->link('Tudo sobre chocolate', '/pages/chocolate');?></li>
				<li class="link-rodape"><?php echo $this->Html->link('Seja um franqueado', '/pages/franqueado');?></li>
			</ul>
			
			<ul class="menu-rodape-bloco-1 fl">
				<li class="link-rodape"><?php echo $this->Html->link('Sobre a cacau show', '/pages/sobre', array('class' => 'link-rodape'));?></li>
				<li class="link-rodape"><?php echo $this->Html->link('Cacau Kids', '/pages/cacaukids', array('class' => 'link-rodape'));?></li>
				<li class="link-rodape"><?php echo $this->Html->link('Sac', '/pages/sac', array('class' => 'link-rodape'));?></li>
			</ul>

			<ul class="menu-rodape-bloco-2 fl">
			  <h4 class="titulo-rodape">Redes Sociais</h4>
			  <li class="link-rodape-rs fl"><?php echo $this->Html->link($this->Html->image('face.png', array('class' => 'logomarca')), 'http://www.facebook.com', array('escape' => false, 'target' => '_blank')); ?> </li>
			  <li class="link-rodape-rs fl"><?php echo $this->Html->link($this->Html->image('naosei.png', array('class' => 'logomarca')), 'http://www.facebook.com', array('escape' => false, 'target' => '_blank')); ?> </li>
			  <li class="link-rodape-rs fl"><?php echo $this->Html->link($this->Html->image('g+.png', array('class' => 'logomarca')), 'http://www.facebook.com', array('escape' => false, 'target' => '_blank')); ?> </li>
			  <br>
			  <li class="link-rodape-rs fl"><?php echo $this->Html->link($this->Html->image('twitter.png', array('class' => 'logomarca')), 'http://www.facebook.com', array('escape' => false, 'target' => '_blank')); ?> </li>
			  <li class="link-rodape-rs fl"><?php echo $this->Html->link($this->Html->image('youtube.png', array('class' => 'logomarca')), 'http://www.facebook.com', array('escape' => false, 'target' => '_blank')); ?> </li>
			  <li class="link-rodape-rs fl"><?php echo $this->Html->link($this->Html->image('instagran.png', array('class' => 'logomarca')), 'faleconosco', array('escape' => false, 'target' => '_blank')); ?> </li>

			</ul>

			<form action="#" class="news">
				
				<h4 class="titulo-rodape-1 fl">Receba Novidades</h4>

				<p class="news2"><?php echo $this->Html->image('news.jpg', array('class' => 'news-rodape fl')); ?></p>

			</form>

		</div>

		<div class="footer-rodape-2">
			<div class="footer-rodape-2-centro">
		
				<p class="texto-rodape">
					2013 Cacau Show - Todos os direitos reservados. As imagens expostas nesse site são meramente ilustrativas. Informações completas e precisas, inclusive sobre preços e prazos de validade e origem podem ser obtidas diretamente nas lojas. Consulte a loja para verificar disponibilidade.
				</p>			
			
			</div>
		</div>
	
	</div>
	
	<?php #echo $this->element('sql_dump'); ?>
</body>
</html>
