<?php
include_once 'config.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM registro WHERE id=:id";
    $query = $pdo->prepare($sql);
    $query->execute([
        'id' => $id
    ]);
echo "<script type='text/javascript'>setTimeout('history.back()',0);</script>";
?>
