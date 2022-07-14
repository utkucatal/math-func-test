<?php

namespace Ucone;

class MathPartTwo
{
	public $result;
	public function __construct()
    {
        echo "Process started <br><br>";
    }

	public function square($value,$times)
	{
		return $this->result = "$value Square = ".pow($value,$times)."<br><br>";
	}

	public function squareRoot($value)
	{
		return $this->result = "$value Square Root = ".sqrt($value)."<br><br>";
	}

	public function __destruct()
	{
    	echo "Process Finished";
  	}
}

?>
