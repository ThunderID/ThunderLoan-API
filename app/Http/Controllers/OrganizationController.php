<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Jobs\RegisterOrganization;
use \App\Jsend;

class OrganizationController extends Controller
{
    //
    function Register(Request $request)
    {
    	if (!$request->has('organization'))
    	{
    		return JSend::fail(['organization' => 'Organization data required']);
    	}
    	else
    	{
	    	$organization_data = $request->input('organization');

	    	return $this->dispatch(new RegisterOrganization($organization_data, new \App\Models\User));
    	}
    }
}
