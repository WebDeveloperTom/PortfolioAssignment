<?php
$delete_id  = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once 'config.php';
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
    //delete from DB the house id that was submitted.
    $sql = "DELETE FROM dotdevblog WHERE id= '$delete_id'";
    $result = mysqli_query($conn, $sql);
    header("Location: /blog/admin/?delete=true");
  }
 ?>
