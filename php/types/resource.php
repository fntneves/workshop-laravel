<?php

	// Will be bool(false) if file does not exist
	$var = fopen( 'file.txt', 'rw');
	
	var_dump( $var );

?>