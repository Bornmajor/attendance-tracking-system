<?php include('includes/header.php'); ?>
<meta name="description" content="">
    <title>Check In</title>
</head>
<body>
<div class="main_container" style='display:flex;align-items:center;justify-content:center;'><!--container-->

<div class="check_in_img_container"><!--check_in_img_container-->


<div class="img_container"><!--img_container-->
    <img src="images/say-hello.png" width='100%' alt="Hello">
</div><!--img_container-->

<div class="check_in_fm"><!--checkin-->
<form action="" method="post" id='form_check_in'>
     
    <div class="alert alert-dark" role="alert">
     Use the form below to check-in
    </div>

    <div id="feedback"></div>

    <div class="mb-3">
        <input type="text" class="form-control" placeholder='Employee ID' name='emp_id' required>
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" placeholder='PIN' name='pin' maxlength='4' required>
    </div>
    
    <div class="mb-3">
        <button type="submit" style='width:100%;' class='btn btn-primary'>Check-In</button>
        
    </div>

</form>
</div><!--checkin-->

</div><!--check_in_img_container-->


</div><!--container-->
<?php include('includes/footer.php'); ?>