<?php

class Model
{
    private $bd;

    private static $instance = null;

    private function __construct()
    {
        try {
            $this->bd = new PDO('mysql:host=localhost;dbname=librairie', 'root', '');
            $this->bd->query("SET NAMES 'utf8'");
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('<p>Echec connexion. Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }

    public static function get_model()
    {

        if (is_null(self::$instance)) {
            self::$instance = new Model();
        }
        return self::$instance;
    }


    // ----------------------------------PARTIE LOGIN --------------------------------------------//


    public function get_login()
    {
        $mail = $_POST['E_mail'];
        $MdP = $_POST['MdP'];

        try {
            $requete = $this->bd->prepare("SELECT * FROM utilisateur WHERE E_mail = :E_mail AND MdP = :MdP");

            $requete->execute(array(':MdP' => $MdP,  ':E_mail' => $mail));
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage());
        }
        return $requete->fetch(PDO::FETCH_OBJ);
    }

    // --------------------------------------------------------PARTIE LIVRE------------------------------------------------------------------------------------------------------------------//


    // ************************************** PAR ALL LIVRES UTILISATEURS *********************************

    public function get_all_livres()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM livres ORDER BY Titre_livre ASC');
            $requete->execute();
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    // ************************************** PAR TITRE *******************************************

    public function get_all_livres_par_titre()
    {
        try {
            $requete = $this->bd->prepare('SELECT Titre_livre FROM livres ORDER BY Titre_livre ASC');
            $requete->execute();
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    // ************************************** PAR TITRE RESULTAT *******************************************
    public function get_all_livres_par_titre_resultat()
    {
        $choixTitre = $_POST['select'];
        try {
            $requete = $this->bd->prepare("SELECT * FROM livres WHERE Titre_livre = :a");
            $requete->execute(array(':a' => $choixTitre));
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }



    // // ************************************** PAR AUTEUR *********************************

    public function get_livres_par_auteur()
    {
        try {
            $requete = $this->bd->prepare('SELECT Nom_auteur FROM livres ORDER BY Nom_auteur ASC');
            $requete->execute();
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    // ************************************** PAR AUTEUR RESULTAT *******************************************

    public function get_livres_par_auteur_resultat()
    {
        $choixAuteur = $_POST['select_auteur']; {
            try {
                $requete = $this->bd->prepare("SELECT * FROM livres WHERE `Nom_auteur`= :a");
                $requete->execute(array(':a' => $choixAuteur));
            } catch (PDOException $e) {
                die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
            }
            return $requete->fetchAll(PDO::FETCH_OBJ);
        }
    }

    // ************************************** PAR EDITEUR *********************************

    public function get_livres_par_editeur()
    {
        try {
            $requete = $this->bd->prepare('SELECT Editeur  FROM livres ORDER BY Editeur  ASC');
            $requete->execute();
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_livres_par_editeur_resultat()
    {
        $choixEditeur = $_POST['select_editeur']; {
            try {
                $requete = $this->bd->prepare("SELECT * FROM livres WHERE Editeur = :a");
                $requete->execute(array(':a' => $choixEditeur));
            } catch (PDOException $e) {
                die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
            }
            return $requete->fetchAll(PDO::FETCH_OBJ);
        }
    }

    // ======================================================================================================================================================

    // ------------------------------------------ PARTIE FOURNISSEUR  ---------------------------------------------------------------------------------------------//

    public function get_all_fournisseurs()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM fournisseurs');
            $requete->execute();
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    // // ************************************** FOURNISSEUR PAR RAISON SOCIALE *********************************

    public function get_fournisseurs_par_raison_sociale()
    {
        try {
            $requete = $this->bd->prepare('SELECT Raison_sociale FROM fournisseurs ORDER BY Raison_sociale ASC');
            $requete->execute();
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_fournisseurs_par_raison_sociale_resultat()
    {
        $choixRaisonSociale = $_POST['select_raison_sociale']; {
            try {
                $requete = $this->bd->prepare("SELECT * FROM fournisseurs WHERE Raison_sociale = :a");
                $requete->execute(array(':a' => $choixRaisonSociale));
            } catch (PDOException $e) {
                die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
            }
            return $requete->fetchAll(PDO::FETCH_OBJ);
        }
    }

    // // ************************************** PAR LOCALITE *********************************

    public function get_fournisseurs_par_localite()
    {
        try {
            $requete = $this->bd->prepare('SELECT Localite FROM fournisseurs ORDER BY Localite ASC');
            $requete->execute();
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_fournisseurs_par_localite_resultat()
    {
        $choixTitre = $_POST['select_localite'];
        try {
            $requete = $this->bd->prepare("SELECT * FROM fournisseurs WHERE Localite = :a");
            $requete->execute(array(':a' => $choixTitre));
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }

        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    // // ************************************** PAR PAYS *********************************

    public function get_fournisseurs_par_pays()
    {
        try {
            $requete = $this->bd->prepare('SELECT Pays FROM fournisseurs ORDER BY Pays ASC');
            $requete->execute();
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_fournisseurs_par_pays_resultat()
    {
        $choixTitre = $_POST['select_pays'];
        try {
            $requete = $this->bd->prepare("SELECT * FROM fournisseurs WHERE Pays = :a");
            $requete->execute(array(':a' => $choixTitre));
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }

        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    // ======================================================================================================================================================

    // ------------------------------------------ PARTIE COMMANDES  ---------------------------------------------------------------------------------------------//


    // ************************************** ALL COMMANDES *********************************


    public function get_all_commandes()
    {
        try {
         $requete = $this->bd->prepare
         ('SELECT
         L.Titre_livre,
         F.Raison_sociale,
         C.id_commande,
         C.Date_achat,
         C.Prix_achat,
         C.Nbr_exemplaires
     FROM
         commander C
     JOIN
         livres L ON C.Id_Livre = L.Id_Livre
     JOIN
         fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur;');
           
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    // // ************************************** PAR EDITEUR *********************************

    public function get_commandes_par_editeur()
    {
        try {
            $requete = $this->bd->prepare('SELECT Editeur FROM commander ');
            $requete->execute();
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_commandes_par_editeur_resultat()
    {
        $choixEditeur = $_POST['select_editeur'];
        try {
            $requete = $this->bd->prepare("SELECT * FROM commander WHERE Editeur = :a");
            $requete->execute(array(':a' => $choixEditeur));
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }

        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    // ************************************** PAR FOURNISSEUR *********************************

    public function get_commandes_par_fournisseur()
    {
        try {
            $requete = $this->bd->prepare('SELECT Id_fournisseur FROM commander ');
            $requete->execute();
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_commandes_par_fournisseur_resultat()
    {
        $choixFournisseur = $_POST['select_fournisseur'];
        try {
            $requete = $this->bd->prepare("SELECT * FROM commander WHERE Id_fournisseur = :a");
$requete->execute(array(':a' => $choixFournisseur));
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }

        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    // ************************************** PAR DATE *********************************

    public function get_commandes_par_date()
    {
        try {
            $requete = $this->bd->prepare('SELECT Date_achat FROM commander ');
            $requete->execute();
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_commandes_par_date_resultat()
    {
        $choixDate = $_POST['select_date'];
        try {
            $requete = $this->bd->prepare("SELECT * FROM Date_achat WHERE commander = :a");
            $requete->execute(array(':a' => $choixDate));
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }

        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    // ======================================================================== ADMIN =========================================================================================

    // // ************************************** PAR ALL LIVRES ADMIN *********************************

    public function get_all_livres_admin()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM livres ORDER BY Titre_livre ASC');
            $requete->execute();
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    // // ************************************** PAR ALL LIVRES UPDATE *********************************

    // public function get_all_update_livre()
    // {
    //     try {
    //         $requete = $this->bd->prepare('SELECT * FROM livres');
    //         $requete->execute();
    //     } catch (PDOException $e) {
    //         die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    //     }
    //     return $requete->fetchAll(PDO::FETCH_OBJ);
    // }




    // // ----------------------------------PARTIE FOURNISSEUR UTILISISATEUR ---------------------------------------------------------------------------------------------//
    // public function get_all_fournisseurs()
    // {
    //     try {
    //         $requete = $this->bd->prepare('SELECT * FROM fournisseurs');
    //         $requete->execute();
    //     } catch (PDOException $e) {
    //         die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    //     }
    //     return $requete->fetchAll(PDO::FETCH_OBJ);
    // }

    //    // ----------------------------------PARTIE FOURNISSEUR ADMIN ---------------------------------------------------------------------------------------------//
    //    public function get_all_fournisseurs_admin()
    //    {
    //        try {
    //            $requete = $this->bd->prepare('SELECT * FROM fournisseurs');
    //            $requete->execute();
    //        } catch (PDOException $e) {
    //            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    //        }
    //        return $requete->fetchAll(PDO::FETCH_OBJ);
    //    }




    // // ----------------------------------PARTIE COMMANDES UTILISATEURS --------------------------------------------//
    // public function get_all_commandes()
    // {
    //     try {
    //         $requete = $this->bd->prepare('SELECT * FROM commander');
    //         $requete->execute();
    //     } catch (PDOException $e) {
    //         die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    //     }
    //     return $requete->fetchAll(PDO::FETCH_OBJ);
    // }

    //     // ----------------------------------PARTIE COMMANDES ADMIN --------------------------------------------//
    //     public function get_all_commandes_admin()
    //     {
    //         try {
    //             $requete = $this->bd->prepare('SELECT * FROM commander');
    //             $requete->execute();
    //         } catch (PDOException $e) {
    //             die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    //         }
    //         return $requete->fetchAll(PDO::FETCH_OBJ);
    //     }


}
