<?php 
include('php/functions.php');

$datetime_1 = '2022-04-10 11:15:30'; 
$datetime_2 = '2022-04-12 13:30:45'; 
 
$start_datetime = new DateTime($datetime_1); 
$diff = $start_datetime->diff(new DateTime($datetime_2)); 
 
echo $diff->days.' Days total<br>'; 
echo $diff->y.' Years<br>'; 
echo $diff->m.' Months<br>'; 
echo $diff->d.' Days<br>'; 
echo $diff->h.' Hours<br>'; 
echo $diff->i.' Minutes<br>'; 
echo date("Y-m-d H:i:s ");




?>
