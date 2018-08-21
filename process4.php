
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <script languaje="javascript">
        function limpiarform()
            {
                document.info.html.reset();
            }
</script>
   </head>
   <body>
   <div align="center">
        <fieldset><legend style="text-align: center;">Confirmation </legend>
        <form action="process4.php" method="POST">
            <h1 >Payment successful</h1>
            <input type="button" onclick=" limpiarform(); history.back(history.back())" name="back" value="Go home"><br>
        </form>
        </fieldset>
    </div>
   </body>
 </html>