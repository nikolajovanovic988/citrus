<?php
if (isset($_GET['id'])){
    require_once '../../../connect.php';

    $id = $conn->real_escape_string($_GET['id']);

    $sql="UPDATE comments SET approved = '0' WHERE id = '$id'"; 

    if ($q=$conn->query($sql)){
        header("Location: ../View/approve.php");
    } else {
        die ("Database error");
    }
        
};
