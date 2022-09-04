<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login Form.html");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css files/styleClub.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <title>Welcome</title>
</head>
<body>
    <section class="home" id="home">
   <div class="home-content">
     <div class="text">
       <div class="text-one"><?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?></div>
       <div class="text-two"><?php echo "sorry club websites are not ready yet";?></div>
       <div class="text-three">Please <br>come back<br> Later. Thank you</div>
       <div class="text-four"><a href="logout.php">Logout</a></div>

       <div class="text-3">We are <span class="typing"></span></div>

       <div class="button">
              <button onclick="document.location='clubs page.html'">Back</button>
            </div>
     </div>
   </div>
 </section>
       
</body>
</html>