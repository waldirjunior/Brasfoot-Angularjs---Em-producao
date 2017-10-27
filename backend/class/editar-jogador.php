<?php

	// Read the file contents into a string variable,
	// and parse the string into a data structure
	$str_data = file_get_contents("data.json");
	$data = json_decode($str_data,true);
	 
	echo "Boss hobbies: ".$data["boss"]["Hobbies"][0];
	 
	// Modify the value, and write the structure to a file "data_out.json"
	//
	$data["boss"]["Hobbies"][0] = "dois";
	 
	$fh = fopen("data.json", 'w')
	      or die("Error opening output file");
	fwrite($fh, json_encode($data));
	fclose($fh); 

?>