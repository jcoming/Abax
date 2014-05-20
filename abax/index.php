<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Abax - Numeral Tracker</title>
  <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
<?php
	$file = file_get_contents( 'database.json' );
	$json = json_decode( $file );

	echo '<pre>'. print_r($json, true) . '</pre>';

?>
</body>
</html>