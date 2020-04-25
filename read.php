<?php
$filename = 'action.txt';

$myfile = fopen($filename, "r") or die("Unable to open file!");
$results = fread($myfile,filesize("action.txt"));
fclose($myfile);

if($results == 'yes'){
	
	@ $fp = fopen("./".$filename, 'wb');
	if (!$fp)
	{
		echo '<p><strong>Cannot process your request. Kindly refresh the page and Try again.</strong></p></body></html>';
		exit;
	} 
	else
	{
		$outputstring  = 'no';
		fwrite($fp, $outputstring);
	}
	
	echo $results;
	
}else{
	
	echo $results;
	
}
?>