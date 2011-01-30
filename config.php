<?php
// connect to db
$link = mysql_connect('pimedtoyscom.ipagemysql.com', 'payroll_user', '89408940');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('payroll_db') ) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>