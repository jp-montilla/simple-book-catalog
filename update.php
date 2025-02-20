<?php
require_once 'databaseTransaction.php';

$update = new DatabaseTransaction();

$result = $update->update($_POST);

if($result) {
    echo json_encode($_POST);
}

?>