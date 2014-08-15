<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class MakeModel extends Command
{

	/**
	* The console command name.
	*
	* @var string
	*/
	protected $name = 'model:make';

	/**
	* The console command description.
	*
	* @var string
	*/
	protected $description = 'This will create model';

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
		$this->model_name = ucfirst($this->argument('modelname'));
		
		if(!isset($this->model_name)) :
			$this->info('Enter Model Name');
		else :
		
			$file = 'app\\models\\'.$this->model_name.'.php';
			//$this->info($file);

			if(file_exists($file))
				 unlink($file);
			
			$fileHandeler = fopen($file,'x+') or $this->error('file cann\'t create');	

			if($fileHandeler == TRUE ) :
				
				if(fwrite($fileHandeler,$this->createModel($this->model_name)))
					fclose($fileHandeler);
				else $this->info($this->model_name.' isn\'t Create');			
				
				$this->info($this->model_name.' Created ');
				
			endif;
		endif;
	}

	public function createModel($model_name)
	{
		$model = '<?php'
					.PHP_EOL.PHP_EOL.PHP_EOL.
					'class '.$model_name.' extends Eloquent {'
					.PHP_EOL.' protected $fillable = array();'.PHP_EOL
					.PHP_EOL.' private $rules = array();'.PHP_EOL
					.PHP_EOL.' public function validate($data){'.PHP_EOL
					.PHP_EOL.' $validate = Validator::make($data,$rules);'.PHP_EOL
					.PHP_EOL.' return $validate->passes();'.PHP_EOL
					.PHP_EOL.' } '.PHP_EOL
					.'}'.PHP_EOL.'?>';
		return $model;

	}

	/**
	* Get the console command arguments.
	*
	* @return array
	*/
	protected function getArguments()
	{
		return array(
			array('modelname',InputArgument::REQUIRED,'Enter Model Name'),
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
			//	array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

}
