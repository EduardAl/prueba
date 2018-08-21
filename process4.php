
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <script language="javascript" type="text/javascript">
     function send(page){
        document.formname.action = page;
        document.formname.submit();

}
   </head>
   <body>
   <div align="center">
        <fieldset><legend style="text-align: center;">Confirmation </legend>
        <form action="process4.php" method="POST">
            <h1 >Payment successful</h1>
            <input type="button" onclick="send('info.html')" name="go" value="Go home"><br>
        </form>
        </fieldset>
    </div>
   </body>
 </html>