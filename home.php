<?php
/*
Template Name: Front Page
*/

get_header();

?>
<main id="main">
<div class="main-content">
	<?php
	get_sidebar('cta');

	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
	?>
		<?php get_template_part('templates/excerpt'); ?>
	<?php
		endwhile;
	else :
	?>
		<h2 class="center">Not Found</h2>
		<article class="center">
		Sorry, but you are looking for something that isn't here.
		</article>
		<?php get_search_form(); ?>
	<?php
	endif;
	?>
</div>
</main>
<?php get_footer(); ?>
