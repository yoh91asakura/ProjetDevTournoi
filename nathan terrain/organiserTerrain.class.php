<!-- recuperre le terrain dans la   -->
<?php
class OrganiserTerrain extends Terrain {
	
	private $tabTerrainLibre;//tableau terrain libre	
	private $tabTerrainJeu;//terrain pour les jeu
	private $nbTerrainLibre;
	
	
	public function OrganiserTerrain()
	{
		$req=" select idterrain from terrain where dispo=0";
		$res=mysql_query($req);				
		$ligne=mysql_fetch_assoc($res);		
		while($ligne)
		{
			$this->tabTerrainLibre[]=$ligne['idterrain'];			
			$ligne=mysql_fetch_assoc($res);			
			}	
		}
	
	public function getTerrainLibre($i)
		{
			return $this->tabTerrainLibre[$i];}	
			
	public function getNbTerrainLibre()
	{
		return $this->nbTerrainLibre;}
		
	
	public function donnerTerrainLibre()//donne les Id des terrains libre
	{
		$req="select count(idterrain) as libre from terrain where dispo=0";
		$res=mysql_query($req);				
		$ligne=mysql_fetch_assoc($res);
		return $this->nbTerrainLibre=$ligne['libre'];		
		}
	
	
	
	
	/*public function organiserTerrain($idEquipe)//on a le nombre de terrain qu'il faut. recuperer dans la base les terrain dispo
	{
		//$terrainDonner[];
		//parent::donnerTerrain();
$tab= array (1,2,3,4,5,6,7,8,9,10);//equipe
$tab3= array('a','z','e','r','t');//terrain
$tab2= array();
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
		$tab= array (1,2,3,4,5,6,7,8,9,10);//equipe
$tab3= array('a','z','e','r','t');//terrain
$tab2= array();
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
	
	*/
	
	}

?>