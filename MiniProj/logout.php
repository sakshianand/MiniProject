<?php
// Start the session
session_start();
?>
<?php
	session_destroy ();
	header('Location:index.php');
?>