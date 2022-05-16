<?php

	if ( ! isset($_SESSION['email']))
	{
				$unControleur->setTable ("service");
				$tab=array("*");
				$lesServices = $unControleur->selectAll($tab);
				require_once("vue/vue_les_services.php");
	}

	if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
	{
		$unControleur->setTable ("service");
		$leService = null;
			if (isset($_GET['action']) && isset($_GET['idservice']))
			{
				$idservice = $_GET['idservice'];
				$action = $_GET['action'];

				switch ($action){
					case "sup" :
							$tab=array("idservice"=>$idservice);
							$unControleur->delete($tab);
							break;
					case "edit" :
							$tab=array("idservice"=>$idservice);
							$leService = $unControleur->selectWhere ($tab);
							break;
				}
			}


		require_once("vue/vue_insert_service.php");

		if (isset($_POST['modifier'])){
			$tab=array("corps"=>$_POST['corps'], "descriptif"=>$_POST['descriptif']);
			$where =array("idservice"=>$idservice);

			$unControleur->update($tab, $where);
			header("Location: index.php?page=3");
		}

		if (isset($_POST['valider'])){
			$tab=array("corps"=>$_POST['corps'], "descriptif"=>$_POST['descriptif']);
			$unControleur->insert($tab);
		}


		$tab=array("*");
		$lesServices=$unControleur->selectAll($tab);
		require_once("vue/vue_les_services.php");
		}

			else if (isset($_SESSION['droits']) && $_SESSION['droits'] =="user")
					{
						$unControleur->setTable ("service");

								$tab=array("*");
								$lesServices = $unControleur->selectAll($tab);
								require_once("vue/vue_les_services.php");
				}

				else if (isset($_SESSION['droits']) && $_SESSION['droits'] =="ouvrier")
						{
							$unControleur->setTable ("service");

									$tab=array("*");
									$lesServices = $unControleur->selectAll($tab);
									require_once("vue/vue_les_services.php");
					}

?>
