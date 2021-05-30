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
  <!--cursor-->
  <div class="cursor"></div>
  <div class="cursor2"></div>
  <!--Navigation bar -->
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
  <!-- Video -->
  <div class="video">
    <video height="700" autoplay muted loop >
        <source src="video.mp4" >  
    </video>
  </div>

<!-- Content -->
  <div class="main1">
    <p class="mh" >MENTAL HEALTH</p>
    <div id = "mental_para">
    <iframe width="520" height="315" src="https://www.youtube.com/embed/G0zJGDokyWQ?start=20" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <p class="mhh" >Mental health is an integral and essential component of health. According to the WHO constitution, health is a state of complete physical, mental and social well-being and not merely the absence of disease or infirmity. An important implication of this definition is that mental health is more than just the absence of mental disorders or disabilities.</p>
    <p class="mhh">Mental health is a state of well-being in which an individual realizes his or her own abilities, can cope with the normal stresses of life, can work productively and is able to contribute to his or her community. Mental health is determined by a range of socioeconomic, biological and environmental factors.</p>
    </div>
    <div class="part1">
  
     <p class="paragrah" >
       
          <br>
          One in 10 people suffer from a mental illness, 
         That makes 10% of the World's population. <br>
          It could be a friend, a family member, or it could be .. You! <br> <br><br><br><br>
       
          <span  class="next " >Want to know more?<br>
        Visit our links up there!</span>
      </p>
    </div>
  </div>
  <!-- Footer -->
  <footer>
    <div class="more"><b>About</b>
      <div class="morecontent">Our aim as the Let's heal organisation is to present an effective and innovative way to tackle and solve the social issue that is mental health(or the lack thereof) and illness by means of a website. Therefore, our content is purely made for bringing awareness within societies.<br>
       <p><b>Support</b></p>
       <a href="https://www.facebook.com/TheSADAG/" class="fa fa-facebook" target="_blank"></a>
       <a href="https://twitter.com/thesadag" class="fa fa-twitter" target="_blank"></a>
       <a href="https://www.instagram.com/thesadag/?hl=en" class="fa fa-instagram" target="_blank"></a>
       <a href="https://www.youtube.com/user/Psych2GoTv" class="fa fa-youtube" target="_blank"></a>
       <p class="created">Created by CTRL Intelligence 2021 All rights reserved</p>
  
      </div>
    </div>
    
 <!-- Contact us form -->
    <div class="contact">
      
      <form id="form" action="index.php#form" method="post">
       <span  ><b> Contact us </b></span><br>
        <label for=""> <span class="contacta" >Email</span> </label> <br> <input type="email" name="email" size=30px required > <br>
        <label for=""> <span class="contacta" >Message</span> </label> <br> <textarea name="msg" id="" cols="35" rows="8" required ></textarea> <br>
        <span class="succ"><?php echo $arrSucc['succ']; ?></span>
        <button id="button" name="send">Send Email</button>
        
      </form>
    

    </div>
    
     

  </footer>


<script src="app.js"></script>
</body>
</html>
