<?php
$db_host = "localhost";
$db_user  = "root";
$db_password = "";
$db_name = "voyage";

$conn = mysqli_connect($db_host, $db_user,$db_password,$db_name);
if(!$conn){
    die("Faild connection");
}
// echo "you are connected now";
if(isset($_REQUEST['submit'])){
    echo "Data submited";
    if(($_REQUEST['name'] =="") || ($_REQUEST['phone'] == "") || ($_REQUEST['email'] == "")
    || ($_REQUEST['password'] == "")){
        echo "<small>Fill all Fields</small>";
    }else{
        $name = $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $sql = "INSERT INTO mainform (name, phone, email, password) 
        VALUE('$name', '$phone', '$email', '$password')";
        if(mysqli_query($conn, $sql)){
            echo "New record inserted";
        } else{
            echo "unable to insert Data";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Voyages</title>
    <!-- font awsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- swiper link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  </head>
</head>
<body>
    <section class="header">
                <a href="home.php" class="logo">Voyages<i class="fa-solid fa-earth-americas"></i></a>
                
          <nav class="navbar">
          <div class="select">
                <span class="selected">HOME</span>
                <div class="caret"></div>
              </div>
                <ul class="menu">
                    <li>France</li>
                    <li>Germany</li>
                    <li>Canada</li>
                    <li class="active">Japan</li>
                    <li>Belgium</li>
                </ul>

           </nav>
          
           <nav class="navbar">
          <div class="select">
                <span class="selected">about</span>
                <div class="caret"></div>
              </div>
                <ul class="menu">
                    <li>France</li>
                    <li>Germany</li>
                    <li>Canada</li>
                    <li class="active">Japan</li>
                    <li>Belgium</li>
                </ul>
           </nav>
           <nav class="navbar">
          <div class="select">
                <span class="selected">Package</span>
                <div class="caret"></div>
              </div>
                <ul class="menu">
                    <li>France</li>
                    <li>Germany</li>
                    <li>Canada</li>
                    <li class="active">Japan</li>
                    <li>Belgium</li>
                </ul>
           </nav>
           <nav class="navbar">
          <div class="select">
                <span class="selected">Book</span>
                <div class="caret"></div>
              </div>
                <ul class="menu">
                    <li>France</li>
                    <li>Germany</li>
                    <li>Canada</li>
                    <li class="active">Japan</li>
                    <li>Belgium</li>
                </ul>
           </nav>

            <!-- <div class="navbar">
               <a href="home.php">Home</a>
               </div>
            <div class="navbar">
               <a href="about.php">about</a>
               </div>
               <div class="navbar">
               <a href="pakage.php">Package</a>
               </div>
               <div class="navbar">
               <a href="book.php">Book</a>
               </div> -->
          
          <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- main part -->
    <section class="container">
              <div class="cards">
                  <nav class="card">
                    <div class="mainPic">
                         <img src="./pic-1.png" alt="">
                    </div>                   
                         <h3 class="heading">Emanuel Macron</h3>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias est iste aliquam! Ipsa vero reprehenderit, autem tenetur error possimus, Omnis.</p>
                 </nav>
                 <nav class="card">
                    <div class="mainPic">
                    <img src="./pic-2.png" alt="">
                    </div>     
                 <h3 class="heading">Emanuel Macron</h3>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias est iste aliquam! Ipsa vero reprehenderit, autem tenetur error possimus, Omnis.</p>
                 </nav>
                 <nav class="card">
                    <div class="mainPic">
                    <img src="./pic-3.png"  alt="">
                    </div>
                 <h3 class="heading">Emanuel Macron</h3>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias est iste aliquam! Ipsa vero reprehenderit, autem tenetur error possimus, Omnis.</p>
                 </nav>
            </div>  

            
            



    </section>
<!-- caroussel part -->
    <section class="container">
        <div class="carousel">
            <button class="carousel-button prev">&#8656;</button>
            <button class="carousel-button next">&#8658;</button>
            <ul>
                <li class="slide active" >
                    <img src="./home-slide-3.jpg" alt="nature image #1">
                </li>
                <li class="slide">
                    <img src="./home-slide-1.jpg" alt="nature image #2">
                </li>
                <li class="slide">
                    <img src="./img-11.jpg" alt="nature image #3">
                </li>
                <li class="slide">
                    <img src="./img-3.jpg" alt="nature image #4">
                </li>
            </ul>
        </div>
    </section>

    <!-- form section -->
    <div class="hero">
      <form action="#" method="POST">
        <h3 class="registration">Registration Form</h3>
    <div class="inputname">
        <input type="text" name="name" id="name" required>
        <label for="name"><i class="fa-solid fa-user"></i> your name</label>
        </div>
    <div class="inputname">
            <input type="text" name="phone"  id="phone" required>
            <label for="phone"><i class="fa-sharp fa-solid fa-phone"></i> your phone</label>
            </div>
      
    
   <div class="inputname">
        <input type="text" name="email" id="email" required>
        <label for="email"> <i class="fa-solid fa-envelope"></i> your Email</label>
        </div>
        <div class="inputname">
            <input type="password" name="password" id="password" required>
            <label for="email"> <i class="fa-sharp fa-solid fa-lock"></i> your password</label>
            </div>
    <div class="inputname">
        <textarea name="" id="message"  rows="8" required></textarea>
            <label for=""> <i class="fa-sharp fa-solid fa-comments"></i> your message</label>
            </div>
            <button class="formbtn" type="submit" name="submit"> <i class="fa-sharp fa-solid fa-paper-plane"></i> Submit</button>
        </form>

    </div>

    

<!-- swiper javascript -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- custom js file link -->
<script src="script.js"></script>
  </body>
</body>
</html>