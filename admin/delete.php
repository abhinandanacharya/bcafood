<?php

include '../cdn.php';
//include 'admin-nav.php';
include '../connection.php';

if(isset($_GET['id']))
{
    $did = $_GET['id'];
}
$delete = "delete from recipeprocess where recipe_id = '$did'";
if(mysqli_query($conn,$delete))
{
    ?>

    <script>
        alert("Data Delete");
        <?php
        $del = "delete from recipe where rec_id = '$did'";
        mysqli_query($conn,$del);
        ?>
        window.location = "recipe_list.php";
    </script>
    <?php
}
else
{
    ?>
    <script>
        alert("Error In Data Delete");
    </script>
    <?php
}
?>
