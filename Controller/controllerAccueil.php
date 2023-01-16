<?php
// require ici tous les models (les différentes tables de la base de données).
require_once("Model\Utilsateur.php");
    class controllerAcceuil{

        public static function accueil(){
            include("View/pageaccueil.php");
        }

        public static function accueilAssistance(){
            include("View/accueilAssistance.php");
        }

        public static function Statistiques(){
            if (isset($_SESSION['mail'])) {
                include("View/Statistiques.php");
            }else{
                include("View/Statistiques.php");
                //self::accueil();
            }
        }

        public static function Profil(){
            if (isset($_SESSION['mail'])) {
                include("View/Profil.php");
            }else{
                include("View/Profil.php");
                //self::accueil();
            }
        }
        public static function presentationProduit(){

            include("View/PageProduit.php");
        }

        public static function apropos(){
            include("View/a-propos.php");
        }

        public static function accueilAdmin(){
            include("View/acceuilAdmin.php");
        }

        public static function messageAdmin(){
            include("View/messageAdmin.php");
        }

        public static function chatAdmin(){
            include("View/chatAdmin.php");
        }

        public static function pageFAQ(){
            include("View/pageFAQ.php");
        }

        public static function loginUtilisateur() {
            include("View/loginUtilisateur.php");
        }

		public static function Deconnexion() {
            unset($_SESSION["mail"]);
            unset($_SESSION["admin"]);
            self::accueil();
        }

        public static function login() {
            
            extract($_POST);
            $userExist = Utilisateur::UtilisateurExiste($mail);
            if(!$userExist) {
                $erreur = "Aucun compte n'existe avec ce login. Pour vous créer un compte, rentrez vos informations dans Inscription.";
				$_SESSION["erreur"] = $erreur;
                self::loginUtilisateur();
            }
            else {
                $canConnect = Utilisateur::canConnect($mail, $motDePasse);
                if($canConnect) {
					unset($_SESSION["erreur"]);
                    $_SESSION["mail"] = $mail;
                    $admin = Utilisateur::getAdminByMail($mail);
                    $_SESSION["admin"] = $admin;
                    controllerAcceuil::accueil();
                } else {
                    $erreur = "Votre login ou votre mot de passe est incorrect";
                    $_SESSION["erreur"] = $erreur;
                    self::loginUtilisateur()();
                }
            }
        }

        public static function register() {
            extract($_POST);
            $userExist = Utilisateur::UtilisateurExiste($mail);
            if($userExist) {
                $erreur = "Ce nom d'utilisateur est déjà utilisé";
                $_SESSION["erreur"] = $erreur;
                self::loginUtilisateur();
            } else {
                if($motDePasse == $motDePasse2) {
                    unset($_SESSION["erreur"]);
                    Utilisateur::AjouterUtilisateur($mail, $motDePasse, $nom, $prenom, $dateNaissance);
                    $_SESSION["mail"] = $mail;
                    $_SESSION["admin"] = 0;
                    controllerAcceuil::accueil();
                } else {
                    $erreur = "Vous avez fais une erreur lors de la réécriture de votre mot de passe";
                    $_SESSION["erreur"] = $erreur;
                    self::loginUtilisateur();
                }
            }
        }

        
    }


?>