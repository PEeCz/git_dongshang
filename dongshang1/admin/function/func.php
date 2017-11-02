<?php
if(!isset($_SESSION)){
    session_start();
}

function redirect_to($url){
    header("location:".$url);
    exit;
}

function check_admin(){
    if(isset($_SESSION['user'])){
        if($_SESSION['user']['status']!='admin'){
            redirect_to('index.php');
        }
    }else{
        redirect_to('index.php');
    }
}

?>