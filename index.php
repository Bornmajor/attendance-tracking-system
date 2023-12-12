<?php 
include('includes/navbar.php');


if(isset($_GET['page'])){
    $source = $_GET['page'];

}else{
    $source = '';
}

switch($source ){
case 'home';
include('includes/home.php');
break;
case 'check-in';
include('includes/check_in.php');
break;
case 'end-session';
include('includes/check_out.php');
break;
case 'data';
include('includes/table.php');
break;
default:
include('includes/home.php');
}
?>




