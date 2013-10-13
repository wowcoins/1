<?php
unlink(dirname(__FILE__).'/f/'.$_GET['n']);
header('Location: list.php');
?>
