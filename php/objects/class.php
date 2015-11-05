<?php

	class Foo
	{
		private $bar;

		public function __construct( $value )
		{
			$this->bar = $value;
		}

		public function setValue( $value = 3 )
		{
			$this->bar = $value;
		}

		public function __destruct()
		{
			echo 'Aaaah, I am dying!';
		}
	}

?>