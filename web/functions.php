<?php
  
    function DBdebug($data){
        foreach($data as $key){
            foreach($key as $k=>$v){
                echo '['.$k.']'.' => ';
                var_dump($v);
                echo '<br>';
            }
        echo '<hr>';
    }
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

