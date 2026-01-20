<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // prededifined variables.Super globals can be accessed anywhere within 
   /*ECHO  $_SERVER["DOCUMENT_ROOT"];
   ECHO "<br>";
   ECHO  $_SERVER["PHP_SELF"];
   ECHO "<br>";
   ECHO  $_SERVER["SERVER_NAME"];
   ECHO "<br>";
   ECHO  $_SERVER["REQUEST_METHOD"];
    
    */
  // echo  $_GET["name"]; Use when you want to the user to see something  on the browser. 
  // echo $_GET["eyecolor"]:
   // post method  you cannot see data inside the browser when user is submitting data. 

   // if you want to submit data to the database /the website or the user, use post, if you want to get data from the database/ server use post. //user post when submitting data. 
   //echo $_REQUEST["name"] we can use it for both get post  get and post. AVOID It

   //Files 
   // echo $_FILES["name"]; we get information about the file with this superglobal and we grap information about the file. 
   // echo $_COOKIE["name"];  a small file that our server embeds on the user's computer. so we have a banch of information we can store on the user's computer
   // echo $_SESSION["username"] = "Brian";
   ?>
</body>
</html>