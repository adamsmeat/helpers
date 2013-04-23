<?php

// a template for forms

$form = array(
	'attr' => array('class' => 'form-horizontal'),
	'field' => array(
		'username'  => array(
			'attr'=> array('type' => 'text','placeholder' => 'username'),			
		),
		'email' => array(
			'attr'=> array(
				'placeholder' => 'email@example.com',
			),
		),
		'password',
		'password_confirmation',	
	),
	'button' => array(
		'submit' => array(
			'attr'=> array(
				'class' => 'btn btn-primary',
			),				
		),					
	),


	// default rules
	'rules' => array(
	    'username' => array(
	        'required', 
	        'unique:users',
	        'min:6'
	    ),
	    'email' => array(
	        'required', 
	        'email', 
	        'unique:users'
	    ),
	    'password' => array(
	        'required', 
	        'confirmed',
	        'min:8' 
	    ),
	),	
);

return $form;