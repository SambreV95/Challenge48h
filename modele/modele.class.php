<?php //les 'propriétés' du modele c'est les élément de la bdd
Class Modele {
    protected $unPdo ,$uneTable;
    public function __construct($serveur,$bdd,$user,$mdp)
    {
        $this->unPdo =null;
        try
        {
            $this->unPdo=new PDO("mysql:host=".$serveur.";dbname=".$bdd,$user,$mdp);
        }
        catch(PDOexception $exp)
        {
            echo "Erreur de connexion au serveur : ".$serveur."/".$bdd;
        }

    }
    public function getTable()
    {
        return $this->uneTable;
    }
    public function setTable($uneTable)
    {
        $this->uneTable=$uneTable;
    }

    public function selectAll($tab)
    {   if($this->unPdo !=null)
        {   $chaine=implode(",",$tab); //implode — Rassemble les éléments d'un tableau en une chaîne
            $requete=" select ".$chaine." from " .$this->uneTable. ";";
            $select=$this->unPdo->prepare($requete);
            $select->execute();
            return $select->fetchAll();
        }
        else
        {
            return null;
        }


    }

    public function insert($tab)
    {   if($this->unPdo !=null)
        {foreach($tab as $cle =>$valeur)
            {
                $listeChamps[]=":".$cle;
                $donnees[":".$cle]=$valeur;
                $listeAttributs[]=$cle;

            }
            $chaineChamps=implode(",", $listeChamps);
            $chaineAttributs=implode(",",$listeAttributs);
            $requete="insert into ".$this->uneTable." (".$chaineAttributs.") values( ".$chaineChamps.");";
             //echo $requete;
             //var_dump($donnees);

            $insert=$this->unPdo->prepare($requete);
            $insert->execute($donnees);
        }

        }

        public function nbTuples ()
		{
			if ($this->unPdo != null){
				$requete = "select count(*) as nb from  ".$this->uneTable. ";" ;
				$count = $this->unPdo->prepare ($requete);
				$count->execute ();
				$resultat = $count->fetch();
				return $resultat['nb'];
			}
			else {
				return 0;
			}
		}

		public function totalDons ()
		{
			if ($this->unPdo != null){
				$requete = "select sum(somme) as sommeDons from  ".$this->uneTable. ";" ;
				$sum = $this->unPdo->prepare ($requete);
				$sum->execute ();
				$resultat = $sum->fetch();
				return $resultat['sommeDons'];
			}
			else {
				return 0;
			}
		}

        public function delete ($tab)
		{
			if ($this->unPdo != null){
				$listeChamps = array();
				$donnees =array();
                foreach ($tab as $cle => $valeur)
                {
					$listeChamps[] = $cle." = ".":".$cle ;
					$donnees[":".$cle] = $valeur;
				}
				$chaineChamps = implode(" and ", $listeChamps);
                $requete ="delete from   ".$this->uneTable."  where  ".$chaineChamps.";" ;

				$delete = $this->unPdo->prepare ($requete);
				$delete->execute ($donnees);

			}
        }


        public function selectWhere ($tab)
		{
			if ($this->unPdo != null){
				//construction du where
				$listeChamps = array();
				$donnees =array();
				foreach ($tab as $cle => $valeur) {
					$listeChamps[] = $cle." = ".":".$cle ;
					$donnees[":".$cle] = $valeur;
				}
				$chaineChamps = implode(" and ", $listeChamps);

				$requete = "select * from   ".$this->uneTable. " where ".$chaineChamps.";" ;
				$select = $this->unPdo->prepare ($requete);
				$select->execute ($donnees);
				return $select->fetch(); //un seul résultat.
			}
			else
			{
				return null;
			}
		}



        public function update($tab, $where)
		{
			if ($this->unPdo != null){
				//construction du where
				$listeChamps = array();
				$donnees =array();
				foreach ($where as $cle => $valeur) {
					$listeChamps[] = $cle." = ".":".$cle ;
					$donnees[":".$cle] = $valeur;
				}
				$chaineChamps = implode(" and ", $listeChamps);

				//construction des valeurs
				$listeValeurs = array ();
				foreach ($tab as $cle => $valeur) {
					$listeValeurs[] = $cle." = ".":".$cle ;
					$donnees[":".$cle] = $valeur;
				}
				$chaineValeurs = implode(", ", $listeValeurs);
				$requete = " update  ".$this->uneTable." set ".$chaineValeurs."  where  ".$chaineChamps.";";

				$update = $this->unPdo->prepare ($requete);
				$update->execute ($donnees);
			}
		}



}

?>
