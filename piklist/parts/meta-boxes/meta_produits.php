<?php

/*
Title: Complément
Post Type: page
Capability: manage_options
Context: normal
Priority: high
Meta box: false
ID: 9
*/

piklist('field', array(
	'type' => 'editor',
	'field' => 'num_1',
	'label' => 'Complément_1',
	'options' => array (
		'wpautop' => true,
		'media_buttons' => true
   		),
 ));

piklist('field', array(
	'type' => 'editor',
	'field' => 'num_2',
	'label' => 'Complément_2',
	'options' => array (
		'wpautop' => true,
		'media_buttons' => false
   		),
 ));
