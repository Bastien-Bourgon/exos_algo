<?php
//###DEFINITION CLASSE###
	class Point
	{	
        private $x;
        private $y;
		//constructeur classe
		function __construct($x,$y)
	    {
            $this->x = $x;
			$this->y = $y;
        }
	
	
		//getters et setters

	
		
		//conversion de l'objet en chaine
		function convertToString(){
            $string = "Point de coordonées [".$this->x.",".$this->y."]";
			echo $string;
        }

        /**
         * Get the value of x
         */ 
        public function getX()
        {
                return $this->x;
        }

        /**
         * Set the value of x
         *
         * @return  self
         */ 
        public function setX($x)
        {
                $this->x = $x;

                return $this;
        }

        /**
         * Get the value of y
         */ 
        public function getY()
        {
                return $this->y;
        }

        /**
         * Set the value of y
         *
         * @return  self
         */ 
        public function setY($y)
        {
                $this->y = $y;

                return $this;
        }
	}


    $point1 = new Point(0,0);
	//###TEST CLASSE###
	$point1->setX(1);
    $point1->setY(2);
	echo $point1->getX(); //affichera 1
    echo "<br>";
	echo $point1->getY(); //affichera 2
    echo "<br>";
    $point1->convertToString(); // affichera "Point de coordonées [1,2]"
?>