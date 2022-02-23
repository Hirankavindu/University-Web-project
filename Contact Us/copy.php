<?php
  if(isset($_POST["submit"])){
      $fullname = $_POST["name"];
      $email = $_POST ["email"];
      $message = $_POST["message"];

      $receiver = "edu4u2022@gmail.com";
      $subject = $message;
      $sender = $email;
      
      if 
      (mail($receiver, $subject, $sender))
      { 
          echo "Email sent successfully";
      }
      else{
          echo "Sorry, failed while sending mail!";
      }

      $to= "edu4u2022@gmail.com";
     
  }
 ?>
    <!DOCTYPE html>
    <html lang="en"> 
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
       <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
       <title>Document</title>
       <link rel="stylesheet" href="copy.css">
       <link rel="stylesheet" href="cpy.css">
    
    </head>

    <body>
     <div class="container">
 <header>
       <h1>Contact Us</h1><br>
          <p2>
        <i>
          </h2>
            We shall only collect personal information that the users voluntarily provide for processing their requests and shall not use such information for any other purpose. Such personal information may be disclosed only as required by law.<br>
            Send us your comments and suggestions via e-mail.<br>
            .............contact us!.................
          </h2>
        </i>
    </p2>
    </header>     
    </body>
</header>
<div class="content">
    <div class="content-form">
        <section>
            <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i> 
            <h2>Address</h2>
            <p>
                Pitipana<br>
                Thalagala Rd<br>
                Homagama.
            </p>
         </section>
       
         <section>
             <i class="fa fa-phone fa-2x" aria hidden="true"></i>
             <h2>Phone</h2>
             <p>076-6313771</p>
         </section>

         <section>
             <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
             <h2>E-mail</h2>
             <p>
                 Edu4Uonlinelibrary@gmail.com
             </p>
         </section>    
         <div class="container">      
   </div>
</div>  

     <form>
         <div class="form"ction="" method="post" autocomplete="off">
         <div class="form">
         <div class="right">
               <div class="contact-form">
                   <input type="text" name="name" class="input" required>
                     <span><b>Full name</b></span>
               </div>
               <div class="contact-form">
                   <input type="E-mail" name="email" class="input" required>
                   <span><b>E-mail</b></span>
               </div>

               <div class="contact-form">
                   <textarea name="message" name="message" class="input"></textarea>
                   <span><b>
                        Type Your Text Here......
                    </b></span>
                </div>
                <div class="contact-form">
                   <input type="submit"name="submit">
                </div>

           </div>
         </div>

     </form>
     <div class="media">
         <li><i class="fa fa-facebook-square fa-2x"aria-hidden="true"></i> </li>
         <li><i class="fa fa-instagram fa-2x"aria-hidden="true"></i></li>
         <li><i class="fa fa-whatsapp fa-2x"aria-hidden="true"></i></li>
         <li><i class="fa fa-twitter-square fa-2x"aria-hidden="true"></i></li>
         <li><i class="fa fa-linkedin fa-2x"></i></li>

     </div>

     <div class="empty">

     </div>
 </div>  
</body>    
</html>


