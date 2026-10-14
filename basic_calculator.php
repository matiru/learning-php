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
        <form action="basic_calculator.php" method="get">
    

        <input type ="number" name = "num1"> + <input type ="number" name = "num2">
        <br>
        
        <br>
        <input type ="submit">
        <br>
    
        </form>
        Answer = 
        <?php echo $_GET["num1"] + $_GET["num2"]?>
        
        
    </body>
</html>