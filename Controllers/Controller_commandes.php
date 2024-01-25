<?php

class Controller_commandes extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }


    // ******************************* ALL COMMANDES ******************************************
   
    public function action_all_commandes()
    {
        $m=Model::get_model();
        $data=['commander'=>$m->get_all_commandes()];
        $this->render("all_commandes",$data);

    }

// ======================================================= PAR EDITEUR ===================================================================================


    public function action_commandes_par_editeur()
    {
        $m=Model::get_model();
        $data=['commander'=>$m->get_commandes_par_editeur()];
        $this->render("commandes_par_editeur",$data);

    }

    public function action_commandes_par_editeur_resultat()
    {
        $m=Model::get_model();
        $data=['commander'=>$m->get_commandes_par_editeur_resultat()];
        $this->render("commandes_par_editeur_resultat",$data);

    }

// ************************************************** PAR FOURNISSEUR ******************************************************
public function action_commandes_par_fournisseur()
{
    $m=Model::get_model();
    $data=['commander'=>$m->get_commandes_par_fournisseur()];
    $this->render("commandes_par_fournisseur",$data);

}
public function action_commandes_par_fournisseur_resultat()
{
    $m=Model::get_model();
    $data=['commander'=>$m->get_commandes_par_fournisseur_resultat()];
    $this->render("commandes_par_fournisseur_resultat",$data);

}

// ************************************************** PAR DATE  ******************************************************
public function action_commandes_par_date()
{
    $m=Model::get_model();
    $data=['commander'=>$m->get_commandes_par_date()];
    $this->render("commandes_par_date",$data);

}
public function action_commandes_par_date_resultat()
{
    $m=Model::get_model();
    $data=['commander'=>$m->get_commandes_par_date_resultat()];
    $this->render("commandes_par_date_resultat",$data);

}

    
}