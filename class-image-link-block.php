<?php

class NycTech_Image_Link_Block extends WP_Widget
{
    public $args = array(
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="widget wp-block-image-link aligncenter">',
        'after_widget'  => '</div>',
    );

    public function __construct() {
        parent::__construct(
            // Base ID of your widget
            'nyctech-image-link-block',

            // Widget name will appear in UI
            __( 'Image Link Block Widget', 'nyctech' ),

            // Widget description
            [
                'classname' => 'wp-block-image-link',
                'description' => __( 'Polyfill widget for the Gutenberg Image block with link', 'nyctech' ),
            ]
        );
    }

    /**
     * Image Cover Block Settings Form
     *
     * @param $instance
     * @return void
     */
    public function form( $instance ) {
        $image_src = $instance['image_src'] ?? '';
        $image_alt = $instance['image_alt'] ?? '';
        $link_url = $instance['link_url'] ?? '';

        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'image_src' ); ?>">
                <?php _e( 'Image Source:', 'nyctech' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'image_src' ); ?>"
                    name="<?php echo $this->get_field_name( 'image_src' ); ?>"
                    type="text"
                    value="<?php echo esc_attr( $image_src ); ?>"
            />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'image_alt' ); ?>">
                <?php _e( 'Image Alt Text:', 'nyctech' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'image_alt' ); ?>"
                    name="<?php echo $this->get_field_name( 'image_alt' ); ?>"
                    type="text"
                    value="<?php echo esc_attr( $image_alt ); ?>"
            />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'link_url' ); ?>">
                <?php _e( 'Link URL:', 'nyctech' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'link_url' ); ?>"
                    name="<?php echo $this->get_field_name( 'link_url' ); ?>"
                    type="text"
                    value="<?php echo esc_attr( $link_url ); ?>"
            />
        </p>
        <?php
    }

    /**
     * Creating widget front-end
     *
     * @param array $args
     * @param array $instance
     * @return void
     */
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $image_src = $instance['image_src'] ?? '';
        $image_alt = $instance['image_alt'] ?? '';
        $link_url = $instance['link_url'] ?? '';

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        ?>
        <!-- wp-block-image-link -->
        <div class="image-link-content">
            <a href="<?php echo strip_tags($link_url) ?>"><img src="<?php echo esc_attr($image_src); ?>" alt="<?php echo esc_attr($image_alt); ?>"></a>
        </div>
        <!-- End wp-block-image-link -->
        <?php
        echo $args['after_widget'];
    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance              = array();
        $instance['link_url']  = ( ! empty( $new_instance['link_url'] ) ) ? strip_tags( $new_instance['link_url'] ) : '';
        $instance['image_src'] = ( ! empty( $new_instance['image_src'] ) ) ? strip_tags( $new_instance['image_src'] ) : '';
        $instance['image_alt'] = ( ! empty( $new_instance['image_alt'] ) ) ? strip_tags( $new_instance['image_alt'] ) : '';

        return $instance;
    }
}
