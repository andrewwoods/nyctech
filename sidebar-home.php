<?php
/**
 * Sidebar for the Home page
 *
 * @package NycTech
 * @subpackage Sidebars
 * @author Andrew Woods
 */

?>
<section id="sidebar-home" class="sidebar home">
<?php if ( ! dynamic_sidebar( 'home' ) ) : ?>
<?php endif; ?>
</section>
