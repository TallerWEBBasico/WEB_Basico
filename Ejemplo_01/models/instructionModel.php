<?php 
class InstructionModel
{
	private $subjects;
	private $instruction;

	public function __construct($instruction){
		$this->instruction = $instruction;
		$this->subjects = array();
	}

	public function addSubject($subject){
		array_push($this->subjects, $subject);
	}

	public function getSubjects(){
		return $this->subjects;
	}

	public function setInstruction($instruction){
		$this->instruction = $instruction;
	}

	public function getInstruction(){
		return $this->instruction;
	}


}
?>