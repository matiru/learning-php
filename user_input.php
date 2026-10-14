<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

<form action ="user_input.php" method = "get">
   Name: <input type="text" name ="username">
   <br>
   <br>
   Age: <input type = "number" name="age" >
   <input type="submit">
<br>
Your name is <?php echo $_GET["username"]?>
<br>
Your age is <?php echo $_GET["age"]?>
</form>


       
    
    </body>
</html>