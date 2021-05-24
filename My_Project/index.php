<?php
include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.png" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Mental Health</title>
</head>
<body>
  <div class="cursor"></div>
  <div class="cursor2"></div>
  <div class="header">
    <div class="nav">
      <p class="logo" >
        <a href="index.php"><img src="logo.png" alt=""></a> 
       </p>
      <nav class="links" >
          <div class="active"><a href="index.php">Home</a></div>
          <a href="definition.php">Types</a>
         
         <a href="myths.php">Myths vs Truths</a>
         <a href="support.php">Support</a>
       
      </nav>
  </div>
  <div class="video">
    <video height="700" autoplay muted loop >
        <source src="video.mp4" >  
    </video>
  </div>

  
  <div class="main1">
    <p class="mh" >MENTAL HEALTH</p>
    <p>Mental health is Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium similique architecto doloremque aut accusamus assumenda delectus magnam, porro dolorem tempore amet iusto odit! Inventore, assumenda necessitatibus omnis minima porro quos.</p>
    
    <div class="part1">
  
     <p class="paragrah reveal" >
       
         Did you know? <br>
          One in 10 people suffer from a mental illness, 
         That makes 10% of the World's population. <br>
          It could be a friend, a family member, or it could be .. You! <br> <br><br><br><br>
       
          <span  class="next " >Want to know more?<br>
        Visit our links up there!</span>
      </p>
    </div>
  </div>
  <footer>
    <div class="more">About <br>
      <div class="morecontent">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus maxime harum alias sed culpa aliquid voluptas corrupti et quibusdam mollitia delectus perspiciatis, exercitationem laboriosam sit rem vero nihil commodi numquam? <br>
       <p>Let's Keep in touch !</p>
       <a href="https://www.facebook.com/TheSADAG/" class="fa fa-facebook" target="_blank"></a>
       <a href="#" class="fa fa-twitter" target="_blank"></a>
       <a href="#" class="fa fa-instagram" target="_blank"></a>
       <a href="https://www.youtube.com/user/Psych2GoTv" class="fa fa-youtube" target="_blank"></a>
       <p class="created">Created by CTRL Intelligence 2021 All rights reserved</p>
  
      </div>
    </div>
    

    <div class="contact">
      
      <form action="" method="post">
       <span  > Contact us </span><br>
        <label for=""> <span class="contacta" >Email</span> </label> <br> <input type="email" name="email" size=30px  required> <br>
        <label for=""> <span class="contacta" >Message</span> </label> <br> <textarea name="msg" id="" cols="35" rows="8" required></textarea> <br>
        <span class="succ"><?php echo $arrSucc['succ']; ?></span>
        <button name="send">Send Email</button>
      </form>
    

    </div>
    
     

  </footer>


<script src="app.js"></script>
</body>
</html>
