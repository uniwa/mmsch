<?php

if (isset($_POST)){
	file_put_contents("whatsnew.txt", $_POST['whatsnew']);
}

?>
