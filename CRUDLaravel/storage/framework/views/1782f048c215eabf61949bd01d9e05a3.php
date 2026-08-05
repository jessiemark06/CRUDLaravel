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
 
    <?php if(session('info')): ?>
        <div class="alert alert-info">
            <?php echo e(session('info')); ?>

        </div>
    <?php endif; ?>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
 
    <div class="card shadow-sm mb-4">
        <div class="card-body">

            <form action="/" method="GET">
                <div class="input-group">

                    <input
                        type="text"
                        name="search"
                        class="form-control"
                        placeholder="Search student..."
                        value="<?php echo e(request('search')); ?>"
                    >
                

                    <button type="submit" class="btn btn-dark">
                        Search
                    </button>

                 

                    <?php if(request('search')): ?>
                        <a href="/" class="btn btn-outline-secondary">
                            Clear
                        </a>
                    <?php endif; ?>

                </div>
            </form>

        </div>
       <div class="d-flex gap-3 justify-content-end px-3 pb-3">

    <form action="/sort/name" method="GET" class="d-flex gap-2 align-items-center">
        <select name="firstSort" class="form-select">
            <option value="">Order By</option>
            <option value="first_name">First Name</option>
            <option value="last_name">Last Name</option>
                        <option value="course">Course</option>
            <option value="year">Year</option>
        </select>

        <button type="submit" class="btn btn-primary">
            Sort
        </button>
    </form>
 
 <form action="/filter/name" method="GET" class="d-flex gap-2 align-items-center">
        <select name="year" class="form-select">
            <option value="">Filter By</option> 
            <option value="1">First Year</option>
            <option value="2">Second Year</option>
              <option value="3">Third Year</option>
            <option value="4">Fourth Year</option>
        </select>

        <button type="submit" class="btn btn-primary">
            Filter
        </button>
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

                        <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                            <tr>

                                <td>
                                    <?php echo e($student->first_name); ?>

                                </td>

                                <td>
                                    <?php echo e($student->last_name); ?>

                                </td>

                                <td>
                                    <?php echo e($student->course->course_name); ?>

                                </td>

                                <td>
                                    <?php echo e($student->year); ?>

                                </td>

                                <td>
 
                                    <a
                                        href="/student/view/<?php echo e($student->id); ?>"
                                        class="btn btn-info btn-sm text-white"
                                    >
                                        View
                                    </a>
 
                                    <a
                                        href="/student/edit/<?php echo e($student->id); ?>"
                                        class="btn btn-warning btn-sm"
                                    >
                                        Edit
                                    </a>
 
                                    <form
                                        action="/student/delete/<?php echo e($student->id); ?>"
                                        method="POST"
                                        class="d-inline"
                                    >
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>

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

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                            <tr>
                                <td colspan="5" class="text-center py-4 text-muted">
                                    No students found.
                                </td>
                            </tr>

                        <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>
 
    <div class="d-flex justify-content-between align-items-center mt-4">

        <div class="text-muted">
            Page <?php echo e($students->currentPage()); ?> of <?php echo e($students->lastPage()); ?>

        </div>

        <nav>

            <ul class="pagination mb-0">

                <?php if($students->onFirstPage()): ?>

                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>

                <?php else: ?>

                    <li class="page-item">
                        <a
                            class="page-link"
                            href="<?php echo e($students->previousPageUrl()); ?>"
                        >
                            Previous
                        </a>
                    </li>

                <?php endif; ?>

                <?php if($students->hasMorePages()): ?>

                    <li class="page-item">
                        <a
                            class="page-link"
                            href="<?php echo e($students->nextPageUrl()); ?>"
                        >
                            Next
                        </a>
                    </li>

                <?php else: ?>

                    <li class="page-item disabled">
                        <span class="page-link">Next</span>
                    </li>

                <?php endif; ?>

            </ul>

        </nav>

    </div>

</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\CRUDLaravel\resources\views/index.blade.php ENDPATH**/ ?>