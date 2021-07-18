<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use yii\base\Controller;
use app\models\BankruptLegal;
/**
 * Description of BankruptLegalController
 *
 * @author zepedro
 */
class BankruptLegalController extends Controller{
    
    public $layout = 'crmlayout.php';
    
    public function actionIndex(){
        $bankrupt_legal = BankruptLegal::find()->all();
        return $this->render('index',['bankrupt_legal'=>$bankrupt_legal]);
    }
    
}
