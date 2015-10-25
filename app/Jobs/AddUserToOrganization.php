<?php

namespace App\Jobs;

use \App\Jsend;
use \App\Models\User;
use \App\Models\Organization;

class AddUserToOrganization extends Job { 

	protected $model;
	protected $is_administrator;

	/**
	 * Create a new job instance.
	 *
	 * @return void
	 */
	function __construct(User $user, Organization $organization, $is_administrator) 
	{
		$this->user = $user;
		$this->is_administrator = $is_administrator ? true : false;
	}

	/**
	 * Execute the job.
	 *
	 * @return void
	 */
	public function handle()
	{
		
	}
}