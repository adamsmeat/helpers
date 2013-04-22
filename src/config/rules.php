<?php

// a template for forms

$rules = array(
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
);

return $rules;