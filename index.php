<?php
/*
Template Name: Index
*/

get_header();
?>
<section class="main">
	<div class="content wrapper">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			if ( is_single() || is_page() ) :
				get_template_part( 'templates/content' );
			else :
				get_template_part( 'templates/excerpt' );
			endif;
			?>
			<?php if ( is_single() ) : ?>
			<section class="comments boxed-blue">
				<?php comments_template(); ?>
			</section>
			<?php endif; ?>
		<?php
		endwhile;

	else :
	?>
		<article class="ms-all boxed-blue">
			<h2 class="aligncenter">Not Found</h2>
			<p class="aligncenter">Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>
		</article>
	<?php endif; ?>
	</div>
</section>

<?php
get_footer();
?>
