<?php
require 'database.php';
$test=$_POST['test_name'];
// $sql="DROP TABLE $test";
// $m=new db_mysql();
// $m->sql_comm($sql);
$sqll="DELETE FROM runningtest WHERE testname='$test'";
$mm=new db_mysql();
$mm->sql_comm($sqll);
echo("Deleted");



?>