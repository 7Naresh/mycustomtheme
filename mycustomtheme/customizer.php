<?php

// customizer api - customizer object - panel / section / setting / control
function my_customize_register( $wp_customize ) {
    // $wp_customize->add_panel();
    // $wp_customize->get_panel();
    // $wp_customize->remove_panel();

    // $wp_customize->add_section();
    // $wp_customize->get_section();
    // $wp_customize->remove_section();

    // $wp_customize->add_setting();
    // $wp_customize->get_setting();
    // $wp_customize->remove_setting();

    // $wp_customize->add_control();
    // $wp_customize->get_control();
    // $wp_customize->remove_control();
}
add_action('customize_register','my_customize_register');