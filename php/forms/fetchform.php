<?php

	echo '<p>Message: ' . $_POST['my_text'] . '<p/>';

?>

<!DOCTYPE html>

<html>
	<head>
		<title>Forms</title>
	</head>

	<body>
		<form action="" method="post">
			<input type="text" name="my_text"/>
			<input type="submit" name="my_submit"/>
		</form>
	</body>
</html>