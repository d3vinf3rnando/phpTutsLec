<!DOCTYPE HTML>
<html>
    <head>
        <title>hh</title>
    </head>

    <body>
        <h2>News Page</h2>


       
        <?php
            
            $animals=array("dog","cat","sheep");

            echo "i like"." ".$animals[0]." ".$animals[1]." and ".$animals[2];

            $numbers= array(1,2,3,4,5);
            $total=$numbers[0]+$numbers[4];
            echo $total;
            echo "<br>";
            $age=array("devin"=>21,"Ben"=>20);
            echo $age["devin"];

            echo "<br>";
            echo "ben is ".$age["Ben"]." years old";
        ?>
       

    </body>
</html>