<?php

class Controller_livres extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

// ======================================================================== UTILISATEUR =========================================================================================

// ************************************************** Tout les livres ******************************************************

    public function action_all_livres()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_all_livres()];
        $this->render("all_livres",$data);

    }

    // ************************************************** LIVRES PAR TITRE ******************************************************

    public function action_all_livres_par_titre()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_all_livres_par_titre()];
        $this->render("all_livres_par_titre",$data);

    }

     // ************************************************** LIVRES PAR TITRE PAR RESULTAT ******************************************************

     public function action_all_livres_par_titre_resultat()
     {
         $m=Model::get_model();
         $data=['livre'=>$m->get_all_livres_par_titre_resultat()];
         $this->render("all_livres_par_titre_resultat",$data);
 
     }

         // ************************************************** LIVRES PAR AUTEUR ******************************************************

    public function action_livres_par_auteur()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_livres_par_auteur()];
        $this->render("livres_par_auteur",$data);

    }

    // ************************************************** LIVRES PAR AUTEUR RESULTAT ******************************************************

    public function action_livres_par_auteur_resultat()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_livres_par_auteur_resultat()];
        $this->render("livres_par_auteur_resultat",$data);

    }
         // ************************************************** LIVRES PAR AUTEUR ******************************************************

    public function action_livres_par_editeur()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_livres_par_editeur()];
        $this->render("livres_par_editeur",$data);

    }

        // ************************************************** LIVRES PAR EDITEUR RESULTAT ******************************************************

        public function action_livres_par_editeur_resultat()
        {
            $m=Model::get_model();
            $data=['livre'=>$m->get_livres_par_editeur_resultat()];
            $this->render("livres_par_editeur_resultat",$data);
    
        }
//====================================================================== FOURNISSEUR ==============================================================================

     // ************************************************** FOURNISSEUR PAR RAISON SOCIALE ******************************************************

     public function action_fournisseurs_par_raison_sociale()
     {
         $m=Model::get_model();
         $data=['fournisseurs'=>$m->get_fournisseurs_par_raison_sociale()];
         $this->render("fournisseurs_par_raison_sociale",$data);
 
     }

     
 // ************************************************** FOURNISSEUR PAR RAISON SOCIALE RESULTAT ******************************************************

 public function action_fournisseurs_par_raison_sociale_resultat()
 {
     $m=Model::get_model();
     $data=['fournisseurs'=>$m->get_fournisseurs_par_raison_sociale_resultat()];
     $this->render("fournisseurs_par_raison_sociale_resultat",$data);

 }

 // ======================================================================== ADMIN =========================================================================================



    // // ************************************************** Tout les livres ADMIN ******************************************************

    public function action_all_livres_admin()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_all_livres_admin()];
        $this->render("all_livres_admin",$data);

    }

    // // ************************************************** Tout les livres UPDATE ******************************************************

    // public function action_all_update_livre()
    // {
    //     $m=Model::get_model();
    //     $data=['livre'=>$m->get_all_update_livre()];
    //     $this->render("all_update_livre",$data);

    // }
    }