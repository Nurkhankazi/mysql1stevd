<?php require_once('connection.php'); ?>
<h1>Manufacturer List</h1>
<a href="create_manuf.php">Add New</a>
<a href="view.php">Show View</a>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Manufacturer</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Delete</th>
    </tr>
    <?php
        $sql="SELECT * FROM `manufacturer`";
        $result=$mysqli->query($sql);
        while($r=$result->fetch_object()){
    ?>
            <tr>
                <td><?= $r->id; ?> </td>
                <td><?= $r->name; ?></td>
                <td><?= $r->address; ?></td>
                <td><?= $r->contact_no; ?></td>
                <td>
                    <a href="delete.php?id=<?= $r->id; ?>"> Delete</a>
                </td>
            </tr>

    <?php } ?>
</table>