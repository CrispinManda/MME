<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MME</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php echo 'hello' ?> ;<br>
    <!-- variables -->
     <?php
     $x = 20;
     echo 'The answer is'  .  ' '. $x + 2 ;' <br>';


     $y = 'John';
     echo '<br>' . $y . '<br>';


     $t = 26;
     echo var_dump($t). '<br> ';

     $name = 'john' ;
     echo var_dump($name) . '<br> ';

     $pie = 3.14;
     echo var_dump($pie) . '<br> ';

     $cars = array ('volvo', 'bmw' , 'bentley');

     

     echo var_dump($cars) . '<br> ';

     foreach($cars as $car);

     echo $car . '<br> ';

     echo $cars[0] . ' ' . $cars[1] . '<br> ' ;
     

     ?>
    <!-- how to declare and use a variable  -->

    <!-- data types -->

     


       
     <!-- string -->
      <!-- number
      boolean
      array -->



</body>
</html>