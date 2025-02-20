<?php
require_once 'databaseTransaction.php';

$database = new DatabaseTransaction();

$result = $database->delete($_POST['id']);
echo json_encode($_POST);

?>