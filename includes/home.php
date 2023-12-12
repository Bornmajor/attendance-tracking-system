<?php include('includes/header.php'); ?>
<meta name="description" content="">
    <title>Home</title>
</head>
<body>
<div class="main_container" style='display:flex;align-items:center;justify-content:center;'><!--container-->

<div class="check_in_img_container"><!--check_in_img_container-->


<div class="img_container"><!--img_container-->
    <img src="images/say-hello.png" width='100%' alt="Hello">
</div><!--img_container-->

<div class="check_in_fm"><!--checkin-->

<div class="check_btns">
<div class="alert alert-dark" role="alert">
     Where do want to go?
</div>
<a href="?page=check-in" style='display:block;margin:10px;' class='btn btn-dark'> <i class="fas fa-sign-in-alt"></i> Check In</a>

<a href="?page=end-session" style='display:block;margin:10px;' class='btn btn-dark'> <i class="fas fa-door-open"></i> End session</a>

</div>

</div><!--checkin-->

</div><!--check_in_img_container-->


</div><!--container-->
<?php include('includes/footer.php'); ?>