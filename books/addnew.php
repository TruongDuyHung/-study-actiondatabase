<?php
include_once "../connectDB/connect.php";
include "../navbar/index.php";
$sql = "select * from categories";
$stmt = $connect->prepare($sql);
$stmt->execute();
$categories=$stmt->fetchAll();
?>
<div class="col-md-12">
    <div class="card mt-5">
        <div class="card-header">
            <h2 class="text-success"><p align="center">ADD NEW BOOK!</p></h2>
        </div>
        <div class="card-body" align="center">
            <form method="post" action="../action/addnew.php" style="width: 500px" >
                <div class="form-group" align="left">
                    <label>Name</label>
                    <input name="name" type="text" placeholder="Example: Người âm phủ" class="form-control">
                </div>
                <div class="form-group"align="left">
                    <label>Author</label>
                    <input name="author" type="text" placeholder="Example: Duy Hùng" class="form-control">
                </div>
                <div class="form-group"align="left">
                    <label>Price</label>
                    <input name="price" type="text" placeholder="Example: 100000" class="form-control">
                </div>
                <div class="form-group"align="left">
                    <label>Category</label>
                    <select name="category" class="form-control" id="exampleFormControlSelect1">
                        <?php foreach ($categories as $category) { ?>
                            <option value="<?php echo $category['id'] ?>"><?php echo $category['name']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div align="center">
                    <button type="submit" class="btn btn-primary" >AddNew</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>