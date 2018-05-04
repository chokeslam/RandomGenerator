<?php

class RandomGenerator{

	protected $totalLength;
	protected $StringLength;
	protected $IntLength;


	public function GetRandomString(int $StringLength = 10){

		$this->StringLength = $StringLength;

		$Notneedwords = array('I','l','O');
		$RandomString = array_merge(range('A','Z'),range('a','z'));
		$RandomString = array_diff($RandomString, $Notneedwords);
		$RandomString = array_flip($RandomString);
		$RandomString = array_rand($RandomString,$this->StringLength);
		$RandomString = implode($RandomString);

		return $RandomString;
	}

	public function GetRandomInt(int $IntLength = 5){

		$this->IntLength = $IntLength;

		$Int = range(0,9);
		$Int = array_rand($Int,$this->IntLength);
		shuffle($Int);
		$Int = implode($Int);

		return $Int;
	}

	public function Random(int $StringLength = 8 , int $IntLength = 3){

		$String = $this->GetRandomString($StringLength);
		$String .= $this->GetRandomInt($IntLength);
		$String = str_shuffle($String);

		return $String;

	}

}


