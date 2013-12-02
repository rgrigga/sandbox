<?php

class Utility{
	
function startTimer(){
$this->time = microtime(TRUE);
$this->mem = memory_get_usage();

}

function stopTimer(){
	print_r(array(
		'memory' => (memory_get_usage() - $this->mem) / (1024 * 1024),
		'seconds' => microtime(TRUE) - $this->time
		));
	}

}