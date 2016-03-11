<?php 
class Log 
{

	private $filename;
	private $handle;
	private $date;
	private $time;

	public function logMessage($logLevel, $message) 
	{

		$message = PHP_EOL.$this->date.' '.$this->time.' ['.$logLevel.'] '.$message;
		fwrite($this->handler, $message);
	}

	public function info($message) 
	{

		//pass info to logMessage
		$this->logMessage('INFO',$message);

	}

	public function error($message) 
	{

		//pass error to logMessage
		$this->logMessage('ERROR',$message);
		 
	}

	public function __construct($prefix = 'log')
	{
		// set our property variable types
		settype($prefix, 'string');

		// set the date and time
		$this->date = date('Y-m-d');
		$this->time = date('H:i:s');

		// create filename with the format $prfix-YYYY-MM-DD.log
		$this->filename = '../logdata/'.$prefix.'-'.$this->date.'.log';
		
		// open the file stream (handler??) whateve we call the conneciton
		$this->handler = fopen($this->filename, 'a');

	}

	public function __destruct()
	{
		// close the handler
		fclose($this->handler);
	}



}

// $test = new Log();
// $test->info("test this message");

