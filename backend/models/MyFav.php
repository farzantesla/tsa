<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "my_fav".
 *
 * @property string $id
 * @property string $users_id
 * @property string $vehicle_users_id
 * @property string $vehicle_id
 * @property string $user_id
 * @property string $car_id
 * @property string $status
 *
 * @property Users $users
 * @property Vehicle $vehicle
 */
class MyFav extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'my_fav';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['users_id', 'vehicle_users_id', 'vehicle_id'], 'required'],
            [['users_id', 'vehicle_users_id', 'vehicle_id', 'user_id', 'car_id', 'status'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'users_id' => 'Users ID',
            'vehicle_users_id' => 'Vehicle Users ID',
            'vehicle_id' => 'Vehicle ID',
            'user_id' => 'User ID',
            'car_id' => 'Car ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['id' => 'users_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicle()
    {
        return $this->hasOne(Vehicle::className(), ['id' => 'vehicle_id', 'users_id' => 'vehicle_users_id']);
    }
}
