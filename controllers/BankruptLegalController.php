<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use yii\web\Controller;
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
        if(\Yii::$app->request->isPost){
            $edit_bankrupt_legal = BankruptLegal::find()->where(['id'=>\Yii::$app->request->post('BankruptLegal')['id']])->one();
            $edit_bankrupt_legal->attributes = \Yii::$app->request->post('BankruptLegal');
            if(!$edit_bankrupt_legal->save()){
                throw new \yii\web\HttpException(500,'server error, data for Bankrupt legal not saved'); 
            }
            $bankrupt_legal = BankruptLegal::find()->all();
           
        }
         
        return $this->render('index',['bankrupt_legal'=>$bankrupt_legal]);
    }
    
    
    public function actionDeleteBankruptLegal(){
        
        $bankrupt_legal = BankruptLegal::findOne(\Yii::$app->request->get('id'));
        
        if(!$bankrupt_legal->delete()){
                throw new \yii\web\HttpException(500,'server error,Bankrupt legal not deleted'); 
            }
            $this->redirect('http://bankrupt/bankrupt-legal/');
//        echo "<pre>";
//        var_dump( $bankrupt_legal);
//        echo "</pre>";
//         return $this->render('index',['bankrupt_legal'=>$bankrupt_legal]);
    }
    
}
