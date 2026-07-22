<?php
/*
Template Name: Design Theme Page
*/

get_header();
?>
<main id="main" >
<div class="main-content">
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
?>
		<article id="<?php the_ID(); ?>" class="h-entry boxed">
			<h1 class="p-name" ><?php the_title(); ?></h1>
			<div class="e-content">
			<?php the_content(); ?>
			</div>
		</article>
<?php
	endwhile;
else :
?>
	<article class="ms-all boxed">
	<h2>Not Found</h2>
	<p>Sorry, but you are looking for something that isn't here.</p>
	<?php get_search_form(); ?>
	</article>

<?php
endif;
?>
	<h1>First Level Heading</h1>
	<h2>Second Level Heading</h2>
	<h3>Third Level Heading</h3>
	<h4>Fourth Level Heading</h4>
	<h5>Fifth Level Heading</h5>
	<h6>Sixth Level Heading</h6>
	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
	<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
	<ul>
		<li>This first item</li>
		<li>This item <a href="http://example.com/">contains a link</a> within</li>
		<li>This is the third item</li>
		<li>This is the last item</li>
	</ul>
	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
	<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
	<ol>
		<li>This first item</li>
		<li>This item <a href="http://example.com/">contains a link</a> within</li>
		<li>This is the third item</li>
		<li>This is the last item</li>
	</ol>
	<div class="message">
		<h2>Message Heading</h2>
		<p>This is the informational message.</p>
	</div>

	<div class="message-success">
		<h2>Success Heading</h2>
		<p>This is the success message.</p>
	</div>

	<div class="message-error">
		<h2>Error Heading</h2>
		<p>This is the error message.</p>
	</div>

	<div class="message-warning">
		<h2>Warning Heading</h2>
		<p>This is the warning message.</p>
	</div>

</div>
</main>
<?php
get_footer();
?>
