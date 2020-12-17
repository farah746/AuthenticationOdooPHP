<?php

require_once('ripcord.php');


//Variable
$url = "http://localhost:8069";
$db = "TP_ERP";
$username = 'bromdhan746@gmail.com';
$password = 'Farah2020.';

echo "$url/xmlrpc/2/common";


$common = ripcord::client($url."/xmlrpc/2/common");

$uid = $common->authenticate($db, $username, $password, array());
echo $uid;

var_dump($uid);

?>
