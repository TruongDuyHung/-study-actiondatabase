<?php
include_once "../connectDB/connect.php";
$sql = "select code,books.name, author, price,categories.name as category_name,status from books INNER join categories on books.category_id= categories.id";
$stmt = $connect->query($sql);
$books = $stmt->fetchAll();
include "../navbar/index.php";
?>
<div class="col-md-12">
    <div class="card mt-5">
        <div class="card-header">
            Books
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Author</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($books as $key => $book): ?>
                    <tr>
                        <th scope="row"><?php echo ++$key ?></th>
                        <td><?php echo $book['name'] ?></td>
                        <td><?php echo $book['author'] ?></td>
                        <td><?php echo $book['price'] ?></td>
                        <td><?php echo $book['category_name'] ?></td>
                        <td>
                            <?php if ($book['status'] == 1): ?>
                                <p class="text-success">Còn sách</p>
                            <?php else: ?>
                                <p class="text-danger">Hết sách</p>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="../action/delete.php?id=<?php echo $book['code'] ?>"
                               class="btn btn-danger">Delete</a>
                            <a href="update.php?id=<?php echo $book['code'] ?>" class="btn btn-primary">Update</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</body>
</html>
