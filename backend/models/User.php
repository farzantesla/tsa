<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $full_name
 * @property string $username
 * @property string $company_name
 * @property integer $phone_no
 * @property integer $business_no
 * @property string $address
 * @property string $website
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $vat
 * @property integer $status
 * @property integer $payment_status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $profile_status
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', 'username', 'company_name', 'phone_no', 'business_no', 'address', 'website', 'email', 'vat'], 'required'],
            [['phone_no', 'business_no', 'status', 'payment_status', 'created_at', 'updated_at'], 'integer'],
        //    [['profile_status'], 'string'],
            [['full_name'], 'string', 'max' => 225],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['company_name'], 'string', 'max' => 200],
            [['address'], 'string', 'max' => 222],
            [['website'], 'string', 'max' => 45],
         //   [['auth_key'], 'string', 'max' => 32],
            [['vat'], 'string', 'max' => 22]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'username' => 'Username',
            'company_name' => 'Company Name',
            'phone_no' => 'Phone No',
            'business_no' => 'Business No',
            'address' => 'Address',
            'website' => 'Website',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'vat' => 'Vat',
            'status' => 'Status',
            'payment_status' => 'Payment Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'profile_status' => 'Profile Status',
        ];
    }
}
