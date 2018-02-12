<?php
/* Database config */
$db_host		= 'sql12.freemysqlhosting.net';
$db_user		= 'sql12220932';
$db_pass		= 'H2F99QX48W';
$db_database	= 'sql12220932'; 

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>