<?php
?>
<table>
    <thread>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>author</th>
            <th>price</th>
            <th>category</th>
            <th>status</th>
            <th>action</th>
        </tr>
    </thread>
    <tbody>
    <?php foreach ($book as $key=> $value) { ?>
    <tr>
        <th> <?php echo ++$key?></th>
        <td><?php echo $book['name']?></td>
        <td><?php echo $book['author']?></td>
        <td><?php echo $book['price']?></td>
        <td><?php echo $book['category']?></td>
        <td><?php echo $book['status']?></td>
        <td>
            <a href="actionbooks/delete.php">Delete</a>
            <a href="actionbooks/update.php">Update</a>
        </td>
    </tr>
    <?php }?>
    </tbody>
</table>



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
    <?php foreach ($book as $key => $book): ?>
        <tr>
            <th scope="row"><?php echo ++$key ?></th>
            <td><?php echo $book['name'] ?></td>
            <td><?php echo $book['author'] ?></td>
            <td><?php echo $book['price'] ?></td>
            <td><?php echo $book['category_id'] ?></td>
            <td>
                <?php if ($book['status'] == 1): ?>
                    <p class="text-success">Còn sách</p>
                <?php else: ?>
                    <p class="text-danger">Hết sách</p>
                <?php endif; ?>
            </td>
            <td>
                <a href="../action/delete-book.php?id=<?php echo $book['book_id'] ?>" class="btn btn-danger">Delete</a>
                <a href="../books/update.php?id=<?php echo $book['book_id'] ?>" class="btn btn-primary">Update</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>