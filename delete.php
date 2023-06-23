<?php
    $conn = new mysqli("localhost", "root", "", "crud");
    if (!$conn) {
        echo "connection failed";
    }

    if(isset($_GET['deleteid'])) {
        $id=$_GET['deleteid'];

        $sql2="delete from crud where id=$id";
        $result2=mysqli_query($conn, $sql2);
        if($result2) {
            header('location:crud.php');
        } else {
            echo "fail";     
        }
    }
?>