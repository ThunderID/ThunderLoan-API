<?php

namespace App\Jobs;

use \App\Jsend;
use \App\Models\User;
use \App\Models\Organization;

class RegisterOrganization extends Job { 

	protected $organization_data;

	/**
	 * Create a new job instance.
	 *
	 * @return void
	 */
	function __construct(Array $organization_data, User $user) 
	{
		$this->organization_data = $organization_data;
	}

	/**
	 * Execute the job.
	 *
	 * @return void
	 */
	public function handle()
	{
		// ------------------------------------------------------------
		// Save Organization
		// ------------------------------------------------------------
		$organization = new Organization($this->organization_data);
		if (!$organization->save())
		{
			return JSend::fail($organization->getErrors()->toArray());
		}

		// ------------------------------------------------------------
		// Assign Owner
		// ------------------------------------------------------------
		$this->dispatch(new AddUserToOrganization($organization, $user, true));

		// ------------------------------------------------------------
		// Email Owner
		// ------------------------------------------------------------
		$this->dispatch(new NotifyOwnerAfterOrganizationCreated($organization, $user));

		// ------------------------------------------------------------
		// Email Admin
		// ------------------------------------------------------------
		$this->dispatch(new NotifyOwnerAfterOrganizationCreated($organization, $user));
	}
}