<?php
class Poule
{
 	//attributs
	private $tabEquipe; //Tableau contenant toutes les équipes
	private $nbEquipe; //nombre d'équipe dans les poules
	private $nbPoule =1; //nombre de poules à créer
	private $compteurEquipe = 6;
	private $modulo = 2;
	private $tabPoule = array();
	
	public function __construct($tabEquipe, $nbEquipe){
		$this->tabEquipe = $tabEquipe;
		$this->nbEquipe = $nbEquipe;
	}
	
	public function nbPoule($nbEquipe){
		
		
		
		if ($nbEquipe <= 4) return $this->nbPoule = 0; //si il y a 4 équipe il n'y aura pas de poules
		if ($nbEquipe == 5) return $this->nbPoule = 1; //pour 5 équipes, on fera une poule avec les 2 meilleurs en final
		if($nbEquipe <= 7) return $this->nbPoule = 2; //pour 6 équipe on fait 2 pourles de 3
		if($nbEquipe < $this->compteurEquipe) 
		$this->nbPoule = (int) ($this->nbEquipe/$this->modulo); 	
	
		if ((int)($this->nbEquipe/$this->nbPoule) <3 || (int)($this->nbEquipe/$this->nbPoule)>6)
		{	
			$this->modulo++;
			$this->compteurEquipe *=2;
			$this->nbPoule($nbEquipe);
		}
		return $this->nbPoule;
	}
	
	public function getNbPoule(){
		return $this->nbPoule;}
		
	public function getTabPoule(){
		return $this->tabPoule;
	}

	public function repartitionPoule(){
		$i = 0;
		for ($j=0;$j<$this->nbEquipe;$j++)
		{	
		$this->tabPoule[$i][] = $this->tabEquipe[$j];
		if($i == ($this->nbPoule-1))$i =0; 
		else $i++;
		
		}	
	}
}
?>