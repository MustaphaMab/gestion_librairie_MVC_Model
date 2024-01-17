<?php

class Controller_home extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {

        $this->render('home');
    }
    // formulaire de connection
    public function action_formulaire_connexion()
    {
        $this->render('formulaire_connexion');
    }

    // user connecte

    public function action_login()

    // Effectue l'authentification en utilisant le modèle

    {
        $m = Model::get_model();
        $data = ['identification' => $m->get_login()];
        $this->render("login", $data);
    }


    public function action_deconnexion()

    // Effectue l'authentification en utilisant le modèle

    {
        $m = Model::get_model();
        $data = ['identification' => $m->get_login()];
        $this->render("deconnexion");
    }
}
