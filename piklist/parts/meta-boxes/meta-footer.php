<?php

/*
Title: Complément
Post Type: page
Capability: manage_options
Context: normal
Priority: high
Meta box: false
ID: 167
*/


piklist('field', array(
	'type' => 'text',
	'field' => 'num_1',
	'label' => 'Mentions légales',
	'template' => 'field',
	'attributes' => array(
   		'class' => 'large-text'
 	)
 ));

piklist('field', array(
	'type' => 'editor',
	'field' => 'num_2',
	'label' => 'Mentions légales',
	'options' => array (
		'wpautop' => true,
		'media_buttons' => false
   		)
 ));

piklist('field', array(
	'type' => 'text',
	'field' => 'num_3',
	'label' => 'Conditions générales de ventes',
	'template' => 'field',
	'attributes' => array(
   		'class' => 'large-text'
 	)
 ));

piklist('field', array(
	'type' => 'editor',
	'field' => 'num_4',
	'label' => 'Conditions générales de ventes',
	'options' => array (
		'wpautop' => true,
		'media_buttons' => false
   		)
 ));

piklist('field', array(
	'type' => 'text',
	'field' => 'num_5',
	'label' => 'F.A.Q',
	'template' => 'field',
	'attributes' => array(
   		'class' => 'large-text'
 	)
 ));

piklist('field', array(
	'type' => 'editor',
	'field' => 'num_6',
	'label' => 'F.A.Q',
	'options' => array (
		'wpautop' => true,
		'media_buttons' => false
   		)
 ));

piklist('field', array(
	'type' => 'editor',
	'field' => 'num_7',
	'label' => 'Copyright',
	'options' => array (
		'wpautop' => true,
		'media_buttons' => false
   		)
 ));

piklist('field', array(
	'type' => 'editor',
	'field' => 'num_8',
	'label' => 'Réalisation',
	'options' => array (
		'wpautop' => true,
		'media_buttons' => false
   		)
 ));
