<?php

namespace Ucone;

class MathPartOne
{
	public $result;
	public function __construct()
    {
        echo "Process started <br><br>";
    }

	public function modulo($value,$number)
	{
		return $value % $number;
	}

	public function isDouble($value)
	{
		return $this->result = ($this->modulo($value,2) == 0) ? "İs Double?  Yes <br><br>": "İs Double?  No <br><br>" ;
	}

	public function isSingle($value)
	{
		return $this->result = ($this->modulo($value,2) == 1) ? "İs single? Yes <br><br>": "İs single? No <br><br>" ;
	}

	public function __destruct()
	{
    	echo "Process Finished";
  	}
}

?>
