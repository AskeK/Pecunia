<?php
/*
Title: Kontaktoplysninger
Post Type: medarbejder
scope: post_meta
order: 1
*/

piklist('field',array(
    'type' => 'file',
    'field' => 'cw_pic',
    'label' => __('Billede','smamo'),
    'attributes' => array(
        'class' => 'widefat',
    ),
    'options' => array(
        'save' => 'url',
    )
));

piklist('field',array(
    'type' => 'text',
    'field' => 'cw_fname',
    'label' => __('Foravn','smamo'),
    'attributes' => array(
        'class' => 'widefat',
    ),
));

piklist('field',array(
    'type' => 'text',
    'field' => 'cw_lname',
    'label' => __('Efternavn','smamo'),
    'attributes' => array(
        'class' => 'widefat',
    ),
));

piklist('field',array(
    'type' => 'text',
    'field' => 'cw_position',
    'label' => __('Stilling','smamo'),
     'attributes' => array(
        'class' => 'widefat',
    ),
));

piklist('field',array(
    'type' => 'text',
    'field' => 'cw_email',
    'label' => __('Email','smamo'),
     'attributes' => array(
        'class' => 'widefat',
    ),
));

piklist('field',array(
    'type' => 'text',
    'field' => 'cw_phone',
    'label' => __('Telefonnummer','smamo'),
     'attributes' => array(
        'class' => 'widefat',
    ),
));

/*piklist('field',array(
    'type' => 'text',
    'field' => 'mb_dept',
    'label' => __('Afdeling','smamo'),
     'attributes' => array(
        'class' => 'widefat',
    ),
));*/

/*piklist('field',array(
    'type' => 'text',
    'field' => 'mb_work',
    'label' => __('Arbejdsområde','smamo'),
     'attributes' => array(
        'class' => 'widefat',
    ),
));*/

/*piklist('field',array(
    'type' => 'text',
    'field' => 'mb_mobile',
    'label' => __('Mobiltelefon','smamo'),
     'attributes' => array(
        'class' => 'widefat',
    ),
));*/