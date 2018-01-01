<?php
header( “HTTP/1.1 301 Moved Permanently” );
header("Location: http://www.illinoisfirejuniors.com"); /* Redirect browser */

/* Make sure that code below does not get executed when we redirect. */
exit;
?>
