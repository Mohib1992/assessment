<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class DeleteModel extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'model:delete';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Delete Model Class.';

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
		$this->model_name = ucfirst($this->argument('modelName'));
		//$this->info($this->model_name);
		
		$model_path = app_path().'\\models';
		//$this->info($model_path);
		
		$file = $model_path.'\\'.$this->model_name.'.php';
		
		if(!file_exists($file))
			$this->info($file.' Not exist');
			
		if($this->confirm('Do you really want to delete ??')) :		
			if(class_exists($this->model_name)):
				unlink($file);
				$this->info($this->model_name.' Deleted');
			else :
				 $this->info('Unable To Delete'.$this->model_name);
			endif;
		endif;
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('modelName', InputArgument::REQUIRED, 'Model Name.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			//array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

}
