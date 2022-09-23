<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'redux_sepleen_global';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Theme Options', 'sepleenWp' ),
        'customizer'           => true,
    );

    Redux::setArgs( $opt_name, $args );

    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Top Bar', 'sepleenWp' ),
        'id'     => 'basic',
        'desc'   => esc_html__( 'Top Header settings edit here:', 'sepleenWp' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-email',
                'type'     => 'text',
                'title'    => esc_html__( 'Email', 'sepleenWp' ),
                'desc'     => esc_html__( 'Write a valid email address', 'sepleenWp' ),
                'hint'     => array(
                    'content' => 'Write with a <b>hint</b> email address starts with<br/><br/>example@gmail.com',
                )
                ),
                
            array(
                'id'       => 'opt-number',
                'type'     => 'text',
                'title'    => esc_html__( 'Phone Number', 'sepleenWp' ),
                'desc'     => esc_html__( 'Enter Your Phone number here:', 'sepleenWp' ),
                'hint'     => array(
                    'content' => 'Write with a <b>hint</b> valid phone number ',
                )
                ),
            array(
                    'id'       => 'opt-color',
                    'type'     => 'color',
                    'title'    => esc_html__('Body Background Color', 'sepleenWp'), 
                    'subtitle' => esc_html__('Pick a background color for the theme (default: #fff).', 'sepleenWp'),
                    'validate' => 'color',
                    'output'   => array('background-color' => '.header-top')
            )

        )
    ) );

    //Theme Options for About Us Section
    Redux::set_section( 
        $opt_name, 
        array(
        'title'   => 'Service',
        'icon'    => 'el el-dashboard',
        'heading' => 'Service area settings change here',
        'desc'    => '<br />This is the section description.  HTML is permitted.<br />',
        'fields'  => array(
            array(
                'id'       => 'opt-service-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Title', 'sepleenWp' ),
                'desc'     => esc_html__( 'Write a Title', 'sepleenWp' ),
            ),
            array(
                'id'       => 'opt-service-subheading',
                'type'     => 'text',
                'title'    => esc_html__( 'Enter Sub Heading', 'sepleenWp' ),
                'desc'     => esc_html__( 'Enter subheading here:', 'sepleenWp' ),
            ),
            array(
                'id'       => 'opt-service-description',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Enter Description', 'sepleenWp' ),
                'desc'     => esc_html__( 'Enter some description here:', 'sepleenWp' ),
            ),
            
        ),
        ), 
        true 
    );

    //About us section
    Redux::set_sections( 
        $opt_name, 
        array(
            array(
            'title'   => 'About US',
            'icon'    => 'el-icon-cogs',
            'heading' => 'About Us area settings change here',
            'desc'    => '<br />This is the section description.  HTML is permitted.<br />',
            'fields'  => array(
                array(
                    'id'       => 'opt-about-title',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Title', 'sepleenWp' ),
                    'desc'     => esc_html__( 'Write a Title', 'sepleenWp' ),
                ),
                array(
                    'id'       => 'opt-about-subheading',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Enter a Sub Heading', 'sepleenWp' ),
                    'desc'     => esc_html__( 'Enter heading here:', 'sepleenWp' ),
                ),
                array(
                    'id'       => 'opt-about-description',
                    'type'     => 'textarea',
                    'title'    => esc_html__( 'Enter Description Here', 'sepleenWp' ),
                    'desc'     => esc_html__( 'Enter some description here:', 'sepleenWp' ),
                ),
            ),
            )
        ) 
    );

    //Team Section
    Redux::set_sections( 
        $opt_name, 
        array(
            array(
            'title'   => 'Teams',
            'icon'    => 'el el-group',
            'heading' => 'Team area settings change here',
            'desc'    => '<br />This is the section description.  HTML is permitted.<br />',
            'fields'  => array(
                array(
                    'id'       => 'opt-team-title',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Title', 'sepleenWp' ),
                    'desc'     => esc_html__( 'Write a Title', 'sepleenWp' ),
                ),
                array(
                    'id'       => 'opt-team-subheading',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Enter a Sub Heading', 'sepleenWp' ),
                    'desc'     => esc_html__( 'Enter heading here:', 'sepleenWp' ),
                ),
                array(
                    'id'       => 'opt-team-description',
                    'type'     => 'textarea',
                    'title'    => esc_html__( 'Enter Description Here', 'sepleenWp' ),
                    'desc'     => esc_html__( 'Enter some description here:', 'sepleenWp' ),
                ),
            ),
            )
        ) 
    );
    
    //Testimonial Section 
    Redux::set_sections( 
        $opt_name, 
        array(
            array(
            'title'   => 'Testimonial',
            'icon'    => 'el el-smiley-alt',
            'heading' => 'Testimonial area settings change here',
            'desc'    => '<br />This is the section description.  HTML is permitted.<br />',
            'fields'  => array(
                array(
                    'id'       => 'opt-testimonial-title',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Title', 'sepleenWp' ),
                    'desc'     => esc_html__( 'Write a Title', 'sepleenWp' ),
                ),
                array(
                    'id'       => 'opt-testimonial-subheading',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Enter a Sub Heading', 'sepleenWp' ),
                    'desc'     => esc_html__( 'Enter heading here:', 'sepleenWp' ),
                ),
                array(
                    'id'       => 'opt-testimonial-description',
                    'type'     => 'textarea',
                    'title'    => esc_html__( 'Enter Description Here', 'sepleenWp' ),
                    'desc'     => esc_html__( 'Enter some description here:', 'sepleenWp' ),
                ),
            ),
            )
        ) 
    );
    
    //Blog Section 
    Redux::set_sections( 
        $opt_name, 
        array(
            array(
            'title'   => 'Blog Area',
            'icon'    => 'el el-blogger',
            'heading' => 'Blog area settings change here',
            'desc'    => '<br />This is the section description.  HTML is permitted.<br />',
            'fields'  => array(
                array(
                    'id'       => 'opt-blog-title',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Title', 'sepleenWp' ),
                    'desc'     => esc_html__( 'Write a Title', 'sepleenWp' ),
                ),
                array(
                    'id'       => 'opt-blog-subheading',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Enter a Sub Heading', 'sepleenWp' ),
                    'desc'     => esc_html__( 'Enter heading here:', 'sepleenWp' ),
                ),
                array(
                    'id'       => 'opt-blog-description',
                    'type'     => 'textarea',
                    'title'    => esc_html__( 'Enter Description Here', 'sepleenWp' ),
                    'desc'     => esc_html__( 'Enter some description here:', 'sepleenWp' ),
                ),
            ),
            )
        ) 
    );


    //Footer Section 
    Redux::set_sections( 
        $opt_name, 
        array(
            array(
            'title'   => 'Footer',
            'icon'    => 'el el-th-large',
            'heading' => 'Footer CopyRight Area settings change here',
            'desc'    => '<br />This is the section description.  HTML is permitted.<br />',
            'fields'  => array(
                array(
                    'id'       => 'copyright-title',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Title', 'sepleenWp' ),
                    'desc'     => esc_html__( 'Write a Title', 'sepleenWp' ),
                ),
                        ),
                        )
                    ) 
    );
    