<!DOCTYPE HTML>
<html>
    <head>
        <title>Example</title>
        </head>
        <body>
            <?php
            echo"hello world\n";
            $x=5;
echo $x;



$name= "saman";
echo"hello my name is $name \n";

echo"my name is ".$name." and im ".$x."years old\n";

$num1=20;
$num2=30;
//echo $num2*$num1;


//php while loop
$whileNum=0;
while($whileNum<5){
  echo "This is number $whileNum\n";
  $whileNum++;
}


$doWhileNum=1;

do{
  echo "This number is $doWhileNum\n";
  $doWhileNum++;
}while($doWhileNum<=6);

echo" ";

//array
$numbersa=array("one","two","three");
echo ($numbersa);
            ?>
        </body>
</html>