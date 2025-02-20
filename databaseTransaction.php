<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'book_catalog');


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

    public function insert($title, $isbn, $author, $publisher, $year_published, $category) {
        $result = mysqli_query(
            $this->connection,
            "INSERT INTO books(title, isbn, author, publisher, year_published, category) VALUES
            ('$title', '$isbn','$author', '$publisher','$year_published', '$category')"
        );
        $last_id = mysqli_insert_id($this->connection);
        return $last_id;
    }

    public function update($data) {
        $id = $data['id'];
        $title = $data['title'];
        $isbn = $data['isbn'];
        $author = $data['author'];
        $publisher = $data['publisher'];
        $year_published = $data['year_published'];
        $category = $data['category'];
        $result = mysqli_query(
            $this->connection,
            "UPDATE books set title='$title', isbn='$isbn', author='$author', publisher='$publisher',year_published='$year_published', category='$category' WHERE id = $id"
        );
        return $result;
    }
    
    public function delete($id) {
        $result = mysqli_query($this->connection, "DELETE FROM books WHERE id = $id");
        return $result;
    }
}
?>