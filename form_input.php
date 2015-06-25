<html>
<head></head>
<body>

   </br></br>

   <form action='get_apk.php' method='post'>
      <center>Enter URL: <input name='url' type='text'></input> <input type='submit' value='Submit!'></input></center>

   </form>

   <?php
   error_reporting(-1);
   ini_set('display_errors', 'On');

   $a = shell_exec("pwd");
   print $a
   ?>

</body>
</html>
