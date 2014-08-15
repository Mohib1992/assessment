<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class ModelList extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'model';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'For Model Instance.';

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
		$this->modelcommand = $this->argument('modelcommand');
		//$this->info($this->modelcommand);
		
		$modelDIR = app_path().'\\models';
		
		if(is_dir($modelDIR)) :		
			//$this->info($modelDIR.' Directory found');
			$files = scandir($modelDIR);
			$files_director = array_diff($files,array('.','..'));
			//$this->info(implode(PHP_EOL,$files_director));			
			$this->_print($files_director);
		else : $this->error('Directory not found !!');
		endif;
		
		
	}	
	
	private function _print($files)
	{		
		$space = '            ';
		$this->info('------------------------------');
		$this->info('|  Model Name  |  File Name  |');			
		$this->info('------------------------------');						
		foreach($files as $file){			
			$this->info('|  '.$this->getModelName($file,$space).'| '.$this->getFileName($file,$space).'|');
		}		
		$this->info('------------------------------');	
	}
	
	private function getModelName($f,$s)
	{
		$modelname = substr($f,0,strlen($f)-4);
		return $modelname.substr($s,0,strlen($s)-strlen($modelname));
	}

	private function getFileName($f,$s)
	{
		return $f.substr($s,0,strlen($s)-strlen($f));
	}
	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('modelcommand', InputArgument::REQUIRED, 'Model Commands.'),
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
