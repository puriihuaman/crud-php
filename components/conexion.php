<?php

	function connect( $database ) {
		try {
			$conn = new PDO("mysql:host=localhost; dbname=$database; charset=utf8", 'root', '');
			return $conn;
		} catch ( PDOException $err ) {
			echo "Error " . $err->getMessage();
		}
	}

?>