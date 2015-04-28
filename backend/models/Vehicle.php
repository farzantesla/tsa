<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "vehicle".
 *
 * @property string $id
 * @property string $users_id
 * @property string $make
 * @property string $model
 * @property string $year_2
 * @property string $transmission
 * @property string $series
 * @property string $edition
 * @property string $conditions
 * @property string $mileage
 * @property string $areo
 * @property string $ac_front
 * @property string $cruise_control
 * @property string $navigation_sys
 * @property string $power_lock
 * @property string $power_steer
 * @property string $remote_key
 * @property string $tv
 * @property string $air_bag_driver
 * @property string $air_bag_passenger
 * @property string $air_bag_side
 * @property string $alarm
 * @property string $lock_brake
 * @property string $fog_light
 * @property string $transaction_cont
 * @property string $power_windows
 * @property string $rear_windows_def
 * @property string $rear_window_wiper
 * @property string $tint_glass
 * @property string $alloy_wheels
 * @property string $sun_roof
 * @property string $third_row_seats
 * @property string $tow_package
 * @property string $bidding_price
 * @property string $garage_id
 * @property string $time_left
 * @property string $sale_status
 * @property string $status
 * @property string $reg_no
 * @property string $user_id
 * @property string $color
 * @property string $manufacture
 * @property string $type_2
 * @property string $date_reg
 * @property string $trim_color
 * @property string $doors
 * @property string $last_owner
 * @property string $engine_size
 * @property string $vin
 * @property string $mot_exp_date
 * @property string $v5_preset
 * @property string $green_slip
 * @property string $imported
 * @property string $service_history
 * @property string $fuel
 * @property string $description
 * @property string $location
 * @property string $lot_id
 *
 * @property Bidding[] $biddings
 * @property LotSale[] $lotSales
 * @property MyFav[] $myFavs
 * @property Review[] $reviews
 * @property Users $users
 * @property VehicleImges[] $vehicleImges
 */
class Vehicle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vehicle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['lot_id'], 'required'],
            [['users_id', 'lot_id'], 'integer'],
            [['year_2', 'date_reg', 'mot_exp_date', 'time_start'], 'safe'],
            [['service_history'], 'string'],
            [['make', 'model', 'transmission', 'series', 'edition', 'conditions'], 'string', 'max' => 11],
            [['mileage', 'areo', 'ac_front', 'cruise_control', 'navigation_sys', 'power_lock', 'power_steer', 'remote_key', 'tv', 'air_bag_driver', 'air_bag_passenger', 'air_bag_side', 'alarm', 'lock_brake', 'fog_light', 'transaction_cont', 'power_windows', 'rear_windows_def', 'rear_window_wiper', 'tint_glass', 'alloy_wheels', 'sun_roof', 'third_row_seats', 'tow_package', 'bidding_price', 'garage_id', 'time_start', 'time_left', 'sale_status', 'status', 'reg_no', 'user_id', 'color', 'manufacture', 'type_2', 'trim_color', 'doors', 'last_owner', 'engine_size', 'vin', 'v5_preset', 'green_slip', 'imported', 'fuel', 'description', 'location'], 'string', 'max' => 111]
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
            'make' => 'Make',
            'model' => 'Model',
            'year_2' => 'Year 2',
            'transmission' => 'Transmission',
            'series' => 'Series',
            'edition' => 'Edition',
            'conditions' => 'Conditions',
            'mileage' => 'Mileage',
            'areo' => 'Aero',
            'ac_front' => 'Ac Front',
            'cruise_control' => 'Cruise Control',
            'navigation_sys' => 'Navigation Sys',
            'power_lock' => 'Power Lock',
            'power_steer' => 'Power Steer',
            'remote_key' => 'Remote Key',
            'tv' => 'Tv',
            'air_bag_driver' => 'Air Bag Driver',
            'air_bag_passenger' => 'Air Bag Passenger',
            'air_bag_side' => 'Air Bag Side',
            'alarm' => 'Alarm',
            'lock_brake' => 'Lock Brake',
            'fog_light' => 'Fog Light',
            'transaction_cont' => 'Transaction Cont',
            'power_windows' => 'Power Windows',
            'rear_windows_def' => 'Rear Windows Def',
            'rear_window_wiper' => 'Rear Window Wiper',
            'tint_glass' => 'Tint Glass',
            'alloy_wheels' => 'Alloy Wheels',
            'sun_roof' => 'Sun Roof',
            'third_row_seats' => 'Third Row Seats',
            'tow_package' => 'Tow Package',
            'bidding_price' => 'Base Price',
            'garage_id' => 'Garage ID',
            'time_start'=> 'Auction Start Date',
            'time_left' => 'Auction End Date',
            'sale_status' => 'Sale Status',
            'status' => 'Status',
            'reg_no' => 'Reg No',
            'user_id' => 'User ID',
            'color' => 'Color',
            'manufacture' => 'Manufacture',
            'type_2' => 'Type 2',
            'date_reg' => 'Date Reg',
            'trim_color' => 'Trim Color',
            'doors' => 'Doors',
            'last_owner' => 'Last Owner',
            'engine_size' => 'Engine Size',
            'vin' => 'Vin',
            'mot_exp_date' => 'Mot Exp Date',
            'v5_preset' => 'V5 Preset',
            'green_slip' => 'Green Slip',
            'imported' => 'Imported',
            'service_history' => 'Service History',
            'fuel' => 'Fuel',
            'description' => 'Description',
            'location' => 'Location',
            'lot_id' => 'Lot ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBiddings()
    {
        return $this->hasMany(Bidding::className(), ['vehicle_id' => 'id', 'vehicle_users_id' => 'users_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLotSales()
    {
        return $this->hasMany(LotSale::className(), ['vehicle_id' => 'id', 'vehicle_users_id' => 'users_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMyFavs()
    {
        return $this->hasMany(MyFav::className(), ['vehicle_id' => 'id', 'vehicle_users_id' => 'users_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Review::className(), ['vehicle_id' => 'id', 'vehicle_users_id' => 'users_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(User::className(), ['id' => 'users_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicleImges()
    {
        return $this->hasMany(VehicleImges::className(), ['vehicle_id' => 'id', 'vehicle_users_id' => 'users_id']);
    }
}
