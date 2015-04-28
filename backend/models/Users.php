<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string $id
 * @property string $company_name
 * @property string $full_name
 * @property string $phone_no
 * @property string $address
 * @property string $website
 * @property string $vat
 * @property string $business_no
 * @property string $email
 * @property string $password_2
 * @property string $status
 * @property string $payment_status
 *
 * @property Bidding[] $biddings
 * @property Messages[] $messages
 * @property MyFav[] $myFavs
 * @property Notification[] $notifications
 * @property Review[] $reviews
 * @property Vehicle[] $vehicles
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone_no', 'business_no', 'status', 'payment_status'], 'integer'],
            [['company_name'], 'string', 'max' => 255],
            [['full_name'], 'string', 'max' => 225],
            [['address', 'email'], 'string', 'max' => 222],
            [['website'], 'string', 'max' => 45],
            [['vat', 'password_2'], 'string', 'max' => 22]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Company Name',
            'full_name' => 'Full Name',
            'phone_no' => 'Phone No',
            'address' => 'Address',
            'website' => 'Website',
            'vat' => 'Vat',
            'business_no' => 'Business No',
            'email' => 'Email',
            'password_2' => 'Password 2',
            'status' => 'Status',
            'payment_status' => 'Payment Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBiddings()
    {
        return $this->hasMany(Bidding::className(), ['users_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMessages()
    {
        return $this->hasMany(Messages::className(), ['users_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMyFavs()
    {
        return $this->hasMany(MyFav::className(), ['users_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotifications()
    {
        return $this->hasMany(Notification::className(), ['users_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Review::className(), ['users_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicles()
    {
        return $this->hasMany(Vehicle::className(), ['users_id' => 'id']);
    }
}
