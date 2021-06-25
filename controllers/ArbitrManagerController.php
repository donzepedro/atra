<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use yii\web\Controller;
use app\models\ArbitrationManager;

/**
 * Description of ArbitrManagerController
 *
 * @author zepedro
 */
class ArbitrManagerController extends Controller {
    
    public $layout = 'crmlayout.php';
    
    public function actionIndex(){
        
        $arbitr_managers = ArbitrationManager::find()->all();
        return $this->render('index',['data'=>$arbitr_managers]);
    }
    //put your code here
}
