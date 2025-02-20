<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link href="assets/index.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="container-end pb-35">
            <button class="btn btn-success border-0 success" data-toggle="modal" data-target="#addBookModal">Add</button>
        </div>

        <div id="success-message" class="container-end d-none">
            <span class="text-success">Book added successfully</span>
        </div>
    
        <table id="booksTable">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>ISBN</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Year Published</th>
                    <th>Category</th>
                    <th class="actions"></th>
                </tr>
            </thead>
            <tbody id="booksTableBody">

            </tbody>
        </table>

    </div>
    

    <!-- Add Book Modal -->
    <div class="modal fade" id="addBookModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBookModalLabel">Add Book</h5>
                <button type="button" class="close" data-dismiss="modal">
                <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="addBookForm">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>ISBN</label>
                    <input type="text" name="isbn" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" name="author" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Publisher</label>
                    <input type="text" name="publisher" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Year Published</label>
                    <input type="number" name="year_published" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" name="category" class="form-control" required>
                </div>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="addBookFormSubmit" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Edit Book Modal -->
    <div class="modal fade" id="editBookModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBookModalLabel">Edit Book</h5>
                <button type="button" class="close" data-dismiss="modal">
                <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="editBookForm">
                <input id="hiddenInputEdit" type="hidden" name="id" value="">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>ISBN</label>
                    <input type="text" name="isbn" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" name="author" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Publisher</label>
                    <input type="text" name="publisher" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Year Published</label>
                    <input type="number" name="year_published" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" name="category" class="form-control" required>
                </div>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="editBookFormSubmit" type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Delete Book Modal -->
    <div class="modal fade" id="deleteBookModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteBookModalLabel">Delete Book</h5>
                <button type="button" class="close" data-dismiss="modal">
                <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this book?
                <form id="deleteBookForm">
                    <input id="hiddenInputDelete" type="hidden" name="id" value="">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="deleteBookFormSubmit" type="button" class="btn btn-danger">Delete</button>
            </div>
            </div>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "fetch.php",
            success: function (response) {
                html = '';
                $.each(response, function(key, value){
                    html = '<tr id="bookId'+value['id']+'">';
                    html += fillTableRow(value);
                    html += '</tr>';
                    $('#booksTableBody').append(html);
                })
                
            }
        });
    });

</script>
</body>
</html>