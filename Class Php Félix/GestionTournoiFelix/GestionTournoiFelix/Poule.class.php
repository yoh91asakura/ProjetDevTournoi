<?php
class Poule
{
 	//attributs
	private $tabEquipe; //Tableau contenant toutes les équipes
	private $nbEquipe; //nombre d'équipe dans les poules
	private $nbPoule =0; //nombre de poules à créer
	private $compteurEquipe = 8;
	private	$incPoule = 0;
	
	public function __construct($tabEquipe, $nbEquipe){
		$this->tabEquipe = $tabEquipe;
		$this->nbEquipe = $nbEquipe;
	}
	
	public function pgcd($a, $b)
	{
		for($c = $a % $b ; $c != 0 ; $c = $a % $b)
		{
			$a = $b;
			$b = $c;
		}
	
		return $b;
	}
	
	public function nbPoule($nbEquipe){
		
		
		
		if ($nbEquipe <= 4) return $this->nbPoule = 0; //si il y a 4 équipe il n'y aura pas de poules
		if ($nbEquipe == 5) return $this->nbPoule = 1; //pour 5 équipes, on fera une poule avec les 2 meilleurs en final
		if ($nbEquipe >=6 && $nbEquipe <=8) return $this->nbPoule = 2;
		if($nbEquipe <= $this->compteurEquipe) {
			if ($nbEquipe%2){//si nbéquipe est impaire
			$this->nbPoule = $this->pgcd($nbEquipe-1,4)+$this->incPoule;
			if($this->nbPoule > ($nbEquipe/4))$this->nbPoule /=2; 
			}else  {
			$this->nbPoule = $this->pgcd($nbEquipe,4)+$this->incPoule;
			echo $this->nbPoule . " "; 
			if($this->nbPoule > ($nbEquipe/4))$this->nbPoule -= 2;
				}
		}
		if ($this->nbPoule <=2)
		{
			$this->compteurEquipe *=2;
			$this->incPoule +=2;
			$this->nbPoule($nbEquipe);
		}
		return $this->nbPoule;
	}
	
	public function getNbPoule(){
		return $this->nbPoule;}
}

?>