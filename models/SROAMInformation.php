<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SRO_AM_information".
 *
 * @property int $id
 * @property int $id_am
 * @property string $SRO_name
 * @property string $membership_start_date
 * @property string $membership_end_date
 * @property string $leave_reason
 *
 * @property ArbitrationManager $am
 */
class SROAMInformation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SRO_AM_information';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_am', 'SRO_name', 'membership_start_date', 'membership_end_date', 'leave_reason'], 'required'],
            [['id_am'], 'integer'],
            [['membership_start_date', 'membership_end_date'], 'safe'],
            [['SRO_name'], 'string', 'max' => 100],
            [['leave_reason'], 'string', 'max' => 255],
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
            'SRO_name' => 'Sro Name',
            'membership_start_date' => 'Membership Start Date',
            'membership_end_date' => 'Membership End Date',
            'leave_reason' => 'Leave Reason',
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
