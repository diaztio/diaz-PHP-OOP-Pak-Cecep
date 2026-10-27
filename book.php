<?php require "template/header.php"; ?>

<div class="container mt-2">
    <div class="card">
        <div class="card-header text-center bg-primary">
            PPLG Library List Book'<s></s>
        </div>
        <div class="card-body">
            <div class="d-flex mb-3">
                <input type="text" class="form-control border border-dark" placeholder="Search...">
                <button class="btn btn-primary m-2 border border-dark">Find</button>
            </div>
            <div class="table table-responsive">
                <table class="table table-primary border border-dark">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Author </th>
                            <th>Title </th>
                            <th>Year </th>
                            <th>Publisher </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>JK. Rowling </th>
                            <th>Harry Potter </th>
                            <th>20XX </th>
                            <td>unknown </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require "template/footer.php"; ?>