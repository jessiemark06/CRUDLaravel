<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Lists</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
 
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0">Student List</h2>

        <a href="/student/add" class="btn btn-primary">
            Add Student
        </a>
    </div>
 
    @if(session('info'))
        <div class="alert alert-info">
            {{ session('info') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
 
    <div class="card shadow-sm mb-4">
        <div class="card-body">

            <form action="/" method="GET">
                <div class="input-group">

                    <input
                        type="text"
                        name="search"
                        class="form-control"
                        placeholder="Search student..."
                        value="{{ request('search') }}"
                    >

                    <button type="submit" class="btn btn-dark">
                        Search
                    </button>

                    @if(request('search'))
                        <a href="/" class="btn btn-outline-secondary">
                            Clear
                        </a>
                    @endif

                </div>
            </form>

        </div>
    </div> 
    <div class="card shadow-sm">

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover table-bordered mb-0 align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Course</th>
                            <th>Year</th>
                            <th width="220">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($students as $student)

                            <tr>

                                <td>
                                    {{ $student->first_name }}
                                </td>

                                <td>
                                    {{ $student->last_name }}
                                </td>

                                <td>
                                    {{ $student->course }}
                                </td>

                                <td>
                                    {{ $student->year }}
                                </td>

                                <td>
 
                                    <a
                                        href="/student/view/{{ $student->id }}"
                                        class="btn btn-info btn-sm text-white"
                                    >
                                        View
                                    </a>
 
                                    <a
                                        href="/student/edit/{{ $student->id }}"
                                        class="btn btn-warning btn-sm"
                                    >
                                        Edit
                                    </a>
 
                                    <form
                                        action="/student/delete/{{ $student->id }}"
                                        method="POST"
                                        class="d-inline"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure to delete?')"
                                        >
                                            Delete
                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="5" class="text-center py-4 text-muted">
                                    No students found.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>
 
    <div class="d-flex justify-content-between align-items-center mt-4">

        <div class="text-muted">
            Page {{ $students->currentPage() }} of {{ $students->lastPage() }}
        </div>

        <nav>

            <ul class="pagination mb-0">

                @if($students->onFirstPage())

                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>

                @else

                    <li class="page-item">
                        <a
                            class="page-link"
                            href="{{ $students->previousPageUrl() }}"
                        >
                            Previous
                        </a>
                    </li>

                @endif

                @if($students->hasMorePages())

                    <li class="page-item">
                        <a
                            class="page-link"
                            href="{{ $students->nextPageUrl() }}"
                        >
                            Next
                        </a>
                    </li>

                @else

                    <li class="page-item disabled">
                        <span class="page-link">Next</span>
                    </li>

                @endif

            </ul>

        </nav>

    </div>

</div>

</body>
</html>