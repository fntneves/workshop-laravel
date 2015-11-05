<?php

	function even( $var )
	{
		if( $var % 2 == 0 )
			return true;
		else
			return false;
	}

	var_dump( even( 6 ) );

?>