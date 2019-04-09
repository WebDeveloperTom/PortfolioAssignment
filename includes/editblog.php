<?php
//define and set to null varibles.
$id = $title = $author = $content_1 = $content_2 = $file = $image_link = "";
$file_new_name = NULL;
//check for POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once 'config.php';
    // grab ALL data from form fields and escape any bad characters
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $content_1 = mysqli_real_escape_string($conn, $_POST['content_1']);
    $content_2 = mysqli_real_escape_string($conn, $_POST['content_2']);
    $image_link = mysqli_real_escape_string($conn, $_POST['image_link']);

    //ensure sure all fields are filled
    if (empty($title) || empty($author) || empty($content_1) || empty($content_2) || empty($image_link)){
      header("Location: /blog/admin/editpost.php?id=$id&query=empty");
      exit();
    }

    //everything looks good, add to DB
      $sql = "UPDATE dotdevblog
              SET title='$title', main_img = '$image_link', content_1 ='$content_1', content_2 ='$content_2', author = '$author'
              WHERE id = '$id'";
    mysqli_query($conn, $sql);
    header("Location: /blog/admin/editpost.php?id=$id&success=true");
  }
?>
