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

    public function action_all_commandes()
    {
        $m=Model::get_model();
        $data=['commander'=>$m->get_all_commandes()];
        $this->render("all_commandes",$data);

    }

    public function action_all_commandes_update()
    {
        $m=Model::get_model();
        $data=['commander'=>$m->get_all_commandes()];
        $this->render("all_commandes_update",$data);

    }



    
}