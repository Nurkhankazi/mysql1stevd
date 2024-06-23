<?php require_once('connection.php'); ?>
<h1>Manufacturer Add</h1>
<form action="" method="post">
    <label for="">Name</label>
    <input type="text" name="manu_name" id=""><br>
    <label for="">Address</label>
    <input type="text" name="manu_add" id=""><br>
    <label for="">Contact</label>
    <input type="text" name="cont_no" id=""><br>

    <button type="submit">Save</button>
</form>
<?php
    if($_POST){
        $manu_name=$_POST['manu_name'];
        $manu_add=$_POST['manu_add'];
        $cont_no=$_POST['cont_no'];
        $sql="call insert_manufacturer('$manu_name','$manu_add','$cont_no')";
        $rs=$mysqli->query($sql);
        header('location: manuf.php');
    }
?>