<?php
//###DEFINITION CLASSE###
	class Hippopotamus
    {
		public $name;
		public $poids;
		public $tusksSize;

		//constructeur classe
		function __construct($name,$poids,$tusksSize)
        {
            $this->name = $name;
            $this->poids = $poids;
            $this->tusksSize = $tusksSize;
        }
	
		function eat()
        {
            $this->poids++;
        }
		
		function swim()
		{
			$this->poids = $this->poids-0.3;
	    }
		
		function fight(Hippopotamus $adversaire)
		{
			if ($this->tusksSize > $adversaire->tusksSize)
            {
				echo "Le gagnant du combat est: ".$this->name;
                echo "<br>";
            } 
			elseif ($this->tusksSize < $adversaire->tusksSize)
            {
                echo "Le gagnant du combat est: ".$adversaire->name;
                echo "<br>";
            }
			else
            {
                echo "Egalité"; 
                echo "<br>";
            }
		}
		
		//conversion de l'objet en chaine
		function convertToString()
		{
			$string = "Hippopotame ".$this->name.":\nPoids: ".$this->poids." kg\nTaille des défenses: ".$this->tusksSize;
			echo $string;
            echo "<br>";
		}
	}


	//###TEST COMBAT###
    $hippo1 = new Hippopotamus("John", 2000, 2); 
    $hippo2 = new Hippopotamus("Jane", 1900, 3);

    $hippo1->fight($hippo2); //hippo2 vainqeur

	//###CYCLE VIE###
    $hippo3 = new Hippopotamus("Jake", 3000, 5);

    for ($i=1; $i <= 21; $i++) { 
        # code...
        for ($j=1; $j <= 15; $j++) { 
			for ($x=1; $x <= 2; $x++) { 
				$hippo3->eat();
            }
			for ($y=1; $y <= 3; $y++) { 
				$hippo3->swim();
            }
        }
        $hippo3->convertToString();
        echo "Fin du jour ".$i."<br>";
    }
?>