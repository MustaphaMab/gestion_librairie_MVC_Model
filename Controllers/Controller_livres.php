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

    public function action_all_livres()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_all_livres()];
        $this->render("all_livres",$data);

    }

    // **************************************************livres par titre ******************************************************
    public function action_livres_par_titre()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_livres_par_titre()];
        $this->render("livres_par_titre",$data);

    }
    public function action_livres_par_titre_resultat()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_livres_par_titre_resultat()];
        $this->render("livres_par_titre_resultat",$data);

    }

// ****************************************************************************************************************************
// **************************************************livres par auteur ******************************************************
    public function action_livres_par_auteur()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_livres_par_auteur()];
        $this->render("livres_par_auteur",$data);

    }
    public function action_livres_par_auteur_resultat()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_livres_par_auteur_resultat()];
        $this->render("livres_par_auteur_resultat",$data);

    }

// ****************************************************************************************************************************

// **************************************************livres par éditeur ******************************************************
public function action_livres_par_editeur()
{
    $m=Model::get_model();
    $data=['livre'=>$m->get_livres_par_editeur()];
    $this->render("livres_par_editeur",$data);

}
public function action_livres_par_editeur_resultat()
{
    $m=Model::get_model();
    $data=['livre'=>$m->get_livres_par_editeur_resultat()];
    $this->render("livres_par_editeur_resultat",$data);

}

// ****************************************************************************************************************************


}

