<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
<!-- Header -->

<?php

  session_start();
  $user = $_SESSION['pass'];
?>
   <section>
   <div class='header'>
     <form action="">
       <input class='bg-light search' type="text" placeholder='search for a book :)'>
       <i class="fas fa-search" style='background-color:#286fd7;color:white;padding:8px;margin-left:-4px;border-radius:5%;'></i>
     </form>
     <h6 style='margin-left:85%;margin-top:-2%;'>hi &nbsp <?php echo $user?> </h6>
     <div class='dropdown'>
     <div class='dropbtn' style='margin-left:1075px;margin-top:-50px;'><i class="fas fa-user-circle"></i></div>
     <div class="dropdown-content">
    <a href="#">Account</a>
    <a href="#">page 1</a>
    <a href="#">page 2</a>
    <a href="#">page 3</a>
    <a href="#">Information</a>
    <a href="#">Signout</a>
  </div>
    </div>
    
<!-- Side panal -->
   </div>
    <div class='side_bar'>
    <i class="fas fa-book-reader" style='margin-top:38%;margin-left:28%;color:whitesmoke'></i>
    <h5 style='margin-top:-13%;margin-left:45%;color:whitesmoke;'>Admin</h5>
     <hr class='bg-light' style='margin-top:11%;width:11em;'>
     <p style='color:white;font-weight:100;'><i class="fas fa-tachometer-alt" style='color:white;margin-left:35px;'></i>&nbsp&nbsp&nbsp Dashboard</p>
     <hr class='bg-light' style='margin-top:11%;width:11em;'>
    <p style='margin-top:-10px;margin-left:2px;font-size:10;color:#dadada;'>Interface</p>
    <p style='color:white;font-weight:100;'><i class="fas fa-cogs" style='color:white;margin-left:35px;'></i>&nbsp&nbsp&nbsp Settings</p>
    <hr class='bg-light' style='margin-top:11%;width:11em;'>
    <p style='margin-top:-10px;margin-left:2px;font-size:10;color:#dadada;'>view</p>
    <p style='color:white;font-weight:100;'><i class="fas fa-book-open" style='color:white;margin-left:35px;'></i>&nbsp&nbsp&nbsp new additions</p>
    <p style='color:white;font-weight:100;'><i class="fas fa-book" style='color:white;margin-left:35px;'></i>&nbsp&nbsp&nbsp upcomming</p>
    <hr class='bg-light' style='margin-top:11%;width:11em;'>
    <p style='margin-top:-10px;margin-left:2px;font-size:10;color:#dadada;'>Statistics</p>
    <p style='color:white;font-weight:100;'><i class="far fa-chart-bar" style='color:white;margin-left:35px;'></i>&nbsp&nbsp&nbsp Charts</p>
    <hr class='bg-light' style='margin-top:11%;width:11em;'>
    </div>
   </section>

   
    
    <script src="https://kit.fontawesome.com/fbe06f22f8.js" crossorigin="anonymous"></script>
    <script src="js/dashboard.js"></script>
</body>
</html>