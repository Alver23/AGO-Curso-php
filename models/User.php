<?php

function login($email, $password)
{
	if ($email === 'admin@agoitsolutions.com' && $password === '12345') {
		return [
			'name' => 'Alver Grisales',
			'email' => 'admin@agoitsolutions.com',
			'profile' => 'Administrador',
		];
	}
	return [];
}