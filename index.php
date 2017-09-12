<?php get_header(); ?>

<section>
	<header class="page-header">
		<h1><?php esc_html_e( 'Blog', 'vanilla-js' ); ?></h1>
	</header>
</section>

<section id="post">
<?php while( have_posts() ) {
	the_post(); ?>
	<article>
		<header>
			<h1><?php the_title(); ?></h1>
		</header>
		<?php the_content(); ?>
	</article>
<?php } ?>
</section>

<section class="post-navigation">
	<button class="next"><?php esc_html_e( 'Next Post', 'vanilla-js' ); ?></button>
</section>

<?php get_footer(); ?>
