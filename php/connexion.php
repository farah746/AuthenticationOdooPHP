<?php
$url = 'https://tp-erp.odoo.com/';
$db = 'TP_ERP';
$username = 'bromdhan746@gmail.com';
$password = 'admin2020.';

////////////////////////

require_once('ripcord.php');
$info = ripcord::client('https://tp-erp.odoo.com/start')->start();
list($url, $db, $username, $password) =
  array($info['host'], $info['database'], $info['user'], $info['password']);
  ///////////////////
  ///////////////////
  ///////////////////
  $common  =  ripcord :: client ("$url/xmlrpc/2/common"); 
  $common -> version ();


?>
