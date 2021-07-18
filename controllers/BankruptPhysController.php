<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use yii\base\Controller;
use app\models\BankruptPhys;
/**
 * Description of BankruptPhysController
 *
 * @author zepedro
 */
class BankruptPhysController extends Controller{
    
    public $layout = 'crmlayout.php';
    
    public function actionIndex(){
        $bankrupt_phys = BankruptPhys::find()->all();
        return $this->render('index',['bankrupt_phys'=>$bankrupt_phys]);
    }
    
}