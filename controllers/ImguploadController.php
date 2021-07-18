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
            $path = '../web/img/managers_profile_img/13/';
            $file_name = 'myfile';
           $model = new UploadForm();
//           var_dump(file_exists('../web/img/managers_profile_img'));
           
        if (\Yii::$app->request->isPost) {
//            $file_object = \yii\web\UploadedFile::getInstance($model, 'imageFile');
//            $file_object->name = 'my_file.png';
           
            if(!file_exists($path)){
               mkdir($path);
           }
          
            $model->imageFile =\yii\web\UploadedFile::getInstance($model, 'imageFile');
            
            if ($model->upload($path)) {
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
