<?php
require_once("modele/modele.class.php");

class Controleur {

    protected $unModele ;

    public function __construct($serveur,$bdd,$user,$mdp)
    {
        //on instancie la classe
        $this->unModele=new Modele($serveur, $bdd, $user, $mdp);
    }

    public function getTable()
    {
        return $this->unModele->getTable ;
    }

    public function setTable($uneTable)
    {
        $this->unModele->setTable($uneTable);
    }


    public function selectAll($tab)
    {
        // on réupère les clients
        $lesResultats=$this->unModele->selectAll($tab);

        //je traite les  clients

        //je renvoie les clients

        return $lesResultats;
    }
    public function insert ($tab)
    {
        //On controle les données si il y a lieu

        $this->unModele->insert($tab);
    }

    public function nbTuples ($uneTable)
		{
			$this->setTable($uneTable);
			return $this->unModele->nbTuples();
        }

        public function totalDons ($uneTable)
        {
            $this->setTable($uneTable);
            return $this->unModele->totalDons();
        }


    public function delete ($tab)
    {
        $this->unModele->delete ($tab);
    }


    public function selectWhere ($tab)
    {
        return $this->unModele->selectWhere($tab);
    }

    public function update($tab, $where){
        $this->unModele->update($tab, $where);
    }





}
?>
