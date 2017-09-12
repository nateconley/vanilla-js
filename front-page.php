<?php get_header(); ?>

<section class="parallax">
	<div class="left">
		<h1>HELLO</h1>
	</div>
	<div class="right">
		<h1>WORLD</h1>
	</div>
</section>

<section>
	<article>
		<?php
		while ( have_posts() ) {
			the_post();
			the_content();
		}
		?>
	</article>
</section>

<?php get_footer(); ?>
