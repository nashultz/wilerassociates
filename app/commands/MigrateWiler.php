<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class MigrateWiler extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'wiler:migrate_users';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Migrates Wiler Users from Old DB to New DB';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		//
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{

	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{

	}

}
