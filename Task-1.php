<?php

class GeometricShape{
    protected $length = 5;
    protected $width = 10;
    protected $radius = 5;
       
}

class Rectangle extends GeometricShape{
    public function getArea()
    {
        return $this->length * $this->width;
    }

}

class Circle extends GeometricShape{
    
    public function getArea()
    {
        return M_PI * pow($this->radius,2);
    }
}

$rectangle = new Rectangle;
echo "Rectangle Area is: ", $rectangle->getArea() ;

$circle = new Circle;
echo "<br/>";
echo " Circle Area is: ", $circle->getArea();

?>