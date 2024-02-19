<?php

namespace Controller;

use Controller\Controller;
use Controller\AccueilController;

class AccueilController extends Controller{

    public function accueilAction(){
        $this->render('accueil-view');
    }

}