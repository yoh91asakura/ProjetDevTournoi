<?php
class GestionPoule {
	private $tabWinner;//future tableau des gagnants de poules qui passeront à l'arbre final
	private $tabPoule;//le tableau des poules
	private $tabMatch;//les tableau des matches
	private $nbMatch=0;//donne le nombre total de match
	
	public function __construct($tabPoule){
	$this->tabPoule = $tabPoule;
	}
	
	public function genererTabMatch(){
		
		foreach($this->tabPoule as $index => $lig){
			foreach($lig as $index2 => $col){
				for ($i=$index2+1 ; $i<count($lig) ; $i++)
				{
				$this->tabMatch[$index][] = array($col,$this->tabPoule[$index][$i]);
				$this->nbMatch++;
				}
			}
		}
		unset($index);
		unset($index2);
		unset($lig);
		unset($col);
		
		foreach ($this->tabMatch as $index => $lig) shuffle($this->tabMatch[$index]);
		unset($lig);
	}
	
	public function getNbMatch(){
		return $this->nbMatch;
	}
	
	public function getTabMatch (){
		return $this->tabMatch;
	}
}
?>
