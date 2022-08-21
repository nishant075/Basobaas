<?php

$dbcon = mysqli_connect("localhost", "root", "", "roomkhoji");



// $result = mysqli_fetch_array($query);

$id = $_GET['id'];

$deletequery = " delete from registration where id=$id";

$query = mysqli_query($dbcon, $deletequery);

if ($query) {
    echo "Deleted";
} else {
    echo "Not deleted";
}

header('location:userview.php');


while ($result = mysqli_fetch_array($query)) {

?>


<?php
}
?>