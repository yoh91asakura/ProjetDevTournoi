<?php
class GestionPoule {
	private $tabWinner;
	private $tabPoule;
	private $tabMatch;
	
	public function __construct($tabPoule){
	$this->tabPoule = $tabPoule;
	}
	
	public function genererTabMatch(){
		
		foreach($this->tabPoule as $index => $lig){
			foreach($lig as $index2 => $col){
				for ($i=$index2+1 ; $i<count($lig) ; $i++)
				$this->tabMatch[$index][] = $this->tabPoule[$index][$index2]." vs ".$this->tabPoule[$index][$i];
			}
		}
		unset($lig);
		unset($col);
		//print_r($this->tabMatch[0]);
		foreach ($this->tabMatch as $index => $lig) shuffle($this->tabMatch[$index]);
		unset($lig);
		return $this->tabMatch;
	}
	
}
?>
