<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>

	<meta charset="<?php bloginfo('charset') ?>">
	<title><?php wp_title('-', true, 'right'); bloginfo()?></title>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/style.css"/>

<?php wp_head();?>
</head>
<body>

<div id="header">

	<div id="header-superior"> 

		<div id="header-superior-content">
			
			<div id="header-superior-paginas">
					
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Arquivos</a></li>
					<li><a href="#">Sobre Nós</a></li>
					<li><a href="#">Serviços</a></li>
					<li><a href="#">Contato</a></li>
				</ul>

			</div><!--fim header-superior-paginas -->

			<div id="header-superior-social">
					
				<a href=""><img src="<?php bloginfo('template_url'); ?>/imagens/icon-face.png" rel="" title="" /></a>
				<a href=""><img src="<?php bloginfo('template_url'); ?>/imagens/icon-twitter.png" rel="" title="" /></a>
				<a href=""><img src="<?php bloginfo('template_url'); ?>/imagens/icon-maps.png" rel="" title="" /></a>
				<a href=""><img src="<?php bloginfo('template_url'); ?>/imagens/icon-youtube.png" rel="" title="" /></a>

			</div><!--fim header-superior-social -->
		
		</div><!--fim header-superior-content -->

	</div><!--fim header-superior -->

<div id="header-content">
	
	<div id="logo">
		<a href="#"><img src="<?php bloginfo('template_url'); ?>/imagens/logo-apas.png" rel="" title=""/></a>
	</div><!--fim logo -->

	<div id="search">
		
		<form action="" method="post">
			<input type="text" name="">
			<input type="submit" value="" class="btn-search" name="">
		</form>

	</div><!--fim search -->

	<div id="login">
		
		<ul>
			<li class="logar"><a href="">Login</a></li>
			<li class="registre"><a href="">Registra-se</a></li>
		</ul>

	</div><!-- fim login -->

</div><!--fim header-content -->

<div id="nav">
	
	<div id="nav-content">
		
		<ul>
			<li><a href="#">Noticias</a>/</li>
			<li><a href="#">Esportes</a>/</li>
			<li><a href="#">Tecnologia</a>/</li>
			<li><a href="#">Entretenimento</a>/</li>
			<li><a href="#">Multimidias</a>/</li>
			<li><a href="#">Saúde</a>/</li>
			<li><a href="#">Politica</a>/</li>
			<li><a href="#">Games</a>/</li>
		</ul>


	</div><!-- Barra Navegação -->

</div><!--fim nav-->

</div><!--/ fim header -->
