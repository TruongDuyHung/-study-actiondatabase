<?php
include_once "../connectDB/connect.php";
$id = $_REQUEST['id'];
//viet cau leh truy van lay ra book co code = id
$sql = "select books.name, author, price,books.category_id, categories.name as 'category_name', status from books inner join categories on books.category_id=categories.id where code = ?";
$stmt = $connect->prepare($sql);
$stmt->bindParam(1, $id);
$stmt->execute();
$book = $stmt->fetch();

// lay tat ca categories ra lu vao bien $categories
$sql1 = "select * from categories";
$stmt1 = $connect->prepare($sql1);
$stmt1->execute();
$categories = $stmt1->fetchAll();
include "../navbar/index.php";
?>
<div class="col-md-12">
    <div class="card mt-5">
        <div class="card-header">
            Books
        </div>
        <div class="card-body">
            <form method="post" action="../action/update.php?id=<?php echo $_REQUEST['id'] ?>">
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" type="text" value="<?php echo $book['name'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input name="author" type="text" value="<?php echo $book['author'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input name="price" type="text" value="<?php echo $book['price'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select name="category" class="form-control" id="exampleFormControlSelect1">
                        <?php foreach ($categories as $category) { ?>
                            <option
                                <?php if ($category['id'] == $book['category_id']) {
                                    ?>
                                    selected
                                <?php } ?>
                                    value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                        <option value="1"
                            <?php if ($book['status'] == 1): ?>
                                selected
                            <?php endif ?>
                        >Còn sách
                        </option>
                        <option
                            <?php if ($book['status'] == 0): ?>
                                selected
                            <?php endif ?> value="0">Hết sách
                        </option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>
