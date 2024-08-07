<?php
$uri = explode("/",$_SERVER['REQUEST_URI']);


switch ($uri[1]) {
    case '':
        include APP_PATH."/view/home.php";
        break;
    case 'about':
        include APP_PATH."/view/aboutus.php";
        break;
    case 'contact':
        include APP_PATH."/view/contactus.php";
        break;
    case 'landpage5':
        include APP_PATH."/view/landpage5.php";
        break;
    
    //default:
       // # code...
       // break;
}

?>