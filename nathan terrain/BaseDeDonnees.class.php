<?php

class BaseDeDonnees {
	private $lien ;
	private $errMessage ;

	private $nbLignes ;
	private $ligne ;
	private $resultat ;

	public function __construct()
	{
		// la connection est elle persistante par default
		if ( ! $this->estConnecte() )
		{
			if ( ! ($this->lien = mysql_connect("localhost","root","") ) )
				$this->ErrMessage = "Erreur de connect : " . mysql_error() ;	
			if ( !( mysql_select_db("gestiontournoi") ) )
				
				$this->ErrMessage = "Erreur de select_db : " . mysql_error() ;
			else
				$this->errMessage = NULL ;
		}
	}
	
	public function getError()
	{
		if ( $this->errMessage != NULL )
			return true ;
		return false ;
	}
	
	public function getMessage()
	{
		if ( $this->errMessage )
			return $this->errMessage ;
		return false ;
	}
	
	public function estConnecte()
	{
		if ( $this->lien != false )
			return true ;
		return false ;
	}
	
	public function select( $sTables , $sColonnes="" , $sClause="" , $sLimit="" )
	{
		$rqt = "SELECT " ;
		if ( $sColonnes == "" )		$rqt .= " * " ;
		else						$rqt .= $sColonnes ;

		$rqt .= " FROM ".$sTables ;
		
		if ( $sClause != "" )		$rqt .= " WHERE ".$sClause ;
		if ( $sLimit  != "" )		$rqt .= " LIMIT ".$sLimit ;
		
		if ( $this->resultat = mysql_query($rqt) ) {
			$this->nbLignes = mysql_num_rows($this->resultat);
			return $this->nbLignes ;
		} else {
			$this->ErrMessage = mysql_error() ;
			return false ;
		}
	}

	public function insert( $sTable, $sColonnes, $sValeurs )
	{
		$rqt = "INSERT INTO $sTable (".$sColonnes.") VALUES (".$sValeurs.") " ;
		if ( mysql_query($rqt) )
		{
			$this->nbLignes = 1 ;
			return true ;
		} else {
			$this->ErrMessage = mysql_error();
			$this->nbLignes = 0 ;
			return false ;
		}
	}
	
	public function update($sTable,$sCol_Val,$sClauses=NULL)
	{
		// $table, col_name1=expr1 [, col_name2=expr2 ...], [WHERE where_definition]
		$rqt = "UPDATE ".$sTable." SET ".$sCol_Val. " WHERE ".$sClauses ;
		if ( mysql_query($rqt) )
		{
			$this->nbLignes = mysql_affected_rows() ;
			return $this->nbLignes ;
		} else {
			$this->nbLignes = 0 ;
			return false ;
		}
	}

/*
	public function getNomTables()
	{
		$rqt = "SHOW TABLES" ;
		$tables = array();
		if ( ( $res = mysql_query($rqt) ) )
		{
			return $tables ;
		} else
			return NULL ;
	}
	
	public function getNomColonnes($table)
	{
		$rqt = "SHOW COLUMNS FROM ".$table ;
		$tables = array();
		if ( ( $res = mysql_query($rqt) ) )
		{
			return $tables ;
		} else
			return NULL ;
	}
*/

	public function getNbLignesRes()
	{
		return $this->nbLignes ;
	}
	
	public function last_id()
	{
		return mysql_insert_id() ;
	}

	public function fetch()
	{
		$this->ligne = mysql_fetch_assoc($this->resultat);
		return $this->ligne ;
	}
	public function fetch_all()
	{
		$this->nbLignes = 0 ;
		$ligne = array();
		while ( ($tp = mysql_fetch_array($this->resultat) ) )
		{
			$ligne[] = $tp ;
			$this->nbLignes++ ;
		}
		return $ligne ;
	}
	
	public function fetch_objet()
	{
		$this->ligne = mysql_fetch_object($this->resultat);
		return $this->ligne ;
	}
	public function fetch_all_objets()
	{
		$this->nbLignes = 0 ;
		$ligne = array();
		while ( ($tp = mysql_fetch_object($this->resultat) ) )
		{
			$ligne[] = $tp ;
			$this->nbLignes++ ;
		}
		return $ligne ;
	}
	

//  A tester encore
	function fetch_allinArray()
	{
		$table_result = array();
		$l = 0;
		while($row = mysql_fetch_assoc($this->resultat))
		{
			$arr_row = array();
			$c = 0;
			while ($c < mysql_num_fields($this->resultat)) {       
				$col = mysql_fetch_field($this->resultat, $c);   
				$arr_row[$col -> name] = $row[$col -> name];           
				$c++;
			}   
			$table_result[$l] = $arr_row;
			$l++;
		}
		$this->nbLignes = $l ;
		return $table_result;
	}

}
?>
