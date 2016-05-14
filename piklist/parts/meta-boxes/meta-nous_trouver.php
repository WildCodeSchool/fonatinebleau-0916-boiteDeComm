<?php

/*
Title: Complément
Post Type: page
Capability: manage_options
Context: normal
Priority: high
Meta box: false
ID: 13
*/

piklist('field', array(
	'type' => 'text',
	'field' => 'titre',
	'label' => 'Titre',
	'template' => 'field',
	'attributes' => array(
   		'class' => 'large-text'
 	)
 ));

piklist('field', array(
	'type' => 'editor',
	'field' => 'num_1',
	'label' => 'Complément_1',
	'template' => 'field',
	'options' => array (
		'wpautop' => true,
		'media_buttons' => true
   		)
 ));

piklist('field', array(
	'type' => 'text',
	'field' => 'num_2',
	'label' => 'Complement_2',
	'template' => 'field',
	'attributes' => array(
   		'class' => 'large-text'
 	)
 ));

piklist('field', array(
	'type' => 'editor',
	'field' => 'num_3',
	'label' => 'Map responsive',
	'attributes' => array(
   		'class' => 'large-text'
 	)
 ));