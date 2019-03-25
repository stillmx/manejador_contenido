<?php
$dbhost = 'localhost';
$dbname = 'syscont';
$dbuser ='root';
$dbpass = '';
try {
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser,
            $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo '<b>Error->:<b> '. $e->getMessage();
}
?>
