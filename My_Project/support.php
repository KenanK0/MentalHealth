<?php
include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.png" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>(function(w, d) { w.CollectId = "60a55bb5c669624eb529e7a5"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
    <title>Support</title>
</head>
<body>
    <!--cursor -->
    <div class="cursor"></div>
    <div class="cursor2"></div>
     <!-- Navigation bar -->
    <div class="nav">
        <p class="logo" >
         <a href="index.php"><img src="logo.png" alt=""></a> 
        </p>
        <nav class="links" >
            <a href="index.php">Home</a>
            <a href="definition.php">Types</a>
          
           <a href="myths.php">Myths vs Truths</a>
           <div class="active"><a href="support.php">Support</a></div>
         
        </nav>
    </div>
     <!-- Content -->
  <div class="supportbg1">
    <h1>Need more support?</h1>
    <p>You can call any of this hotline(For free!):  </p>
    <ul>
      <li>National Suicide & Crisis Lines (0800) 12 13 14</li>
      <li>Alcohol & Substance Abuse (0800) 20 50 26</li>
      <li>Domestic & Sexual Violence (083) 765 1235</li>
      <li>Eating Disorders +27 (0) 21 761 0740</li>
      <li> The SA Depression and Anxiety Group (011) 783 1474/6</li>
      <li>Post-Traumatic Stress Disorder Clinic (021)938-9229</li>
      <li><a href = "https://www.sancanational.info/contact"> The South African National Council on Alcoholism and Drug Dependence </a> (SANCA) +27(0) 76 535 1701 </li>
    </ul>
    <span><p>Or you can discuss with our ChatBot!</p></span>
  </div>
  <div class="supportbg2"></div>
     <!-- Footer -->
    <footer>
        <div class="more">About <br>
          <div class="morecontent">Our aim as the Let's heal organisation is to present an effective and innovative way to tackle and solve the social issue that is mental health(or the lack thereof) and illness by means of a website. Therefore, our content is purely made for bringing awareness within societies.<br>
           <p>Support</p>
           <a href="https://www.facebook.com/TheSADAG/ " target="_blank" class="fa fa-facebook"></a>
           <a href="https://twitter.com/thesadag" class="fa fa-twitter" target="_blank"></a>
           <a href="https://www.instagram.com/thesadag/?hl=en" class="fa fa-instagram" target="_blank"></a>
       <a href="https://www.youtube.com/user/Psych2GoTv" class="fa fa-youtube" target="_blank"></a>
       <p class="created">Created by CTRL Intelligence 2021 All rights reserved</p>


      
          </div>
        </div>
        
         <!--contact us-->
        <div class="contact">
          
        <form action="support.php#form" id="form" method="post">
       <span  > Contact us </span><br>
        <label for=""> <span class="contacta" >Email</span> </label> <br> <input type="email" name="email" size=30px required > <br>
        <label for=""> <span class="contacta" >Message</span> </label> <br> <textarea name="msg" id="" cols="35" rows="8" ></textarea> <br>
        <span><?php echo $arrErrors['errMsg']; ?></span>
        <span class="succ"><?php echo $arrSucc['succ']; ?></span>
        <button id="button" name="send">Send Email</button>
      </form>
        
    
        </div>
      
         
    
      </footer>
<script src="app.js"></script>    
</body>
</html>