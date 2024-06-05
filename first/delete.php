<?php
    include "conn.php";
    if(isset($_GET['id1'])){
        $id1 = $_GET['id1'];
        $sql = "DELETE from `first` where id1=$id1";
        $conn->query($sql);
    }
    exit;
?>