<?php

	sdDBSetup();
	
	$results = sdRunQuery("SELECT * FROM test");
	foreach ($results as $row) {
		echo $row['test_id'] . "\n";
	}
	
	function sdDBSetup() {
		DB::$user = DBUSER;
		DB::$password = DBPASSWORD;
		DB::$dbName = DBDATABASE;
		DB::$host = DBHOST;
		DB::$port = DBPORT;
	}
	
	function sdRunQuery($sql) {
		$result = DB::query($sql);
		return $result;
	}
	
?>