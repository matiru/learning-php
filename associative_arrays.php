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

    <form action = "associative_arrays.php" method ="post">

    <input type = "text " name="student">
    <input type = "submit">



    </form>
       <?php 
        $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
        // echo $grades["Oscar"];

        echo $grades[$_POST["student"]]
       ?>
        
    </body>
</html>