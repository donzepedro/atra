<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "arbitration_manager".
 *
 * @property int $id
 * @property string $lname
 * @property string $fname
 * @property string|null $mname
 * @property string|null $birth_date
 * @property string|null $post_addr
 * @property int|null $inn
 * @property int|null $phone_number
 * @property string|null $job_region
 * @property int|null $government_secret_access
 * @property int|null $legal_phys 0-phys/1-legal
 * @property string $SRO_AM_name
 * @property int $categories At this column user have to choose what categories he will be accept legal or physical
 * @property int $count_of_procedure_phys
 * @property int $count_of_procedure_legal
 * @property float $procedure_time_average procedure_time_average months
 * @property string $start_date
 * @property string|null $end_date
 *
 * @property SROAMInformation[] $sROAMInformations
 * @property Education[] $educations
 * @property ForeignLanguage[] $foreignLanguages
 */
class ArbitrationManager extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
     public $imageFile;
     
    public static function tableName()
    {
        return 'arbitration_manager';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lname', 'fname', 'SRO_AM_name', 'categories', 'count_of_procedure_phys', 'count_of_procedure_legal', 'procedure_time_average', 'start_date'], 'required'],
            [['birth_date', 'start_date', 'end_date'], 'safe'],
            [['inn', 'phone_number', 'government_secret_access', 'legal_phys', 'categories', 'count_of_procedure_phys', 'count_of_procedure_legal'], 'integer'],
            [['procedure_time_average'], 'number'],
            [['lname', 'fname', 'mname'], 'string', 'max' => 20],
            [['post_addr'], 'string', 'max' => 255],
            [['job_region'], 'string', 'max' => 50],
            [['SRO_AM_name'], 'string', 'max' => 100],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg','maxSize'=>500],
            
           
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lname' => 'Lname',
            'fname' => 'Fname',
            'mname' => 'Mname',
            'birth_date' => 'Birth Date',
            'post_addr' => 'Post Addr',
            'inn' => 'Inn',
            'phone_number' => 'Phone Number',
            'job_region' => 'Job Region',
            'government_secret_access' => 'Government Secret Access',
            'legal_phys' => 'Legal Phys',
            'SRO_AM_name' => 'Sro Am Name',
            'categories' => 'Categories',
            'count_of_procedure_phys' => 'Count Of Procedure Phys',
            'count_of_procedure_legal' => 'Count Of Procedure Legal',
            'procedure_time_average' => 'Procedure Time Average',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
        ];
    }

    /**
     * Gets query for [[SROAMInformations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSROAMInformations()
    {
        return $this->hasMany(SROAMInformation::className(), ['id_am' => 'id']);
    }

    /**
     * Gets query for [[Educations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEducations()
    {
        return $this->hasMany(Education::className(), ['id_am' => 'id']);
    }

    /**
     * Gets query for [[ForeignLanguages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getForeignLanguages()
    {
        return $this->hasMany(ForeignLanguage::className(), ['id_am' => 'id']);
    }
    public function upload()
    {
        if ($this->imageFile->saveAs('../web/img/' . $this->imageFile->baseName . '.' . $this->imageFile->extension)) {
            return true;
        } else {
            return false;
        }
    }
    
    
}   