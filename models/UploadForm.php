<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
           [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg','maxSize'=>5000],
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
