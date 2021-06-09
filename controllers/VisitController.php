<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use yii\web\Controller;

/**
 * Description of VisitController
 *
 * @author zepedro
 */
class VisitController extends Controller{
    
    public $layout = 'nonavbar';
    
    public function actionIndex(){
        return $this->render('aboutphotograph');
    }
    //put your code here
}
