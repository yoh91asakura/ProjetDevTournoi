<?php

class Poule
{
 	//attributs
	private $tabEquipe; //Tableau contenant toutes les �quipes
	private $nbEquipe; //nombre d'�quipe dans les poules
	private $nbPoule =1; //nombre de poules � cr�er
	private $compteurEquipe = 6;//compteur pour la r�ussite de la s�paration des poules
	private $modulo = 2;//pmodulo � incr�menter
	private $tabPoule = array();//le tableau de poule
	
	public function __construct($tabEquipe){
		$this->tabEquipe = $tabEquipe;
		$this->nbEquipe = count($tabEquipe);
	}
	
	public function nbPoule($nbEquipe){
		
		if ($nbEquipe <= 4) return $this->nbPoule = 0; //si il y a 4 �quipe il n'y aura pas de poules
		if ($nbEquipe == 5) return $this->nbPoule = 1; //pour 5 �quipes, on fera une poule avec les 2 meilleurs en final
		if($nbEquipe <= 7) return $this->nbPoule = 2; //pour 6 �quipe on fait 2 pourles de 3
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

	public function repartitionPoule(){
		shuffle($this->tabEquipe);
		$i = 0;
		for ($j=0;$j<$this->nbEquipe;$j++)
		{	
		$this->tabPoule[$i][] = array($this->tabEquipe[$j],0);
		if($i == ($this->nbPoule-1))$i = 0; 
		else $i++;
		}	
	}
	

		
	public function getNbPoule(){
		return $this->nbPoule;}
		
	public function getTabPoule(){
		return $this->tabPoule;
	}

}
?>