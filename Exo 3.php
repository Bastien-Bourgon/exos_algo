<?php
require_once "Exo 2.php";

//###DEFINITION CLASSE###
	class Cercle extends Point //Heritage de la classe Point afin d'avoir déja le centre du cercle géré par cette classe et ses methodes
		{
        private $point;
        private $radius;
		
		//constructeur classe
		function __construct($point, $radius)
        {
            $this->point = $point;
			$this->radius = $radius;
        } 
		
		function area() //calcul d'aire
        {
            return pow($this->radius,2)*pi();
        }
		
		function containsPoint(Point $point) //detection d'un point dans le cercle
		{
			$pointX = $point->getX();
			$pointY = $point->getY();
			$cercleX = $this->getX();
			$cercleY = $this->getY();
			
			if (pow($pointX - $cercleX,2) + pow($pointY - $cercleY,2) < pow($this->radius,2))
            {
				echo "Le point est dans le cercle";
			}
            else
			{
                echo "Le point est hors du cercle";
            }	
		}
		
		//conversion de l'objet en chaine
		function convertToString()
		{
            $string = "Cercle de centre [".$this->x.",".$this->y."] et de rayon " . $this->radius;
            echo "<br>";
			echo $string;
        }
    
    }


	$centre = new Point(2,2);
	$point1 = new Point(0,2);
	$cercle = new Cercle($centre,3);
	$cercle->convertToString(); //affichera "Cercle de centre [2,2] et de rayon 3"
	echo "<br>";
    echo "Aire du cercle: ";
    echo "<br>";
	echo $cercle->area();
    echo "<br>";
	echo "Le point 1 est il dans le cercle :";
    echo "<br>";
    $cercle->containsPoint($point1);
?>