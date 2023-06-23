<?php
$conn = new mysqli("localhost", "root", "", "crud");
if (!$conn) {
    echo "connection failed";
}
$id=$_GET['updateid'];
$sql="select * from crud where id=$id";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result); 
$name=$row['name'];
$email=$row['email'];
$number=$row['number'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    $sql="update crud set id=$id, name='$name', email='$email', number='$number' where id='$id'";
    $result = mysqli_query($conn, $sql);
    if($result) {
        header('location:crud.php');
    } else {
        echo "fail";
    }
}
?>

<html>
    <head>
        <title>update</title>
    </head>
    <body>
    <form method="post">
            <label>Name :</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <br></br>
            <label>Email :</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <br></br>
            <label>Number :</label>
            <input type="text" name="number" value="<?php echo $number; ?>">
            <br></br>
            <button name="submit">update</button>
        </form>
    </body>
</html>