<?php
require_once 'databaseTransaction.php';

$database = new DatabaseTransaction();

$title = $_POST['title'];
$isbn = $_POST['isbn'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$year_published = $_POST['year_published'];
$category = $_POST['category'];

$result = $database->insert($title, $isbn, $author, $publisher, $year_published, $category);

if($result) {
    $_POST['id']=$result;
    echo json_encode($_POST);
}

?>