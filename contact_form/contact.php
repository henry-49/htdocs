<?php
// Check if submit is clicked
//include "db.php";
//
//if($_POST['username'] && $_POST['email'] && $_POST['message']){
//        $username = $_POST["username"];
//      $email =   $_POST["email"];
//      $message = $_POST["message"];
//   $query = "INSERT INTO contact (username, email, message)";
//    $query .= "VALUES('$username','$email','$message' )";
//    $result = mysqli_query($connection, $query);
//    
//    echo json_encode([
//        'success' => true,
//    ]);
//    
//}else{
//    echo json_encode([
//        'success' => false
//    ]);
//}

if(isset($_POST['submit'])){
      $username = $_POST["username"];
      $email = $_POST["email"];
      $message = $_POST["message"];
        
    $errorEmpty = false;
    $errorEmail = false;
    
    if(empty($username) || empty($email) || empty($message)) {
        echo "<span class='alert alert-danger'>Fill in all fields</>";
        $errorEmpty = true;
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<span class='alert alert-danger'>enter a valid email address!</>";
        $errorEmail = true;
    }
    else{
      echo "<span class='alert alert-success'>Message sent</>";

    }
}else{
    echo "<span class='alert alert-danger'>OPS! Somthing went wrong!</>";
}


?>



<script>
    $("#username_group, #email_group, #message_group").removeClass("invalid-feedback")
    
    var errorEmpty = "<?php echo $errorEmpty; ?>";
    var errorEmail = "<?php echo $errorEmail; ?>";
    
    if(errorEmpty == true){
        $("#username_group, #email_group, #message_group").addClass("invalid-feedback");
        
    }
    
    if(errorEmail == true) {
        $("#email_group").addClass("invalid-feedback");
    }
    
    if(errorEmpty == false && errorEmail == false){
         $("#username_group, #email_group, #message_group").val("");
    }
</script>