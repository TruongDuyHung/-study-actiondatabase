<?php
include "../navbar/index.php";
include "../connectDB/connect.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $searchkey = $_REQUEST['search'];
    $sql = "select books.name,author,price,categories.name as category_name, status from books inner join categories on books.category_id = categories.id where books.name like '%$searchkey%' ";
    $stmt = $connect->prepare($sql);
//    $stmt->bindParam(1,$searchkey);
    $stmt->execute();
    $result = $stmt->fetchAll();
}
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
                <?php foreach ($result as $key => $value): ?>
                    <tr>
                        <th scope="row"><?php echo ++$key ?></th>
                        <td><?php echo $value['name'] ?></td>
                        <td><?php echo $value['author'] ?></td>
                        <td><?php echo $value['price'] ?></td>
                        <td><?php echo $value['category_name'] ?></td>
                        <td>
                            <?php if ($value['status'] == 1): ?>
                                <p class="text-success">Còn sách</p>
                            <?php else: ?>
                                <p class="text-danger">Hết sách</p>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="../action/delete.php?id=<?php echo $value['code'] ?>"
                               class="btn btn-danger">Delete</a>
                            <a href="update.php?id=<?php echo $value['code'] ?>" class="btn btn-primary">Update</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>