<?php
/**
 * Sidebar for the Blog page
 *
 * @package NycTech
 * @subpackage Sidebars
 * @author Andrew Woods
 */

?>
<aside id="sidebar-blog">
<div class="content flex-wrap flex-align-between">
<?php if ( ! dynamic_sidebar( 'blog' ) ) : ?>
	&nbsp;
<?php endif; ?>
</div>
</aside>
