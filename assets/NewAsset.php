<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\assets;

use yii\web\AssetBundle;
/**
 * Description of NewAsset
 *
 * @author zepedro
 */
class NewAsset extends AssetBundle{
    public $sourcePath = '@app/web/css';
 
    public $css = [
        'css/CommonStyles',
    ];
    public $js = [
        'js/bootstrap.js',
    ];
    
    public $depends = [];
}