<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$company = $_POST['company'];
$website = $_POST['website'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$extension = $_POST['extension'];
$province = $_POST['province'];
$country = $_POST['country'];
$comment = $_POST['comment'];

 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>



       <h1>Datos</h1>
       <p>First Name: <b><?php echo $fname; ?></b></p>
       <p>Last Name: <b><?php echo $lname; ?></b></p>
       <p>Company Name: <b><?php echo $company; ?></b></p>
       <p>Company/Personal website: <b><?php echo $website; ?></b></p>
       <p>Email: <b><?php echo $email; ?></b></p>
       <p>Phone: <b><?php echo $phone; ?></b></p>
       <p>Ext: <b><?php echo $extension; ?></b></p>
       <p>State/Province: <b><?php echo $province; ?></b></p>
       <p>Country: <b><?php echo $country; ?></b></p>
       <p>Comments:<b><?php echo $comment; ?></b></p>

   </body>
 </html>
