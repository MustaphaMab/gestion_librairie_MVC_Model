<?php

class Controller_home extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        // 
        $this->render('home');
    }

    public function action_formulaire_inscription()
    {
        $this->render('formulaire_inscription'); 
    }

    public function action_login()
    {
        $this->render('home'); 
    }




}