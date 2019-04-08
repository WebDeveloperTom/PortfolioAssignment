<?php
$name = $phone = $subject = $mailFrom = $message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'config.php';
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = htmlspecialchars($_POST['message']); //ensures scripts cant be typed into "messages"
    //error handling
    //check if inputs are empty
    if (empty($name) || empty($phone) || empty($subject) || empty($mailFrom) || empty($message)){
      header("Location: ../contact?query=empty&name=$name&phone=$phone&subject=$subject&message=$message");
      exit();
    } else {
      //Check if name is valid
      if(!preg_match("/^[a-zA-Z\s]*$/", $name)){
        header("Location: ../contact?query=invalidchar");
        exit();
      } else {
        //check if phone numbe is a number
          if(!is_numeric($phone)){
            header("Location: ../contact?query=invalidemail&name=$name&subject=$subject&message=$message");
            exit();
        } else {
          //check if email is an email
          if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)){
            header("Location: ../contact?query=invalidemail&name=$name&phone=$phone&subject=$subject&message=$message");
            exit();
          } else {
            if(!preg_match("/^[a-zA-Z\s]*$/", $subject)){
              header("Location: ../contact?query=invalidchar");
              exit();
          } else {

            //success, no errors
            $mailTo = "admin@tompowell.dev";  //clients email
            $headers = "From: ". $mailFrom;
            $txt = "You have recieved an email from ". $name." (".$phone.")".". \n \n".$message;
            mail($mailTo, $subject, $txt, $headers);

            // form_data is the table name
            $sql = "INSERT INTO dotdevcontact (name, phone, mailFrom, subject, message) VALUES ('$name', '$phone', '$mailFrom', '$subject', '$message');";
            mysqli_query($conn, $sql);
            header("Location: ../contact?query=sent");
          }
        }
      }
    }
  }
} else {
  header("Location: ../contact?query=error");
}
?>
