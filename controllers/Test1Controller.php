<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use yii\web\Controller;

use app\models\LoginForm;
/**
 * Description of Test1Controller
 *
 * @author zepedro
 */
class Test1Controller extends Controller{
    public $layout = 'nonavbar';
    
    public function actionIndex(){
        
        $str = 'Hello world';
        $get = \Yii::$app->request->post();
        if(!empty($get)){
            echo 'asdasd';
            die;
        }
        $model = new LoginForm();
        
        return $this->render('index', compact('model'));
    }
    //put your code here
}
