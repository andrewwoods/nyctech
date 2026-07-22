
<div class="content h-entry">
	<h2 class="p-name"><?php the_title(); ?></h2>
	<time class="dt-published" datetime="<?php echo the_date( 'c' ); ?>"><?php echo the_date(); ?></time>
	<div class="e-content">
	<?php the_content(); ?>
	</div>
</div>
