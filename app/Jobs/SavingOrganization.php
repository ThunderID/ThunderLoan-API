<?php

namespace App\Jobs;

use \App\Jsend;

class SavingOrganization extends Job { 

	protected $model;

	/**
	 * Create a new job instance.
	 *
	 * @return void
	 */
	function __construct($model) 
	{
		$this->model = $model;
	}

	/**
	 * Execute the job.
	 *
	 * @return void
	 */
	public function handle()
	{
		return $this->dispatch(new ValidateOrganization($this->model->toArray()));
	}
}