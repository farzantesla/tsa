<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bidding".
 *
 * @property string $id
 * @property string $vehicle_users_id
 * @property string $vehicle_id
 * @property string $bidder_id
 * @property string $user_id
 * @property string $car_id
 * @property string $bid_price
 * @property string $date_time
 * @property string $description
 * @property string $status
 *
 * @property Vehicle $vehicle
 */
class Bidding extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bidding';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vehicle_users_id', 'vehicle_id', 'bidder_id'], 'required'],
            [['vehicle_users_id', 'vehicle_id', 'bidder_id', 'user_id', 'car_id', 'bid_price', 'status'], 'integer'],
            [['date_time'], 'safe'],
            [['description'], 'string']
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
            'bidder_id' => 'Bidder ID',
            'user_id' => 'User ID',
            'car_id' => 'Car ID',
            'bid_price' => 'Bid Price',
            'date_time' => 'Date Time',
            'description' => 'Description',
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
