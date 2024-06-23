<?php require_once('connection.php'); ?>
<h1>View High Product</h1>
<a href="manuf.php">Manufacturer List</a>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Manufacturer</th>
        <th>Product</th>
        <th>Price</th>
    </tr>
    <?php
        $sql="SELECT high_product.*,manufacturer.name as manu_name FROM `high_product` join manufacturer on manufacturer.id=high_product.manufacturer_id WHERE `price`>=5000";
        $result=$mysqli->query($sql);
        while($r=$result->fetch_object()){
    ?>
            <tr>
                <td><?php echo $r->id; ?> </td>
                <td><?php echo $r->manu_name; ?></td>
                <td><?php echo $r->name; ?></td>
                <td><?php echo $r->price; ?></td>
            </tr>

    <?php } ?>
</table>