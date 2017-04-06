<?php

// Conf
Kirki::add_config( 'conf', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
));

// Sections
Kirki::add_section( 'visualsection', array(
    'title'          => __( 'Visuelle indstillinger' ),
    'description'    => __( 'Ændre visueller indstillinger her' ),
    'panel'          => '',
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
));

Kirki::add_section( 'contactinfo', array(
    'title'          => __( 'Kontakt informationer' ),
    'description'    => __( 'Ændre kontakt informationer her' ),
    'panel'          => '',
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
));