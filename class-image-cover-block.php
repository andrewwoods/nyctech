<?php

class NycTech_Image_Cover_Block extends WP_Widget
{
    public $args = array(
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="wp-block-cover aligncenter">',
        'after_widget'  => '</div>',
    );

    public function __construct() {
        parent::__construct(
            // Base ID of your widget
            'nyctech-image-cover-block',

            // Widget name will appear in UI
            __( 'Image Cover Block Widget', 'nyctech' ),

            // Widget description
            [
                'classname' => 'wp-block-cover-image',
                'description' => __( 'Polyfill widget for the Gutenberg Image block with cover enabled', 'nyctech' ),
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
        $content = $instance['content'] ?? __('New content', 'nyctech');
        $image_src = $instance['image_src'] ?? '';
        $image_alt = $instance['image_alt'] ?? '';

        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'content' ); ?>">
                <?php _e( 'Content:', 'nyctech' ); ?>
            </label>
            <input
                class="widefat" id="<?php echo $this->get_field_id( 'content' ); ?>"
                name="<?php echo $this->get_field_name( 'content' ); ?>"
                type="text"
                value="<?php echo esc_attr( $content ); ?>"
            />
        </p>
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
        $content = $instance['content'] ?? 'DEFAULT CONTENT';
        $image_src = $instance['image_src'] ?? '';
        $image_alt = $instance['image_alt'] ?? '';

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        // This is where you run the code and display the output
        ?>
        <!-- wp-block-cover-image -->
        <div class="wp-block-cover aligncenter">
            <img decoding="async" width="500" height="333" class="wp-block-cover__image-background wp-image-2299" alt="<?php echo esc_attr($image_alt); ?>" src="<?php echo esc_attr($image_src); ?>" data-object-fit="cover">
            <span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
            <div class="wp-block-cover__inner-container is-layout-flow wp-block-cover-is-layout-flow">
                <p class="text-center text-serif text-heavy"><?php echo $content; ?></p>
            </div>
        </div>
        <!-- End wp-block-cover-image -->
        <?php
//        nyctech_debug_object($args);
//        nyctech_debug_object($instance);
        echo $args['after_widget'];
    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance              = array();
        $instance['content']   = ( ! empty( $new_instance['content'] ) ) ? strip_tags( $new_instance['content'] ) : '';
        $instance['image_src'] = ( ! empty( $new_instance['image_src'] ) ) ? strip_tags( $new_instance['image_src'] ) : '';
        $instance['image_alt'] = ( ! empty( $new_instance['image_alt'] ) ) ? strip_tags( $new_instance['image_alt'] ) : '';

        return $instance;
    }
}
