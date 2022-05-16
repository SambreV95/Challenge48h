<?php
$unControleur->setTable ("chef");
$tab=array("idchef", "nom", "prenom");
$lesChefs = $unControleur->selectAll ($tab);

	if ( ! isset($_SESSION['email']))
	{
				$unControleur->setTable ("les_realisations");
				$tab=array("*");
				$lesRealisations = $unControleur->selectAll($tab);
				require_once("vue/vue_les_realisations.php");
	}

	if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
	{
		$unControleur->setTable("realisation");

		$laRealisation = null;
		if (isset($_GET['action']) && isset($_GET['idrealisation']))
		{
			$idrealisation = $_GET['idrealisation'];
			$action = $_GET['action'];

			switch ($action){
				case "sup" :
						$tab=array("idrealisation"=>$idrealisation);
						$unControleur->delete($tab);
						break;
				case "edit" :
						$tab=array("idrealisation"=>$idrealisation);
						$laRealisation = $unControleur->selectWhere ($tab);
						break;
			}
		}



			require_once("vue/vue_insert_realisation.php");




if (isset($_POST['modifier'])){
	$tab=array("nomreal"=>$_POST['nomreal'], "surface"=>$_POST['surface'],
				"budget"=>$_POST['budget'],"localisation"=>$_POST['localisation'],"typedebien"=>$_POST['typedebien'],"description"=>$_POST['description'],
			"idchef"=>$_POST['idchef']);
	$where =array("idrealisation"=>$idrealisation);

	$unControleur->update($tab, $where);
	header("Location: index.php?page=1");
}

if (isset($_POST['valider']))
{
    $tab=array("nomreal"=>$_POST['nomreal'], "surface"=>$_POST['surface'],"budget"=>$_POST['budget'],
		"localisation"=>$_POST['localisation'],"typedebien"=>$_POST['typedebien'],"description"=>$_POST['description'],"idchef"=>$_POST['idchef']);
    $unControleur->insert($tab);
}


//$laRealisation = null;
$unControleur->setTable ("les_realisations");
$tab=array("*");
$lesRealisations=$unControleur->selectAll($tab);
require_once("vue/vue_les_realisations.php");

}

	else if (isset($_SESSION['droits']) && $_SESSION['droits'] =="ouvrier")
			{
				$unControleur->setTable ("les_realisations");

						$tab=array("*");
						$lesRealisations = $unControleur->selectAll($tab);
						require_once("vue/vue_les_realisations.php");
		}

		else if (isset($_SESSION['droits']) && $_SESSION['droits'] =="user")
				{
					$unControleur->setTable ("les_realisations");

							$tab=array("*");
							$lesRealisations = $unControleur->selectAll($tab);
							require_once("vue/vue_les_realisations.php");
			}

?>
