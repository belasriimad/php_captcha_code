<?php 
if(!isset($_POST['code'])){
    $_SESSION['captcha'] = rand(1000,9999);  
}else{
    if($_SESSION['captcha'] == $_POST['code']){
        echo '<div class="alert alert-success">Verified</div>';
    }else{
        echo '<div class="alert alert-danger">Error try again</div>';
        $_SESSION['captcha'] = rand(1000,9999);
    }
}
?>