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
 <!-- Cursor -->
  <div class="cursor"></div>
  <div class="cursor2"></div>
  <!--Navigation bar -->
  <div class="header">
    <div class="nav">
      <p class="logo" >
        <a href="index.php"><img src="logo.png" alt=""></a> 
       </p>
      <nav class="links" >
          <a href="index.php">Home</a>
          <a href="definition.php">Types</a>
         
         <div class="active"><a href="myths.php">Myths vs Truths</a></div>
         <a href="support.php">Support</a>
       
      </nav>
  </div>
   <!--Background images -->
  <div class="mythsbg">
      <img id="icon" src="mythsvsf.png" alt="">
  </div>
   <!--Content -->
  <div class="aa">
    <div class="myths">
        <div class="mythscontent">
          <p>
              <b>The stigma associated with mental illness is now called "mental insanity."  or sanism Just like racism or sexism,</b> <br> it is a form of oppression and discrimination. In our society, there are still many prejudices and misinformation surrounding mental illness. <br>
  
              It is up to us to educate others and keep records. <br>
              
               The world has to battle with this issue of myths and truths. Most of the people are exposed to the myths of this problem more than the truths, things like the following:
               <h1><u>Myths</u></h1>
                Children don’t/can’t get depression <br>
                People with mental health problems can’t handle stress <br>
                Mentally challenged people are violent <br>
                People with mental disorders must not be in the restaurants or shop <br>
                Psychologists are useless <br>
                Support groups are for the weak <br>
                Therapists are expensive <br>
                Mental illness is incurable <br>
                Only specific people develop mental health disorders <br>
                Mental unhealthy people can’t help themselves


                <h1><u>Truths</u></h1>
                Talking to a stranger helps <br>
                Support groups can be more helpful than one on one therapy <br>
                Mental health illness is curable <br>
                Mental health disorders can be had by anyone <br>
                Some people with mental health problems can help themselves <br>
                Children can have depression as well <br>
                Some people who are mentally unhealthy are dangerous <br>
                People with mental disorders should be around people <br>


              
             
            </p>
        </div>
        
    </div>
  </div>
 
   <!-- Footer -->
  <footer>
    <div class="more"><b>About</b>
      <div class="morecontent">Our aim as the Let's heal organisation is to present an effective and innovative way to tackle and solve the social issue that is mental health(or the lack thereof) and illness by means of a website. Therefore, our content is purely made for bringing awareness within societies.<br>
       <p><b>Support</b></p>
       <a href="https://www.facebook.com/TheSADAG/" class="fa fa-facebook" target="_blank"></a>
       <a href="https://twitter.com/thesadag" class="fa fa-twitter"  target="_blank"></a>
       <a href="https://www.instagram.com/thesadag/?hl=en" class="fa fa-instagram"  target="_blank"></a>
       <a href="https://www.youtube.com/user/Psych2GoTv" class="fa fa-youtube" target="_blank"></a>
       <p class="created">Created by CTRL Intelligence 2021 All rights reserved</p>


  
      </div>
    </div>
    
     <!--contact us form -->
    <div class="contact">
      
      <form action="myths.php#form" id="form" method="post">
        <span  > <b>Contact us </b></span><br>
         <label for=""> <span class="contacta" >Email</span> </label> <br> <input type="email" name="email" size=30px required  > <br>
         <label for=""> <span class="contacta" >Message</span> </label> <br> <textarea name="msg" id="" cols="35" rows="8" required ></textarea> <br>
         <span class="succ"><?php echo $arrSucc['succ']; ?></span>
         <button id="button" name="send">Send Email</button>
       </form>
    

    </div>
  
     

  </footer>
  <script src="app.js"></script>
</body>
