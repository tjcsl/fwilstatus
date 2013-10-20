<?php
if(isset($_GET['nagios'])) {
	die(file_get_contents('https://monitor.tjhsst.edu/nagios/api/' . $_GET['nagios']));
}
if(isset($_GET['vmmap'])) {
	die(file_get_contents('https://www.tjhsst.edu/~2016fwilson/vmmap/fwil.php'));
}
?>