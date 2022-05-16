<?php
if ( ! isset($_SESSION['email']))
{
	$unControleur->setTable ("devis");
	$leDevis = null;
	$tab=array("*");
	$lesDevis = $unControleur->selectAll($tab);

		require_once("vue/vue_insert_devis.php");

		if (isset($_POST['modifier'])){
			$tab=array("nom"=>$_POST['nom'], "prenom"=>$_POST['prenom'], "email"=>$_POST['email'],"localisation"=>$_POST['localisation'],
			"fourchettebudget"=>$_POST['fourchettebudget'],"duree"=>$_POST['duree'],"delais"=>$_POST['delais'],"commentaire"=>$_POST['commentaire'],
			"statut"=>$_POST['statut']);
			$where =array("iddevis"=>$iddevis);

			$unControleur->update($tab, $where);
			header("Location: index.php?page=4");
		}

		if (isset($_POST['valider'])){
			$tab=array("nom"=>$_POST['nom'],"prenom"=>$_POST['prenom'], "mail"=>$_POST['mail'],
			"localisation"=>$_POST['localisation'],"fourchettebudget"=>$_POST['fourchettebudget'],
			"duree"=>$_POST['duree'],"delais"=>$_POST['delais'],"commentaire"=>$_POST['commentaire'],"statut"=>$_POST['statut']);
			$unControleur->insert($tab);
			echo "<br>Votre demande de devis a bien été envoyé. Réponse sous 24h !";
		}
}

if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
{
	$unControleur->setTable ("devis");
	$leDevis = null;

		if (isset($_GET['action']) && isset($_GET['iddevis']))
		{
			$iddevis = $_GET['iddevis'];
			$action = $_GET['action'];

			switch ($action){
				case "sup" :
						$tab=array("iddevis"=>$iddevis);
						$unControleur->delete($tab);
						break;
				case "edit" :
						$tab=array("iddevis"=>$iddevis);
						$leDevis = $unControleur->selectWhere ($tab);
						break;
			}
		}


	require_once("vue/vue_insert_devis.php");

	if (isset($_POST['modifier'])){
		$tab=array("nom"=>$_POST['nom'], "prenom"=>$_POST['prenom'], "mail"=>$_POST['mail'],"localisation"=>$_POST['localisation'],
		"fourchettebudget"=>$_POST['fourchettebudget'],"duree"=>$_POST['duree'],"delais"=>$_POST['delais'],"commentaire"=>$_POST['commentaire'],
		"statut"=>$_POST['statut']);
		$where =array("iddevis"=>$iddevis);

		$unControleur->update($tab, $where);
		header("Location: index.php?page=4");
	}

	if (isset($_POST['valider'])){
		$tab=array("nom"=>$_POST['nom'],"prenom"=>$_POST['prenom'], "mail"=>$_POST['mail'],
		"localisation"=>$_POST['localisation'],"fourchettebudget"=>$_POST['fourchettebudget'],
		"duree"=>$_POST['duree'],"delais"=>$_POST['delais'],"commentaire"=>$_POST['commentaire'],"statut"=>$_POST['statut']);
		$unControleur->insert($tab);
	}

	if (isset($_POST['ok']) && isset($_POST['nom']))
		{
			$unDevisC->setTable ("devis");
			$nom = $_POST['nom'];
			$lesDevis = $unDevisC->selectByNomDevis($nom);
		} else {
				$tab=array("*");
				$lesDevis = $unControleur->selectAll ($tab);
				}


	require_once("vue/vue_les_devis.php");

	}
		else if (isset($_SESSION['droits']) && $_SESSION['droits'] =="user")
				{
						$unControleur->setTable ("devis");
						$leDevis = null;
						$tab=array("*");
						$lesDevis = $unControleur->selectAll($tab);

							require_once("vue/vue_insert_devis.php");

							if (isset($_POST['modifier'])){
								$tab=array("nom"=>$_POST['nom'], "prenom"=>$_POST['prenom'], "email"=>$_POST['email'],"localisation"=>$_POST['localisation'],
								"fourchettebudget"=>$_POST['fourchettebudget'],"duree"=>$_POST['duree'],"delais"=>$_POST['delais'],"commentaire"=>$_POST['commentaire'],
								"statut"=>$_POST['statut']);
								$where =array("iddevis"=>$iddevis);

								$unControleur->update($tab, $where);
								header("Location: index.php?page=4");
							}

							if (isset($_POST['valider'])){
								$tab=array("nom"=>$_POST['nom'],"prenom"=>$_POST['prenom'], "mail"=>$_POST['mail'],
								"localisation"=>$_POST['localisation'],"fourchettebudget"=>$_POST['fourchettebudget'],
								"duree"=>$_POST['duree'],"delais"=>$_POST['delais'],"commentaire"=>$_POST['commentaire'],"statut"=>$_POST['statut']);
								$unControleur->insert($tab);
								echo "<br>Votre demande de devis a bien été envoyé. Réponse sous 24h !";
							}
}

			else if (isset($_SESSION['droits']) && $_SESSION['droits'] =="ouvrier")
							{
								$unControleur->setTable ("devis");
								$leDevis = null;
								$tab=array("*");
								$lesDevis=$unControleur->selectAll($tab);
								require_once("vue/vue_les_devis.php");
							}

?>
