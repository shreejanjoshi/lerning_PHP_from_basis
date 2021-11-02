<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //if statement 

    // if (3 > 10) {
    //     echo "3 is less then 10";            # code...
    // }elseif(4 < 5 ){
    //     echo "4 is less then 5";
    // }else {
    //     echo "it is not";
    // }

    // if(4 == "4" ){
    //     echo "it is true";
    // }

    // ______________________________________

    // switch

    // $number = 50 ; 
    // switch($number){
    //     case 34:
    //         echo "it is 34";
    //         break;
    //     case 4:
    //         echo "it is 4";
    //         break;
    //     case 5;
    //         echo "it is 5";
    //         break;
    //     default:
    //         echo "there is no number";
    //         break;
    // }

    // _______________________________________

    // while loop

    // $counter = 1;

    // while ($counter <= 10) {
    //     echo $counter . "<br>";
    //     $counter++;
    // }

    // __________________________________________

    // for loop

    // for ($i = 0; $i <= 10; $i++) {
    //     echo $i . "<br>";
    // }
    // $numbers =[0,1,2,4,5];
    // foreach($numbers as $number){
    //     echo $number . "<br>";
    // }

    // ________________________________

    //function


    // function saySomething(){
    //     echo"Hello everyone."; 
    // }

    // saySomething();

    // _______________________

    // ffunction woth parameter

    // function greeting($message){
    //     echo $message;
    // }

    // greeting("Hello world!!");


    // function calc($number1, $number2){
    //     $sum = $number1 + $number2;
    //     echo $sum;
    // }

    // calc(1,3);

    // ______________________________

    //function with return value

    // function addNumbers($number1, $number2){
    //     $sum = $number1 + $number2;
    //     return $sum;
    // }

    // $ans = addNumbers(1,2);
    // echo $ans."<br>";
    // $ans = addNumbers(10,$ans);
    // echo $ans;

    // ________________________________________________

    // global and local scope

    // $x = "outside"; //gobal scope

    // function convert(){
    //     global $x;
    //     $x = "inside"; //local
    // }

    // echo $x."<br>"; 

    // convert();

    // echo $x;

    //______________________________________________________________

    //constants

    // $number = 10;

    // echo $number . "<br>";

    // define("name", 1000);
    // echo name;

    // const nam1 = "hello";
    // echo nam1;

    // define("animal", array("dog", "cat", "mouse"));
    // echo animal[1];

    // _________________________________________________

    //Math function

    echo pow(2, 7);

    echo "<br>";

    echo rand(1, 3);

    echo "<br>";

    echo sqrt(100);

    echo "<br>";

    echo ceil(4.2);

    echo "<br>";

    echo floor(4.7);

    echo "<br>";

    echo round(4.5)

    ?>
</body>

</html>