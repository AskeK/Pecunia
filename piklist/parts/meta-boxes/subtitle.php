<?php
/*
Title: Indstillinger
Post Type: page
scope: post_meta
order: 1
*/

piklist('field',array(
    'type' => 'text',
    'field' => 'subtitle',
    'label' => __('Undertitel','smamo'),
    'attributes' => array(
        'class' => 'widefat',
    )
));

piklist('field',array(
    'type' => 'checkbox',
    'field' => 'show_in_sidebar',
    'label' => __('Vis i sidebaren','smamo'),
    'choices' => array(
	  'checked' => 'Ja'
    )
));
