<?php
	if ( ! isset($_SESSION['email']))
	{
		$unControleur->setTable ("chef");

				$tab=array("*");
				$lesChefs = $unControleur->selectAll($tab);
				require_once("vue/vue_les_chefs.php");
	}

	else if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
	{
		$unControleur->setTable("chef");

		$leChef = null;
		if (isset($_GET['action']) && isset($_GET['idchef']))
		{
			$idchef = $_GET['idchef'];
			$action = $_GET['action'];

			switch ($action){
				case "sup" :
						$tab=array("idchef"=>$idchef);
						$unControleur->delete($tab);
						break;
				case "edit" :
						$tab=array("idchef"=>$idchef);
						$leChef = $unControleur->selectWhere ($tab);
						break;
			}
		}


require_once("vue/vue_insert_chef.php");


if (isset($_POST['modifier'])){
	$tab=array("nom"=>$_POST['nom'], "prenom"=>$_POST['prenom'],
				"adresse"=>$_POST['adresse'],"tel"=>$_POST['tel'], "email"=>$_POST['email'],
        "mdp"=>$_POST['mdp'],"salaire"=>$_POST['salaire']);
	$where =array("idchef"=>$idchef);

	$unControleur->update($tab, $where);
	header("Location: index.php?page=10");
}

if (isset($_POST['valider']))
{
    $tab=array("nom"=>$_POST['nom'], "prenom"=>$_POST['prenom'],
  				"adresse"=>$_POST['adresse'],"tel"=>$_POST['tel'], "email"=>$_POST['email'],
          "mdp"=>$_POST['mdp'],"salaire"=>$_POST['salaire']);
    $unControleur->insert($tab);
}





$tab=array("*");
$lesChefs=$unControleur->selectAll($tab);
require_once("vue/vue_les_chefs.php");

}
	else if (isset($_SESSION['droits']) && $_SESSION['droits'] =="chef")
			{
				$unControleur->setTable ("chef");

						$tab=array("*");
						$lesChefs = $unControleur->selectAll($tab);
						require_once("vue/vue_les_chefs.php");
		}
?>
