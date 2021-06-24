<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "creditor_legal".
 *
 * @property int $id
 * @property string $lname
 * @property string $fname
 * @property string|null $mname
 * @property int $debt_amount
 * @property string $org_name
 * @property int $inn
 * @property string $region
 */
class CreditorLegal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'creditor_legal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lname', 'fname', 'debt_amount', 'org_name', 'inn', 'region'], 'required'],
            [['debt_amount', 'inn'], 'integer'],
            [['lname', 'fname', 'mname', 'region'], 'string', 'max' => 20],
            [['org_name'], 'string', 'max' => 100],
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
            'org_name' => 'Org Name',
            'inn' => 'Inn',
            'region' => 'Region',
        ];
    }
}
