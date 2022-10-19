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
    $idd=$_GET['id'];
    $query = "SELECT actor.actor_id,film.film_id,first_name,last_name FROM actor join film_actor on film_actor.actor_id=actor.actor_id join film on film.film_id=film_actor.film_id where film.film_id=$idd";
    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($result))
    {
        $imie=$row['first_name'];
        $nazwisko=$row['last_name'];
        $id=$row['actor_id'];
        echo "<p><a href='actor.php?id=$id'>$imie $nazwisko<a></p>";
    }
    ?>
</body>
</html>