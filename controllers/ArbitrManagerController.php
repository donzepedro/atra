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
    
    public function actionEditManager(){
        
        if(!empty(\Yii::$app->request->get('id'))){
            
            $arbitr_managers = ArbitrationManager::find()->where(['id'=>\Yii::$app->request->get('id')])->all();
            return $this->render('edit_manager',['data'=>$arbitr_managers]);
        }
      
        return $this->render('edit_manager',['error'=>'ERROR MESSAGE']);
//        return $this->redirect(['index']);
           
        
    }
    //put your code here
}
