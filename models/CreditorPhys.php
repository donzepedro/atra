<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "creditor_phys".
 *
 * @property int $id
 * @property string $lname
 * @property string $fname
 * @property string|null $mname
 * @property int $debt_amount
 * @property int $inn
 * @property string $region
 */
class CreditorPhys extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'creditor_phys';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lname', 'fname', 'debt_amount', 'inn', 'region'], 'required'],
            [['debt_amount', 'inn'], 'integer'],
            [['lname', 'fname', 'mname', 'region'], 'string', 'max' => 20],
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
            'debt_amount' => 'Debt Amount',
            'inn' => 'Inn',
            'region' => 'Region',
        ];
    }
}
