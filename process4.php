
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <script language="javascript" type="text/javascript">
     function send1(page1){
        document.formname.action = page1;
        document.formname.submit();
}
</script>
   </head>
   <body>
   <div align="center">
        <fieldset><legend style="text-align: center;">Confirmation </legend>
        <form action=" method="POST">
            <h1 >Payment successful</h1>
            <input type="button" onClick="send1('info.html')" name="go" value="Go home"><br>
        </form>
        </fieldset>
    </div>
   </body>
 </html>