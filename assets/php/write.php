<?php
$filename = 'action.txt';
@ $fp = fopen("./".$filename, 'wb');
if (!$fp)
{
    echo '<p><strong>Cannot process your request. Kindly refresh the page and Try again.</strong></p></body></html>';
    exit;
} 
else
{
	$outputstring  = 'yes';
	fwrite($fp, $outputstring);
	echo "Success";
}
?>