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

				<?php if ( has_nav_menu( 'header' ) ) : ?>
                    <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Header Menu', 'wesley_rodriques' ); ?>">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'header',
							'menu_class'     => 'header-menu',
						) );
						?>
                    </nav><!-- .main-navigation -->
				<?php endif; ?>

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

		<?php if ( has_nav_menu( 'sidebar' ) ) : ?>
            <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Sidebar Menu', 'wesley_rodriques' ); ?>">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'sidebar',
					'menu_class'     => 'sidebar-menu',
				) );
				?>
            </nav><!-- .main-navigation -->
		<?php endif; ?>


	</div><!-- Barra Navegação -->

</div><!--fim nav-->

</div><!--/ fim header -->
