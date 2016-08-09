<?php
if(isset($_SESSION)){
	session_destroy();
	header("location:admin.php");
}
?>