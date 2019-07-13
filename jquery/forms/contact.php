<?php
    
//echo json_encode($_POST);

if($_POST['username'], $_POST['email'] , $_POST['message']){
    echo json_encode([
        'success' => true
    ]);
}else{
    echo json_encode([
        'success' => false
    ]);
}

?>