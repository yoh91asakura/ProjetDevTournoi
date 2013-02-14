CREATE DATABASE IF NOT EXISTS tournois;
use tournois;

CREATE TABLE joueur (
	idpersonne INT UNSIGNED NOT NULL,
	nom VARCHAR(30) NOT NULL,
	prenom VARCHAR(30) NOT NULL,
	joueur VARCHAR(3) NOT NULL,
	capitaine VARCHAR(3) NOT NULL,
	nomequipe VARCHAR(50) NOT NULL
	);

CREATE TABLE arbitre (
		idarbitre INT UNSIGNED NOT NULL,
		nomarbitre VARCHAR(30) NOT NULL,
		prenomarbitre VARCHAR(30) NOT NULL
		);
		
CREATE TABLE equipe (
	nomequipe VARCHAR(50) NOT NULL,
	nombrejoueur TINYINT UNSIGNED,
	nomcapitaine VARCHAR(30) NOT NULL,
	prenomcapitaine VARCHAR(30) NOT NULL
	);

CREATE TABLE poule (
	idpoule TINYINT UNSIGNED,
	nombrequipe SMALLINT UNSIGNED
	);

CREATE TABLE terrain (
	idterrain SMALLINT UNSIGNED,
	dispo VARCHAR(3) NOT NULL,
	horaire VARCHAR(5) NOT NULL
	);

CREATE TABLE rencontre (
	idrencontre INT UNSIGNED NOT NULL,
	idterrain SMALLINT UNSIGNED NOT NULL,
	idarbitre INT UNSIGNED NOT NULL,
	numsemaine TINYINT UNSIGNED NOT NULL,
	jour VARCHAR (10)
	);
	

	
	
	
