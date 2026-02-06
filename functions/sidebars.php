<?php
/**
 * Sidebar Registration
 */

register_sidebar(
	array(
		'id' => 'cta',
		'name'          => __( 'Call to Actions', 'nyctech' ),
		'description'   => __( 'Area for Calls to Action', 'nyctech' ),
		'before_widget' => '<aside id="%1$s" class="widget calls-to-action %2$s"><div class="content">',
		'after_widget'  => '</div></aside>',
	)
);

register_sidebar(
	array(
		'id' => 'blog',
		'name'          => __( 'Blog Sidebar', 'nyctech' ),
		'description'   => __( 'Sidebar on the blog page', 'nyctech' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>'
	)
);

register_sidebar(
	array(
		'id' => 'home',
		'name'          => __( 'Home Sidebar', 'nyctech' ),
		'description'   => __( 'Sidebar in the Homepage', 'nyctech' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>'
	)
);
