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
          <a href="index.php">Home</a>
          <a href="definition.php">Types</a>
         
         <div class="active"><a href="myths.php">Myths vs Truths</a></div>
         <a href="support.php">Support</a>
       
      </nav>
  </div>
  <div class="mythsbg">
      <img id="icon" src="mythsvsf.png" alt="">
  </div>
  <div class="aa">
    <div class="myths">
        <div class="mythscontent">
          <p>
              <b>The stigma associated with mental illness is now called "mental insanity." Just like racism or sexism,</b> <br> it is a form of oppression and discrimination. In our society, there are still many prejudices and misinformation surrounding mental illness. <br>
  
              It is up to us to educate others and keep records. <br>
              
              Here are some common Mythss people make and what you need to know <br>
  
              
        </p>
        <ul>
            <li><b><u>Myths</u></b>: Mental illness means you are "crazy." <br>
              <b><u>Fact</u></b>: It's plain and simple, having a mental illness does not mean you are “crazy.” It means you are vulnerable. It means you have an illness with challenging symptoms — the same as someone with an illness like diabetes. While mental illness might alter your thinking, destabilize your moods or skew your perception of reality, that doesn’t mean you are “crazy.” It means you are human and are susceptible to sickness and illness, the same as any other person.  </li>
              <li><b><u>Myths : </u></b> <br>
                  <b><u>Fact : </u></b>
              
              </li>
              <li><b><u>Myths : </u></b> <br>
                  <b><u>Fact : </u></b>
              
              </li>
              <li><b><u>Myths : </u></b> <br>
                  <b><u>Fact : </u></b>
              
              </li>
              <li><b><u>Myths : </u></b> <br>
                  <b><u>Fact : </u></b>
              
              </li>
              <li><b><u>Myths : </u></b> <br>
                  <b><u>Fact : </u></b>
              
              </li>
              
        </ul>
  
        </div>
        
    </div>
  </div>
 
  
  <footer>
    <div class="more">About <br>
      <div class="morecontent">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus maxime harum alias sed culpa aliquid voluptas corrupti et quibusdam mollitia delectus perspiciatis, exercitationem laboriosam sit rem vero nihil commodi numquam? <br>
       <p>Let's Keep in touch !</p>
       <a href="https://www.facebook.com/TheSADAG/" class="fa fa-facebook" target="_blank"></a>
       <a href="#" class="fa fa-twitter"></a>
       <a href="#" class="fa fa-instagram"></a>
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
