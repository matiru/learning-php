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
       <?php
        //  data types :  strings,integer,decimal,boolean
    

        $team_name = "Chelsea";
        $team_color = "blue";
        $team_location ="London";

        echo strtolower($team_name);
        
        echo strtoupper("lion");
        echo "<hr>";
        echo $team_color[3];
        $team_name[0] = "m";
        echo str_replace("London","Southwest_London",$team_location);
        echo "<br>";
        echo substr($team_color,4,3);
         echo "<br>";



        echo "$team_name";
        echo "<hr>";
        echo "$team_name is the $team_color team to support<br>";
        echo "It's a team in in $team_location <br>";
        echo "They are currently the world_champions";

       ?>
       <?php
       echo "<br>";
       echo -40+9;

       ?>
        
        <script src="" async defer></script>
    </body>
</html>