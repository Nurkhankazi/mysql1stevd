<?php require_once('connection.php'); ?>
<h1>Product List</h1>
<a href="manuf.php">Show Manufacturer</a>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Product</th>
        <th>Price</th>
    </tr>
    <?php
        $sql="SELECT * FROM `product`";
        $result=$mysqli->query($sql);
        while($r=$result->fetch_object()){
    ?>
            <tr>
                <td><?php echo $r->id; ?> </td>
                <td><?php echo $r->name; ?></td>
                <td><?php echo $r->price; ?></td>
            </tr>

    <?php } ?>
</table>