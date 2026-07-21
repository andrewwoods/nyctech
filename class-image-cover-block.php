<?php

class NycTech_Image_Cover_Block extends WP_Widget
{
    public function __construct() {
        parent::__construct(
            // Base ID of your widget
            'nyctech-image-cover-block',

            // Widget name will appear in UI
            __( 'Image Cover Block Widget', 'nyctech' ),

            // Widget description
            [
                'classname' => 'NycTech_Image_Cover_Block',
                'description' => __( 'Polyfill widget for the Gutenberg Image block with cover enabled', 'nyctech' ),
            ]
        );
    }
}
