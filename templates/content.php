<?php
/**
 * Loop content from index.php
 *
 * @package AquaTech\Templates
 */

?>
<article id="<?php the_ID(); ?>">
<?php if ( ! is_page('home') && ( is_single() || is_page() ) ) : ?>
	<h1><?php the_title(); ?></h1>
<?php elseif  ( is_page('home') ) : ?>
     <!-- Don't display the title for the home page -->
<?php else : ?>
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php endif; ?>
	<div class="content">
		<?php if ( is_single() ) : ?>
			<time datetime="<?php echo the_date( 'c' ); ?>"><?php echo the_date(); ?></time>
		<?php endif; ?>
		<?php the_content(); ?>
	</div>
</article>
