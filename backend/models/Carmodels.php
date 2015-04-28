<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "car_models".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $car_make_id
 *
 * @property Make $carMake
 */
class Carmodels extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car_models';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'car_make_id'], 'required'],
            [['car_make_id'], 'integer'],
            [['title', 'description'], 'string', 'max' => 11],
            [['car_make_id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'car_make_id' => 'Car Make ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarMake()
    {
        return $this->hasOne(Make::className(), ['id' => 'car_make_id']);
    }
}
