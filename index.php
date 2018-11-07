<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP project 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <?php 
    
    // The echo command will transfer data to the front end interface, it can also transfer multiple instances 

    // The print command will transfer data to the front end interface, transfer's only single instances

    // Strings can be parsed to the interface be using double quotes

    // booleans are used to control loops and return a 0 or 1 value

    // download bulma!

    // var_dump, dumps data on the interface with various functions for displaying additional backend data







    
    // $string = "hello World!";
    // $template = "We will be handling variables today.";

    // echo "$string";
    // echo "$template";

    // $num1 = 7;
    // $num2 = 2;

    // echo $num1 ** $num2;

    // $lie = false; - assigning a variable
    // $truth = true;

    // echo $lie - refrencing a variable
    // echo $lie * $truth; 



    
    // ////////////
    // functions //
    // ////////////

    // class Car {
    //     function Car() {
    //         $this->model = "Bavarian Motorsport Works (BMW)";
    //     }
    // }
    
    // // create an object
    // $herbie = new Car();
    
    // // show object properties
    // echo $herbie->model;


    
    // converting string to lower or upercase 
    // $example = "JOHN-paUL";
    // echo "$example". "<br>"; 
    // $example = strtoupper ($example);

    // echo "<p>$example</p>";

    // $example = '  Where in the world is carmen sandiego??  ';

    

    // var_dump(explode(' ',$example));

    // var_dump($example);

    
    //trim cuts out certain data 

    // $example = trim($example);

    // echo ($example);    
    

    

    // substr - returns speciic parts of a string 
    // using negative values for substr will subtract data from the right(back of the string)

    $eg = 'where_in_the_world_is_carmen_sandiego';

    // echo substr($eg, strpos($eg, 'i'), strpos($eg, 'd')-strpos($eg, 'i')+1);

    // echo substr($eg, 5, -2);
    

    // str_replace is used to replace specific string data with other string data
    
    echo str_replace('where', 'who', $eg);

    

    
    
    
    ?>
    
</body>
</html>