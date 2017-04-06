<?php

// Phone Number
Kirki::add_field( 'conf', array(
	'type'        => 'text',
	'settings'    => 'phone',
	'label'       => 'Telefon nummer',
	'section'     => 'contactinfo',
	'default'     => '',
	'priority'    => 10,
));

// 
Kirki::add_field( 'conf', array(
	'type'        => 'text',
	'settings'    => 'mail',
	'label'       => 'Email',
	'section'     => 'contactinfo',
	'default'     => '',
	'priority'    => 10,
));