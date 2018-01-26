<?php
	$a = "new string";
	xdebug_debug_zval( 'a' );
	$b = &$a;
	xdebug_debug_zval( 'a' );

	unset($b);
	xdebug_debug_zval( 'a' );
?>
