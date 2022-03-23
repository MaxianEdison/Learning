<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn php</title>
</head>
<body>
    <h1>this is test page for learning</h1>

    <?php
        /*
        local 
        global 
        static
        */
        /*
        echo and print in php
        */

        class Car {
            public $color; 
            public $model; 

            public function __construct($color, $model) {
                $this -> color = $color;
                $this -> model = $model;
            }
            public function message() {
                return "My car is a " . $this -> color . " " . $this -> model . "!";
            }
        }

        $car1 = new Car("black", "Volvo");
        // echo $car1 -> message();
        // echo var_dump($car1);
        // $x = null; 
        // var_dump($x);

        //string in php and practice and practice
        $x = "hello world !"; 
        echo strlen($x);
        echo "<br>"; 
        echo str_word_count($x);
        echo "<br>"; 
        echo strrev($x);
        echo "<br>";
        echo strpos("hello world! ", " ");
        echo "<br>"; 
        echo str_replace("hello", "hi", "hello world!"); 

        //php numbers
        
    ?>
</body>
</html>
