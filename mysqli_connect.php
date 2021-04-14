<?php
$host = '127.0.0.1';
$port = 3306;
$dbname = 'simpledb';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $db = new mysqli($host, $user, $pass, $dbname, $port);
    $db->set_charset($charset);
} catch (\mysqli_sql_exception $e) {
    throw new \mysqli_sql_exception($e->getMessage(), $e->getCode());
    print "An Error occurred (from connection db). Message: " . $e->getMessage();
    print "An Error occurred (from connection db). Error code: " . $e->getCode();
}
unset($host, $dbname, $user, $pass, $charset); // we don't need them anymore