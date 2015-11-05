<?php

	// Just to don't raise an error
	class Foo { private $bar; }

	$var = new Foo();
	
	print_r( $var );

?>