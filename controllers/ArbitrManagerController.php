<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use yii\web\Controller;
use app\models\ArbitrationManager;
use app\models\ForeignLanguage;
use app\models\Education;

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
//            if(!empty(\Yii::$app->request->post())){
//                echo "<pre>";
//                var_dump(\Yii::$app->request->post());
//                echo "</pre>";
//            }
            
            $model = new ArbitrationManager();
            $arbitr_managers = ArbitrationManager::find()->where(['id'=>\Yii::$app->request->get('id')])->one();
            $education = Education::find()->where(['id_am'=>\Yii::$app->request->get('id')])->one();
            $foreign_language = ForeignLanguage::find()->where(['id_am'=>\Yii::$app->request->get('id')])->one();
            return $this->render('edit_manager',['model'=>$model,'foreign_language'=>$foreign_language,'education'=>$education, 'arbitr_managers'=>$arbitr_managers]);
        
            
        }
      
        return $this->render('edit_manager',['error'=>'ERROR MESSAGE']);
    }
    
    public function actionDeleteManager(){
        $arbitr_managers = ArbitrationManager::findOne(\Yii::$app->request->get('id'));
        try{
            $arbitr_managers->delete();
        } catch (ErrorException $e){
            \Yii::warning('some problem durinng deleting');
        }
       $this->redirect('/arbitr-manager/index?pg=5&del=yes');
        
    }
    //put your code here
}
