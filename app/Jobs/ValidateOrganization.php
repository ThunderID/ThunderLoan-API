<?php

namespace App\Jobs;

use \App\Jsend;
use Validator;

class ValidateOrganization extends Job { 

	protected $organization_data;
	/**
	 * Create a new job instance.
	 *
	 * @return void
	 */
	function __construct(Array $organization_data) 
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
		$rules['name'] 		= ['required'];

		// VALIDATE
		$validator = Validator::make($this->organization_data, $rules);
		if ($validator->fails())
		{
			return Jsend::fail($validator->messages()->toArray());
		}
		else
		{
			return Jsend::success($this->organization_data);
		}
	}
}