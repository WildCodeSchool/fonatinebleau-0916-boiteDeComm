<?php

/*
Title: Complément
Post Type: page
Capability: manage_options
Context: normal
Priority: high
Meta box: false
ID: 17
*/

piklist('field', array(
	'type' => 'editor',
	'field' => 'num_1',
	'label' => 'Image Contact',
	'template' => 'field',
	'options' => array (
		'wpautop' => true,
		'media_buttons' => true
   		)
 ));

piklist('field', array(
	'type' => 'text',
	'field' => 'num_2',
	'label' => 'Complement_1',
	'template' => 'field',
	'attributes' => array(
   		'class' => 'large-text'
 		)
 ));