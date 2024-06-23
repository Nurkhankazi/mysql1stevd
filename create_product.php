<?php require_once('connection.php'); ?>
<h1>Product Add</h1>
<form action="" method="post">
    <label for="">Manufacturer</label>
    <input type="text" name="manufacturer_id" id=""><br>
    <label for="">Name</label>
    <input type="text" name="name" id=""><br>
    <label for="">Price</label>
    <input type="text" name="price" id=""><br>

    <button type="submit">Save</button>
</form>
<?php
    if($_POST){
        $manufacturer_id=$_POST['manufacturer_id'];
        $name=$_POST['name'];
        $price=$_POST['price'];
        $sql="insert into product set manufacturer_id='$manufacturer_id',name='$name',price=$price";
        $rs=$mysqli->query($sql);
        //header('location: product.php');
        echo "Data saved";
    }
?>