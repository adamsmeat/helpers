<?php

// a template for forms

$form = array(
	'attr' => array('class' => 'form-horizontal'),
	'field' => array(
		'first_name'  => array(
			'attr'=> array('type' => 'text','placeholder' => 'First Name'),			
		),		
		'last_name'  => array(
			'attr'=> array('type' => 'text','placeholder' => 'Last Name'),			
		),
		'full_name'  => array(
			'attr'=> array('type' => 'text','placeholder' => 'Full Name'),			
		),						
		'registration_ip'  => array(
			'attr'=> array('type' => 'hidden','placeholder' => 'ip address'),			
		),
		'email' => array(
			'attr'=> array(
				'placeholder' => 'email@example.com',
			),
		),
		'password',
		'password_confirmation',
		'group' => array(
			'type' => 'select',
			'attr'=> array(),
			'options' => array(
				'customer' => 'Customer', 
				'registrar' => 'Business Registrar',
				'contact' => 'Business Contact',
			),
		),			
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
	        'min:6',
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

	'rules_variants' => array(
		'registration'=> array(
		    'username' => array(
		        'unique:users',
		        'min:6',
		    ),			
		),
	),	

);

return $form;