<?php
// ip:porta, nome do bd, login e senha
$base = "http://localhost/LaBelle";
$db_host = "SG-PizzariaJS-10027-mysql-master.servers.mongodirector.com";
$db_port = 3306;
$db_name = "Clinica_Estetica";
$db_user = "sgroot";
$db_pwd = "CKusrqQFfbLr5g_n";
 
$pdo = new PDO("mysql:host=".$db_host.";port=".$db_port.";dbname=".$db_name, $db_user, $db_pwd);