<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'simple_book_catalog');


class DatabaseTransaction {

    private $connection;

    public function __construct() {
        $conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
        $this->connection = $conn;

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function index() {
        $result = mysqli_query($this->connection,"SELECT * FROM books");
        $result_array = [];

        if(mysqli_num_rows($result) > 0)
        {
            foreach($result as $row) {
                array_push($result_array, $row);
            }
            header('Content-type: application/json');
            echo json_encode($result_array);
        }
	}
}
?>