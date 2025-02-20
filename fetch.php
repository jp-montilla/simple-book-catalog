<?php
require_once 'databaseTransaction.php';

$database = new DatabaseTransaction();
return $database->index();

?>