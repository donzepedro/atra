<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace app\controllers;
use yii\web\Controller;
use app\models\UploadForm;
/**
 * Description of imguploadController
 *
 * @author zepedro
 */
class ImguploadController extends Controller {
    
    
    
    public $layout = 'crmlayout.php';
    public function actionIndex(){
        
           $model = new UploadForm();

        if (\Yii::$app->request->isPost) {
            $model->imageFile = \yii\web\UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                // file is uploaded successfully
//                var_dump(\Yii::$app->request->post());
//                die;
                return;
            }
        }

        return $this->render('index', ['model' => $model]);
        
    }
    
    //put your code here
}
