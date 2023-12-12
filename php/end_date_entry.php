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
       $time_end = date("H:i:s");
    

       $query = "SELECT * FROM sessions_time WHERE emp_id = '$db_emp_id' AND day_entry = '$day_entry'";
       $select_session = mysqli_query($connection,$query);
       checkQuery($select_session);
       while($row = mysqli_fetch_assoc($select_session)){
        $sch = $row['sch_time_id'];
        $db_day_entry = $row['day_entry'];
        $db_time_end = $row['time_end'];
       
       }

       if(!isset($db_day_entry)){
        failMsg('You have not check in today');
       }else{
        
       
        if(empty($db_time_end)){

       
        //update session
       $query = "UPDATE sessions_time SET time_end =  '$time_end' WHERE emp_id = '$db_emp_id' AND day_entry = '$day_entry'" ;
       $update_time_end = mysqli_query($connection,$query);

       if($update_time_end){

        $query = "SELECT * FROM sessions_time WHERE emp_id = '$db_emp_id' AND day_entry = '$day_entry'";
        $select_times = mysqli_query($connection,$query);
        checkQuery($select_times);
        while($row = mysqli_fetch_assoc($select_times)){
         $db_time_start = $row['time_start'];
         $db_time_end =  $row['time_end'];
        
        }
        $duration_hrs = getDurationWorked($db_time_start,$db_time_end);

        
        $query = "UPDATE sessions_time SET duration_hrs = '$duration_hrs' WHERE emp_id = '$db_emp_id' AND day_entry = '$day_entry'";
        $update_duration = mysqli_query($connection,$query);

        if($update_duration){
        successMsg($db_name. ' your session is ended have great day');
        }

       }

      }else{
    
        failMsg('You already ended your session');
      }
        
       }

     

    }

    }
}

?>