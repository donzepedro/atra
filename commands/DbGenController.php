<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;
use app\models\ArbitrationManager;
use app\models\BankruptPhys;
use app\models\BankruptLegal;
use app\models\CreditorPhys;
use app\models\CreditorLegal;
use app\models\Education;
use app\models\SROAMInformation;
use app\models\ForeignLanguage;
/**
 * Description of dbgen
 *
 * @author zepedro
 */
class DbGenController extends Controller {

    public function actionIndex()
    {
        $data_arr = array(
            "name" => "ivanov",        
            "fname" => "ivan",
            "mname" => "ivanovich",
            "birth_date" => "10.10.1985",
            "post_addr" => "186765",
            "inn"=> "123123234345423",
            "phone_number" => "7897891234",
            "job_region" => "magadan",
            "government_secret_access" => "1",
            "legal_phys" => "1",
            "SRO_AM_name" => "some name",
            "categories" => "1",
            "count_of_procedure_phys" => "8",
            "count_of_procedure_legal" => "9",
            "procedure_time_average" => "12",
            "start_date" => "20.20.2001",
            "end_date" => "20.20.2021",
            "path_to_img" => '/img/Profilepic.jpg'
        );
        for ($i = 1; $i < 10; $i++){
        
            $arb_manager = new ArbitrationManager();
            $arb_manager->lname = "ArbitrationManager";       
            $arb_manager->fname = "ArbitrationManager";
            $arb_manager->mname = "ArbitrationManager";
            $arb_manager->birth_date = "1985-10-10";
            $arb_manager->post_addr = "186765";
            $arb_manager->inn= "1231232343";
            $arb_manager->phone_number = "789789123";
            $arb_manager->job_region = "magadan";
            $arb_manager->government_secret_access = "1";
            $arb_manager->legal_phys = "1";
            $arb_manager->SRO_AM_name = "some name";
            $arb_manager->categories = "1";
            $arb_manager->count_of_procedure_phys = "8";
            $arb_manager->count_of_procedure_legal = "9";
            $arb_manager->procedure_time_average = "12";
            $arb_manager->start_date = "2001-10-10";
            $arb_manager->end_date = "2021-10-10";
            $arb_manager->path_to_img = "/img/Profilepic.jpg";
//            $arb_manager->atributes = $data_arr;
            
            $arb_manager->save();
            
            $BankruptPhys = new BankruptPhys();
            $BankruptPhys->lname = 'BankruptPhys';
            $BankruptPhys->fname = 'ivan';
            $BankruptPhys->debt_amount = 100;
            $BankruptPhys->inn = 123456789;
            $BankruptPhys->region = 'Moscow';
            $BankruptPhys->save();
            
            $CreditorPhys = new CreditorPhys();
            $CreditorPhys->lname = 'CreditorPhys';
            $CreditorPhys->fname = 'ivan';
            $CreditorPhys->debt_amount = 100;
            $CreditorPhys->inn = 123456789;
            $CreditorPhys->region = 'Moscow';
            $CreditorPhys->save();
            
            $BankruptLegal = new BankruptLegal();
            $BankruptLegal->lname = 'BankruptPhys';
            $BankruptLegal->fname = 'ivan';
            $BankruptLegal->debt_amount = 100;
            $BankruptLegal->org_name='some organization';
            $BankruptLegal->inn = 123456789;
            $BankruptLegal->region = 'Moscow';
            $BankruptLegal->save();
            
            $CreditorLegal = new CreditorLegal();
            $CreditorLegal->lname = 'CreditorPhys';
            $CreditorLegal->fname = 'ivan';
            $CreditorLegal->debt_amount = 100;
            $CreditorLegal->org_name='some organization';
            $CreditorLegal->inn = 123456789;
            $CreditorLegal->region = 'Moscow';
            $CreditorLegal->save();
//            
            $Education = new Education();
            $Education->id_am = $i;
            $Education->speciality = 'Lawer';
            $Education->start_date = '1992-01-09';
            $Education->level = 'master';
            $Education->end_date = '1996-01-07';
            $Education->institution = 'PetrSu';
            $Education->save();
            
            
            $SROAMInformation= new SROAMInformation();
            $SROAMInformation->id_am = $i;
            $SROAMInformation->SRO_name = 'Some SRO name';
            $SROAMInformation->membership_start_date = '2001-01-01';
            $SROAMInformation->membership_end_date = '2021-01-01';
            $SROAMInformation->leave_reason = 'family reasons';
            $SROAMInformation->save();
            
            $ForeignLanguage = new ForeignLanguage();
            $ForeignLanguage->id_am = $i;
            $ForeignLanguage->language = 'English';
            $ForeignLanguage->level = "Intermediate";
            $ForeignLanguage->save();
        }
        
           
 
            return  $SROAMInformation->save();
            
            
            
    }
}

