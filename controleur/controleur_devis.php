<?php
	require_once ("modele/modele_devis.php");
	require_once("controleur.class.php");

	class ControleurDevis extends Controleur
	{
		public function   __construct ($serveur, $bdd, $user, $mdp){

			$this->unModele = new ModeleDevis ($serveur, $bdd, $user, $mdp);
		}

		public function selectByNomDevis ($nom){
			return $this->unModele->selectByNomDevis($nom);
		}
	}
?>
