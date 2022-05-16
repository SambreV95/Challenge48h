<?php
	require_once("modele.class.php");

	class ModeleDevis extends Modele
	{
		//toutes les méthodes du Modele se retrouvent ici par héritage
		public function   __construct ($serveur, $bdd, $user, $mdp)
		{
			parent::__construct($serveur, $bdd, $user, $mdp);
		}

		public function selectByNomDevis ($nom)
		{
			if ($this->unPdo != null)
			{
				$requete = "select * from ".$this->uneTable."  where nom like :nom ;";
				$donnees = array(":nom"=>"%".$nom."%");

				$select = $this->unPdo->prepare ($requete);
				$select->execute ($donnees);
				return $select->fetchAll();
			}
		}
	}
?>
