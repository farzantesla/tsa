<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "lot_sale".
 *
 * @property string $id
 * @property string $vehicle_users_id
 * @property string $vehicle_id
 * @property string $lot_number
 * @property string $lot_price
 * @property string $ending_date
 * @property string $status
 * @property string $sales_status
 *
 * @property Vehicle $vehicle
 */
class LotSale extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lot_sale';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vehicle_users_id', 'vehicle_id'], 'required'],
            [['vehicle_users_id', 'vehicle_id', 'lot_number', 'lot_price', 'status', 'sales_status'], 'integer'],
            [['ending_date'], 'safe']
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
            'lot_number' => 'Lot Number',
            'lot_price' => 'Lot Price',
            'ending_date' => 'Ending Date',
            'status' => 'Status',
            'sales_status' => 'Sales Status',
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
