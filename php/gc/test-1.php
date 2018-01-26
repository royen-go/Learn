<?php
	$a = array('one');
	//xdebug_debug_zval('a');
	
	$a[] = &$a;
	//xdebug_debug_zval('a');
	unset($a);
	xdebug_debug_zval('a');
?>
