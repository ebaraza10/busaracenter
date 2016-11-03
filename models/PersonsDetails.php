<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_persons_details".
 *
 * @property integer $id
 * @property string $name
 * @property integer $age
 * @property string $phone_number
 */
class PersonsDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_persons_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'age', 'phone_number'], 'required'],
            [['age'], 'integer','min'=>1,'max'=>200],
            [['name'], 'string', 'max' => 100],
            [['phone_number'], 'phone', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'age' => 'Age',
            'phone_number' => 'Phone Number',
        ];
    }
}
