<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "review".
 *
 * @property string $id
 * @property string $users_id
 * @property string $vehicle_users_id
 * @property string $vehicle_id
 * @property string $car_id
 * @property string $user_id
 * @property string $comments
 * @property string $rating
 * @property string $date
 *
 * @property Users $users
 * @property Vehicle $vehicle
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'review';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['users_id', 'vehicle_users_id', 'vehicle_id'], 'required'],
            [['users_id', 'vehicle_users_id', 'vehicle_id', 'car_id', 'user_id', 'rating'], 'integer'],
            [['comments'], 'string'],
            [['date'], 'safe']
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
            'car_id' => 'Car ID',
            'user_id' => 'User ID',
            'comments' => 'Comments',
            'rating' => 'Rating',
            'date' => 'Date',
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
