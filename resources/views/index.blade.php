<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Lists</title>
</head>
<style>
    .table-container {
        width: 80%;
        margin: 30px auto;
    }

    .table-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .table-header h2 {
        margin: 0;
    }

    .table-header button {
        padding: 8px 15px;
        cursor: pointer;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    } 
  .action-button {
    display: inline-block;
    padding: 5px 9px;
    margin-right: 3px;
    border: none;
    border-radius: 4px;
    font-size: 13px;
    text-decoration: none;
    cursor: pointer;
    color: white;
}
 
        .view-button {
            background-color: #3498db;
        }
 
        .edit-button {
            background-color: #f39c12;
        }
 
        .delete-button {
            background-color: #e74c3c;
        }
 
        .view-button:hover {
            background-color: #2980b9;
        }

        .edit-button:hover {
            background-color: #d68910;
        }

        .delete-button:hover {
            background-color: #c0392b;
        }
</style>
<body>
    <div class="table-container">

    <div class="table-header">
        <h2>Student List</h2>

        <a href="/student/add">
            <button>Add Student</button>
        </a>
    </div>

    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Course</th>
                <th>Year</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->year }}</td>
                   <td>
                    <a href="/student/view/{{ $student->id }}" class="action-button view-button">
                        View
                    </a> 

                    <a href="/student/edit/{{ $student->id }}" class="action-button edit-button">
                        Edit
                    </a>

                    <form action="/student/delete/{{ $student->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="action-button delete-button"
                                onclick="return confirm('Are you sure to delete?')">
                            Delete
                        </button>
                    </form>
                </td>
                </tr>
            @endforeach

            
        </tbody>
    </table>

</div>
    
</body>
</html>