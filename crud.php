<?php
$conn = new mysqli("localhost", "root", "", "crud");
if (!$conn) {
    echo "connection failed";
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    $sql = "insert into crud (name, email,number) values('$name','$email','$number')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "error";
    } 
}
?>

<html>
    <head>
        <title>crud</title>
    </head>
    <body>
        <form method="post">
            <label>Name :</label>
            <input type="text" name="name">
            <br></br>
            <label>Email :</label>
            <input type="email" name="email">
            <br></br>
            <label>Number :</label>
            <input type="text" name="number">
            <br></br>
            <button name="submit">submit</button>
        </form>

        <table border=1>
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Number</td>
                    <td>operations</td>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql1 = "select * from crud";
            $result = mysqli_query($conn, $sql1);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $number = $row['number'];
                    echo '<tr>
                        <td scope="row">' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $number . '</td>
                        <td>
                <button><a href="update.php?updateid='.$id.'">Edit</a></button>
                <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
            </td>
                    </tr>';
                }
            }
            ?>
            </tbody>
        </table>
    </body>
</html>