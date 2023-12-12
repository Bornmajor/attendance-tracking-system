<?php
include('functions.php');

$emp_id = $_POST['emp_id'];
$pin = $_POST['pin'];

$emp_id = escapeString($emp_id);
$pin = escapeString($pin);

$query = "SELECT * FROM workers WHERE emp_id = '$emp_id'";
$select_worker = mysqli_query($connection,$query);
checkQuery($select_worker);
while($row = mysqli_fetch_assoc($select_worker)){
$db_emp_id = $row['emp_id'];
$db_pin =  $row['wrk_pin'];
$db_name = $row['wrk_name'];

}

if(!empty($emp_id) && !empty($pin)){
    if(!isset($db_emp_id)){
        failMsg('Employee not available');   

    }else{
    
    if($pin !== $db_pin){
        failMsg('Verification failed');
    }else{
       

       
       //dates
       $day_entry = date('d');
       $month_entry = date('m');
       $year_entry = date('Y');
       $time_start =date("H:i:s");

     $query = "SELECT * FROM sessions_time WHERE emp_id = '$db_emp_id' AND day_entry = '$day_entry'";
       $select_session = mysqli_query($connection,$query);
       checkQuery($select_session);
       while($row = mysqli_fetch_assoc($select_session)){
        $db_day_entry = $row['day_entry'];
       
       }

       if(isset($db_day_entry)){
        failMsg('You already check in today');
       }else{
       
        //create session
       $query = "INSERT INTO sessions_time(day_entry,month_entry,year_entry,time_start,duration_hrs,emp_id)
       VALUES('$day_entry','$month_entry','$year_entry','$time_start','0','$db_emp_id')";
       $create_session = mysqli_query($connection,$query);

       if($create_session){
        successMsg($db_name.' you have successfully checked in!!');
       }else{
        failMsg('Session failed try check in again');
       }

        
       }

     

    }

    }
}

?>