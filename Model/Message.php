<?php
    require_once("Conf/Connexion.php");
    Connexion::connect();

    class Message{
        private $idUtilisateur;
        private $idMessagerie;
        private $idMessage;
        private $contenuMessage;
		
	/**
	 * @param mixed $idUtilisateur 
	 * @param mixed $idMessagerie 
	 * @param mixed $idMessage 
	 * @param mixed $contenuMessage 
	 */
	public function __construct($idUtilisateur, $idMessagerie, $idMessage, $contenuMessage) {
		$this->idUtilisateur = $idUtilisateur;
		$this->idMessagerie = $idMessagerie;
		$this->idMessage = $idMessage;
		$this->contenuMessage = $contenuMessage;
	}


	public static function envoiMessage($message, $utilisateur, $idConversation){
		$requetePreparee = "INSERT INTO message VALUES(:tag_idConversation, :tag_dateMessage, :tag_contenuMessage, :tag_idMessage, :tag_mail);";
		$req_prep = Connexion::pdo()->prepare($requetePreparee);
		$tags = ["tag_idConversation" => $idConversation,"tag_dateMessage" => date('y/m/d H:i:s'),"tag_contenuMessage"=>$message, "tag_idMessage" =>"", "tag_mail" => $utilisateur];
		try{
			$req_prep->execute($tags);
		} catch (PDOException $e) {
			echo "erreur : ".$e->getMessage()."<br>";
		}
	}

	/**
	 * @return mixed
	 */
	public function getContenuMessage() {
		return $this->contenuMessage;
	}
	
	/**
	 * @param mixed $contenuMessage 
	 * @return self
	 */
	public function setContenuMessage($contenuMessage): self {
		$this->contenuMessage = $contenuMessage;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIdMessage() {
		return $this->idMessage;
	}
	
	/**
	 * @param mixed $idMessage 
	 * @return self
	 */
	public function setIdMessage($idMessage): self {
		$this->idMessage = $idMessage;
		return $this;
	}

}
?>