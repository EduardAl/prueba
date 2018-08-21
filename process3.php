<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$bdate = $_POST['bdate'];
$cnumber = $_POST['cnumber'];
$valid = $_POST['valid'];
$holder = $_POST['holder'];
$cvc = $_POST['cvc'];
$doc = $_POST['doc'];
$dnumber = $_POST['dnumber'];
$email = $_POST['email'];
$array_doc = [
    'DUI',
    'NIT'
];
$price = $_POST[price];
$quantity = $_POST[quantity];
$discount = $_POST[discount];
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
   <div align="center">
        <fieldset><legend style="text-align: center;">Confirmation </legend>


       <h1 >Information</h1>
       <p>First Name: <b><?php echo $fname; ?></b></p>
       <p>Last Name: <b><?php echo $lname; ?></b></p>
       <p>Birthdate: <b><?php echo $bdate; ?></b></p>
       <p><?php echo $array_doc[$doc-1];?>: <b><?php echo $dnumber; ?></b></p>
       <p>Email: <b><?php echo $email; ?></b></p>
       <p>Unit price: $<b><?php echo $price; ?></b></p>
       <p>Quantity: <b><?php echo $quantity; ?></b></p>
       <p>Total without discount: $<b><?php echo $price*$quantity; ?></b></p>
       <p>Total with discount: $<b><?php echo ($price*$quantity)*(1-($discount/100)); ?></b></p>
       <p>
       <input type="submit" name="continue" value="Continue"><br><input type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
       </p>
        </fieldset>
    </div>
   </body>
 </html>