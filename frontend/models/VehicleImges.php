<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "vehicle_imges".
 *
 * @property string $id
 * @property string $vehicle_users_id
 * @property string $vehicle_id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $car_id
 * @property string $status
 *
 * @property Vehicle $vehicle
 */
class VehicleImges extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vehicle_imges';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vehicle_users_id', 'vehicle_id'], 'required'],
            [['vehicle_users_id', 'vehicle_id', 'car_id', 'status'], 'integer'],
            [['title', 'description', 'image'], 'string', 'max' => 111]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vehicle_users_id' => 'Vehicle Users ID',
            'vehicle_id' => 'Vehicle ID',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'car_id' => 'Car ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicle()
    {
        return $this->hasOne(Vehicle::className(), ['id' => 'vehicle_id', 'users_id' => 'vehicle_users_id']);
    }
}
