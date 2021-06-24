<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "foreign_language".
 *
 * @property int $id
 * @property int $id_am
 * @property string $language
 * @property string $level
 *
 * @property ArbitrationManager $am
 */
class ForeignLanguage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'foreign_language';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_am', 'language', 'level'], 'required'],
            [['id_am'], 'integer'],
            [['language'], 'string', 'max' => 50],
            [['level'], 'string', 'max' => 20],
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
            'language' => 'Language',
            'level' => 'Level',
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
