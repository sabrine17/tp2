<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme4w4
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head() ?>
</head>
<?php if (is_front_page() ) :?>
<?php endif; ?>

<body <?php body_class(is_front_page() || is_category() ? 'no-sidebar' : ''); ?>>


<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'theme4w4' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="menu-brands__track" style="">
    <a class="menu-brands active" href="4w4-3/">Principal</a>
	<a class="menu-brands" href="/4w4-3/582-3c1-design-dinteractivite-75h/">Design</a>
    <a class="menu-brands"  href="/4w4-3/582-3j3-creation-de-jeu-3d-75h/">Création</a>
    <a class="menu-brands"  href="/4w4-3/582-4w4-conception-dinterfaces-et-developpement-web/">Web</a>
    <a class="menu-brands"  href="/4w4-3/582-6n3-stage-285h/">Stage</a>
    <a class="menu-brands"  href="/4w4-3/360-4j4-creation-de-jeu-en-equipe-105h/">Jeu</a>
	</div>
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				
				
				<?php
			endif;
			$theme4w4_description = get_bloginfo( 'description', 'display' );
			if ( $theme4w4_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $theme4w4_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			
			
				<?php endif; ?>
		</div><!-- .site-branding -->
	
			<!-- debut caroussel -->
		<?php
		if ( is_front_page() ) :
		 ?>
		<section class="carrousel">
			<div></div>
			<div></div>
			<div></div>
		</section>
		<div id= 'buttoncarrousel'>
			<button id='un'></button>
			<button id='deux'></button>
			<button id='trois'></button>	
		</div>

		<?php endif ?>
		<!-- fin caroussel -->

		<nav id="site-navigation" class="main-navigation">


			<button class='"menu-toggle"'  onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
     		<svg class="essai1" width="30" height="30" viewBox="0 0 100 100">
      	 	<path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
       		<path class="line line2" d="M 20,50 H 80" />
        	<path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
      		</svg>
    		</button>


			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<!-- debut section image -->
		<?php
		if ( is_front_page() ) : ?>
		<section class="imagesection">
		<div></div>
	
		</section>

		
</div>
		<?php endif ?>



	</header><!-- #masthead -->
	<script>
        let burger = document.getElementById('burger')
        let bar1 = document.querySelector('#burger div:nth-of-type(1)')
        let bar2 = document.querySelector('#burger div:nth-of-type(2)')
        let bar3 = document.querySelector('#burger div:nth-of-type(3)')
       /* burger.addEventListener('mousedown', function(){
            if ( bar1.classList.contains('ouvreX1') == false){
                bar1.classList.add('ouvreX1')
                bar1.classList.remove('fermeX1')
                bar2.classList.add('ouvreX2')
                bar2.classList.remove('fermeX2')
                bar3.classList.add('ouvreX3')
                bar3.classList.remove('fermeX3')
                console.log(bar3.classList)
            }
            else{
                bar1.classList.remove('ouvreX1')
                bar1.classList.add('fermeX1')
                bar2.classList.remove('ouvreX2')
                bar2.classList.add('fermeX2')
                bar3.classList.remove('ouvreX3')
                bar3.classList.add('fermeX3')
                console.log(bar3.classList)

            }
        })*/
	
		
    </script>