<?php


if (isset($_POST['send'])) {

    
    if (isset($_POST['name'] , $_POST['email'] , $_POST['message'] , $_POST['phone'])) {
        if(isset($_POST['token']) && !empty($_POST['token'])){
            header('Location: http://localhost/datelly%20code/contact_us.php');
        }
        else{
            require_once "phpmail.php";
        }
        
        
    }

}
?>