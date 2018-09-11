<?php 
// PHP array to create JSON FROM
$generate_json = array(
	'hello' => array(
		'hello_world' => 'world'
	)
);

// Create JSON
$generate_json = json_encode ( $generate_json );

// Create filename
$filename = 'generated_json_' . date( 'Y-m-d' );

// Force download .json file with JSON in it
header("Content-type: application/vnd.ms-excel");
header("Content-Type: application/force-download");
header("Content-Type: application/download");
header("Content-disposition: " . $filename . ".json");
header("Content-disposition: filename=" . $filename . ".json");

print $generate_json;
exit;
?>