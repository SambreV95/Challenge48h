<?php
	if ( ! isset($_SESSION['email']))
	{
		echo "ERREUR 404, page non identifiée ";
	}

	else if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
	{
		$unControleur->setTable("ouvrier");

		$lOuvrier = null;
		if (isset($_GET['action']) && isset($_GET['idouvrier']))
		{
			$idouvrier = $_GET['idouvrier'];
			$action = $_GET['action'];

			switch ($action){
				case "sup" :
						$tab=array("idouvrier"=>$idouvrier);
						$unControleur->delete($tab);
						break;
				case "edit" :
						$tab=array("idouvrier"=>$idouvrier);
						$lOuvrier = $unControleur->selectWhere ($tab);
						break;
			}
		}


require_once("vue/vue_insert_ouvrier.php");


if (isset($_POST['modifier'])){
	$tab=array("nom"=>$_POST['nom'], "prenom"=>$_POST['prenom'],
				"adresse"=>$_POST['adresse'],"tel"=>$_POST['tel'], "email"=>$_POST['email'],
        "mdp"=>$_POST['mdp'],"salaire"=>$_POST['salaire'],"specialisation"=>$_POST['specialisation']);
	$where =array("idouvrier"=>$idouvrier);

	$unControleur->update($tab, $where);
	header("Location: index.php?page=9");
}

if (isset($_POST['valider']))
{
    $tab=array("nom"=>$_POST['nom'], "prenom"=>$_POST['prenom'],
  				"adresse"=>$_POST['adresse'],"tel"=>$_POST['tel'], "email"=>$_POST['email'],
          "mdp"=>$_POST['mdp'],"salaire"=>$_POST['salaire'],"specialisation"=>$_POST['specialisation']);
    $unControleur->insert($tab);
}





$tab=array("*");
$lesOuvriers=$unControleur->selectAll($tab);
require_once("vue/vue_les_ouvriers.php");

}
	else if (isset($_SESSION['droits']) && $_SESSION['droits'] =="ouvrier")
			{
						$unControleur->setTable ("ouvrier");
						$tab=array("*");
						$lesOuvriers = $unControleur->selectAll($tab);
						require_once("vue/vue_les_ouvriers.php");
		}
?>
