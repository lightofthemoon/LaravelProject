<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 70px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Categories</a>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-4">
            <h1>List of Categories</h1>
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->categoryName }}</td>
                    <td>
                        <div class="btn-group">
                            {{-- <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#updateCategoryModal-{{ $category->id }}">Update</button> --}}
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('categories.destroy', $category->id) }}" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Create Category Modal -->
    <div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModalLabel" aria-hidden="true">
        <!-- Modal content -->
    </div>

    <!-- Update Category Modal -->
    @foreach ($categories as $category)
    <div class="modal fade" id="updateCategoryModal-{{ $category->id }}" tabindex="-1" aria-labelledby="updateCategoryModalLabel-{{ $category->id }}" aria-hidden="true">
        <!-- Modal content -->
    </div>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Delete category
            $('.delete-btn').click(function() {
                var categoryId = $(this).data('id');
                if (confirm('Are you sure you want to delete this category?')) {
                    $.ajax({
                        url: '/categories/' + categoryId,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            alert('Category deleted successfully!');
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            alert('Error deleting category: ' + error);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>