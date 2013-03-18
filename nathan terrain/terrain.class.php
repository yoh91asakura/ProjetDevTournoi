<?php

class Terrain{
	
	private $id;// tableau id des terrains
	private $dispo;//tableau nombre de terrain disponible
	private $nbTerrain;//nombre total de terrain
	private $horaire;//tableau heure a laquelle le teraain est occupe. taleau
	private $heure;
	private $message;

	private $nbEquipe;
	private $tabEquipe;

	
	public function  Terrain()
	{
		$req="select * from terrain";
		$res=mysql_query($req);
		$ligne=mysql_fetch_assoc($res);
		while($ligne)
		{
			$this->id[]=$ligne['idterrain'];
			$this->dispo[]=$ligne['dispo'];
			$this->horaire[]=$ligne['horaire'];
			$ligne=mysql_fetch_assoc($res);
			}
			
			}
	
		
	public function getId($i)
	{
		return $this->id[$i];}	
	
	public function getDispo($i)
	{
		return $this->dispo[$i];}
		
	public function getHoraire($i)
	{
		return $this->horaire[$i];}	
		
	
	
	public function nbTerrain()
	{
		
		$req="select count(idterrain) as nb from terrain";
		$res=mysql_query($req);
		$ligne=mysql_fetch_assoc($res);
		$this->nbTerrain=$ligne['nb'];
		return $this->nbTerrain;		
		}
	public function ajoutTerrain($nb)
	{
		for($i=0;$i<$nb;$i++)
		{
		
		$req="insert into terrain values('','0','NULL')";
		$res=mysql_query($req);
		}
		
		return $this->message="terrain disponible ajoute avec succes ";
		}
	
	public function donnerTerrain($nbEquipe)//donne le nombre de terrain dont on a besoin
	{
		if(($nbEquipe % 2)==0)
		{
			$nb=$nbEquipe/2;
		//$tabTerrain = array($nb);
		return $nb;
		}
		else{
			$nb=(($nbEquipe-1)/2)+1;
			
		//$tabTerrain = array($nb);  
		//echo $nb;	
		return $nb;}
		
		
		}
	public function simul($nbEquipe)
	{
	$tab= array (1,2,3,4,5,6,7,8,9,10);//equipe
$tab3= array('a','z','e','r','t');//terrain
$tab2= array();
$num=NULL;
if($nbEquipe < 10)
	$num=1;//3 terrain
if($nbEquipe>10 && $nbEquipe < 20)
	$num=2;//4
if($nbEquipe>20 && $nbEquipe < 30)
	$num =3;//6
switch($num)
{
	case 1:$this->message=" vous avez besoin de 3 Terrains";
		break;
	case 2:$this->message=" vous avez besoin de 4 Terrains";
		break;
	case 3:$this->message=" vous avez besoin de 6 Terrains";
		break;		
	default : $this->message="information entré incorrect";	
	}
	return $this->message;

$i=0;
$k=0;
	for($j=0;$j<count($tab);$j++)
	{
		$tab2[$i][]=$tab[$j].','.$tab3[$i];		
		$k++;
		if($k==2)
		{$i++;
		$k=0;}
					
		}
		}
	
	
	public function majTerain($i,$horaire)
	{
		$req="update terrain set horaire = '$horaire', dispo=1 where idterrain = '$i'";
		$res=mysql_query($req);
		if($res==1)
			return 1;
		else return 0;	
		}
	
	
	
	
	}



?>