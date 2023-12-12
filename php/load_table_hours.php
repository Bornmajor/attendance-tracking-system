<?php
include('functions.php');



?>
<tr>
<th>Employee ID</th>  
<th>Users</th>
<th>Hours</th>
</tr>

<?php
$query = "SELECT * FROM workers";
$select_workers = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($select_workers)){
$emp_id =  $row['emp_id'];
$wrk_name = $row['wrk_name'];
?>
<tr>
<td><?php echo $emp_id ?></td>
<td><?php echo $wrk_name ?></td>

<td>
<?php
$query = "SELECT SUM(duration_hrs) FROM sessions_time WHERE emp_id ='$emp_id'";
$total_item = mysqli_query($connection,$query);
checkQuery($total_item);
while($row = mysqli_fetch_assoc($total_item)){
    $total = $row['SUM(duration_hrs)'];

}

echo $total;

?>
</td>

</tr>
<?php
}
?> 