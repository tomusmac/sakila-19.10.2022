<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn=mysqli_connect("localhost", "root", "", "sakila");
    $query = "SELECT * FROM film";
    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($result))
    {
        $id=$row['film_id'];
        $title=$row['title'];
        echo "<p><a href='film.php?id=$id'>$title<a></p>";
    }
    ?>
</body>
</html>