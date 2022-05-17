<?php
$file_in = $argv[1];
$file_name = str_replace(".csv", "", $file_in);
$file_out = $file_name . "_results.csv";

print $file_in . PHP_EOL;

if(count($argv) > 2) {
	print "\nToo many arguments. This script only takes one.";
	exit();
}
else {
	if($file_h = fopen($file_in, "r")) {
		$add_list;
		$out_h = fopen($file_out, "w+");
		while($rows = fgetcsv($file_h)) {
			$add_list[0] = "<li>" . $rows[0] . "</li>";
			fputcsv($out_h, $add_list);
		}
		fclose($out_h);
	}
	else {
		print "\nInvalid file or file name";
		exit();
	}
}


?>