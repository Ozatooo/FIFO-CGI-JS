<?php

$conn = new mysqli("localhost", "root", "", "liczba");

$result = mysqli_query($conn, "SELECT * FROM liczba");
$myArray;
while($row = mysqli_fetch_assoc($result))
{
    $myArray = $row;
}

?>