<?php include('includes/header.php'); ?>
<meta name="description" content="">
    <title>Data</title>
</head>
<body>

<div class="main_container" style='display:flex;align-items:center;justify-content:center;'><!--main-->

<div class="table_container"> <!--table cont--->

<form action="" method="post" id='form_table'>

<div class="row">
  <div class="col">
    <select name="" id=""class='form-select table_input' required>
    <option value="" selected>Select month</option>

    <?php
    $query = "SELECT DISTINCT month_entry FROM sessions_time";
    $select_month = mysqli_query($connection,$query);
    checkQuery($select_month);
    while($row = mysqli_fetch_assoc($select_month)){
        $month = $row['month_entry'];
        ?>
        <option value="<?php echo $month ?>"><?php echo $month ?></option>
        <?php
    }
    ?>
    

    </select>
  </div>
  <div class="col">
  <select name="" id="" class='form-select table_input' required>
    <option value="" selected>Select year</option>

    <?php
    $query = "SELECT DISTINCT year_entry FROM sessions_time";
    $select_year = mysqli_query($connection,$query);
    checkQuery($select_year);
    while($row = mysqli_fetch_assoc($select_year)){
        $year = $row['year_entry'];
        ?>
        <option value="<?php echo $year ?>"><?php echo $year ?></option>
        <?php
    }
    ?>
    

    </select>
  </div>
  <div class="col">
    <input type="submit" class='btn btn-primary table_input' value="Submit" >
  </div>
</div>

</form>

<table style='' class="table table-striped">

<tbody class='load_data'>
      <tr>
      <th>Employee ID</th>  
      <th>Users</th>
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
    </tr>
       <?php
       }
       echo emptyTableRowMsg($select_workers,'Empty data');
       ?> 
 
</tbody>


</table>  

</div><!--table cont--->
  


</div><!--main-->




<?php include('includes/footer.php'); ?>
