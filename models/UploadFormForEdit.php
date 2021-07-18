<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;
/**
 * Description of UploadFormForEdit
 *
 * @author zepedro
 */
class UploadFormForEdit extends Model{
    
    public $imageFile;

    public function rules()
    {
        return [
           [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg','maxSize'=>10000],
        ];
    }
//    '../web/img/managers_profile_img/'
    public function upload($path)
    {
        $this->imageFile->name = 'profileimg' . '.' .$this->imageFile->extension;
        if ($this->validate()) {
            $this->imageFile->saveAs($path . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}

    //put your code here

