<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// ------------------------------------------------------------------------------------------------
// ORGANIZATION
// ------------------------------------------------------------------------------------------------
$app->get('organization/register', 			'OrganizationController@register');
// $app->get('organization/delete', 		'OrganizationController@delete');
// $app->get('organization/suspend', 		'OrganizationController@suspend');
// $app->get('organization/addEmployee', 	'OrganizationController@addEmployee');

// ------------------------------------------------------------------------------------------------
// LOAN
// ------------------------------------------------------------------------------------------------
// $app->get('organization/{id}/loan/create', 		'OrganizationController@delete');
// $app->get('organization/{id}/loan/update', 		'OrganizationController@delete');
// $app->get('organization/{id}/loan/pay', 			'OrganizationController@delete');


// ------------------------------------------------------------------------------------------------
// 
// ------------------------------------------------------------------------------------------------
