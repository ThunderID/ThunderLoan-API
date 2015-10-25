<?php

namespace App\Jobs;

use \App\Jsend;

class DeletingOrganization extends Job { 

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
		return JSend::fail(['error' => 'Organization cannot be deleted']);
	}
}