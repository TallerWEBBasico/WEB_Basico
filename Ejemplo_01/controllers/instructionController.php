<?php 
require_once './models/instructionModel.php';
$instruction = new InstructionModel('Camina');
$instruction->addSubject('Antonio');
$instruction->setInstruction('Corre');
$instruction->addSubject('Carlos');
$instruction->addSubject('Maria');
$subjects = $instruction->getSubjects();
require_once './views/instructionView.php';
?>