CREATE DATABASE IF NOT EXISTS tournois;
use tournois;

CREATE TABLE joueur (
	idjoueur INT UNSIGNED NOT NULL,
	nom VARCHAR(30) NOT NULL,
	prenom VARCHAR(30) NOT NULL,
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
	jour VARCHAR (10),
	equipe1 VARCHAR(50) NOT NULL,
	equipe2 VARCHAR (50) NOT NULL,
	gagnant VARCHAR (50) NOT NULL,
	set1equipe1 TINYINT,
	set1equipe2 TINYINT,
	set2equipe1 TINYINT,
	set2equipe2 TINYINT,
	set3equipe1 TINYINT,
	set3equipe2 TINYINT,
	set4equipe1 TINYINT,
	set4equipe2 TINYINT,
	set5equipe1 TINYINT,
	set5equipe2 TINYINT
	);
	

	
	
	
