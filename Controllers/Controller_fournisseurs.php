<?php

class Controller_fournisseurs extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

// ------------------------------------------------- FOURNISSEURS ----------------------------------------------------------

// ******************************* ALL FOURNISSEURS ******************************************
    public function action_all_fournisseurs()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_all_fournisseurs()];
        $this->render("all_fournisseurs",$data);

    }

// ************************************************** PAR RAISON SOCIALE ******************************************************
public function action_fournisseurs_par_raison_sociale()
{
    $m=Model::get_model();
    $data=['fournisseurs'=>$m->get_fournisseurs_par_raison_sociale()];
    $this->render("fournisseurs_par_raison_sociale",$data);

}
public function action_fournisseurs_par_raison_sociale_resultat()
{
    $m=Model::get_model();
    $data=['fournisseurs'=>$m->get_fournisseurs_par_raison_sociale_resultat()];
    $this->render("fournisseurs_par_raison_sociale_resultat",$data);

}


// ************************************************** PAR LOCALITE ******************************************************
public function action_fournisseurs_par_localite()
{
    $m=Model::get_model();
    $data=['fournisseurs'=>$m->get_fournisseurs_par_localite()];
    $this->render("fournisseurs_par_localite",$data);

}
public function action_fournisseurs_par_localite_resultat()
{
    $m=Model::get_model();
    $data=['fournisseurs'=>$m->get_fournisseurs_par_localite_resultat()];
    $this->render("fournisseurs_par_localite_resultat",$data);

}


// ************************************************** PAR PAYS ******************************************************
public function action_fournisseurs_par_pays()
{
    $m=Model::get_model();
    $data=['fournisseurs'=>$m->get_fournisseurs_par_pays()];
    $this->render("fournisseurs_par_pays",$data);

}
public function action_fournisseurs_par_pays_resultat()
{
    $m=Model::get_model();
    $data=['fournisseurs'=>$m->get_fournisseurs_par_pays_resultat()];
    $this->render("fournisseurs_par_pays_resultat",$data);

}
// ****************************************************************************************************************************

}