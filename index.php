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
        <div class="container-end">
            <button class="btn btn-success border-0 success" data-toggle="modal" data-target="#addBookModal">Add</button>
        </div>
    
    
        <table class>
        <tr>
            <th>Title</th>
            <th>ISBN</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Year Published</th>
            <th>Category</th>
            <th class="actions"></th>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td>Germany</td>
            <td>Germany</td>
            <td>Germany</td>
            <td class="actions">
                <button class="btn btn-secondary border-0 secondary" data-toggle="modal" data-target="#editBookModal">Edit</button>
                <button class="btn btn-secondary border-0 secondary" data-toggle="modal" data-target="#deleteBookModal">Del</button>
            </td>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td>Germany</td>
            <td>Germany</td>
            <td>Germany</td>
            <td class="actions">
                <button class="btn btn-secondary border-0 secondary" data-toggle="modal" data-target="#editBookModal">Edit</button>
                <button class="btn btn-secondary border-0 secondary" data-toggle="modal" data-target="#deleteBookModal">Del</button>
            </td>
        </tr>
        </table>

    </div>

    <!-- Add Book Modal -->
    <div class="modal fade" id="addBookModal" tabindex="-1" role="dialog" aria-labelledby="addBookModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBookModalLabel">Add Book</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>ISBN</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Publisher</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Year Published</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" class="form-control">
                </div>
                
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editBookModal" tabindex="-1" role="dialog" aria-labelledby="editBookModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBookModalLabel">Edit Book</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>ISBN</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Publisher</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Year Published</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" class="form-control">
                </div>
                
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteBookModal" tabindex="-1" role="dialog" aria-labelledby="deleteBookModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteBookModalLabel">Delete Book</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete book TITLE TO?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
            </div>
        </div>
    </div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>