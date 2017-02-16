<?php

require_once 'vendor/autoload.php';

use Shapes\Shape\Rectangle;
use Shapes\Shape\Square;
use Shapes\Shape\Circle;

try{
    $rectangle = new Rectangle(rand(2,24), rand(24,78));
    echo "Resource Id : ".$rectangle->getResourceId().PHP_EOL;
    echo "Resource Area : ".$rectangle->getResourceArea().PHP_EOL;    
} catch (Exception $ex) {   
    echo "Resource Rectangle Error : ". $ex->getMessage().PHP_EOL;
}

try{
    $rectangleError = new Rectangle(rand(2,24), "hello");
    echo "Resource Id : ".$rectangleError->getResourceId().PHP_EOL;
    echo "Resource Area : ".$rectangleError->getResourceArea().PHP_EOL;    
} catch (Exception $ex) {   
    echo "Resource Rectangle Error : ". $ex->getMessage().PHP_EOL;
}

try{
    $square = new Square(rand(2,12));
    echo "Resource Id : ".$square->getResourceId().PHP_EOL;
    echo "Resource Area : ".$square->getResourceArea().PHP_EOL;    
} catch (Exception $ex) {
    echo "Resource Square Error : ". $ex->getMessage().PHP_EOL;
}

try{
    $circle = new Circle(rand(3,48));
    echo "Resource Id : ".$circle->getResourceId().PHP_EOL;
    echo "Resource Area : ".$circle->getResourceArea().PHP_EOL;    
} catch (Exception $ex) {   
    echo "Resource Circle Error : ". $ex->getMessage().PHP_EOL;
}