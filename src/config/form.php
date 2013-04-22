<?php

// a template for forms

$form = array(
	'attr' => array('url' => 'registration', 'class' => 'form-horizontal'),
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
);

return $form;