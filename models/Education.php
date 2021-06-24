<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "education".
 *
 * @property int $id
 * @property int $id_am
 * @property string $speciality
 * @property string $level
 * @property string $start_date
 * @property string|null $end_date
 * @property string $institution
 *
 * @property ArbitrationManager $am
 */
class Education extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_am', 'speciality', 'level', 'start_date', 'institution'], 'required'],
            [['id_am'], 'integer'],
            [['start_date', 'end_date'], 'safe'],
            [['speciality', 'institution'], 'string', 'max' => 100],
            [['level'], 'string', 'max' => 30],
            [['id_am'], 'exist', 'skipOnError' => true, 'targetClass' => ArbitrationManager::className(), 'targetAttribute' => ['id_am' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_am' => 'Id Am',
            'speciality' => 'Speciality',
            'level' => 'Level',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'institution' => 'Institution',
        ];
    }

    /**
     * Gets query for [[Am]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAm()
    {
        return $this->hasOne(ArbitrationManager::className(), ['id' => 'id_am']);
    }
}
