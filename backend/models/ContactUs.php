<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contactus".
 *
 * @property integer $id
 * @property integer $sender_name
 * @property integer $email_address
 * @property integer $subject
 * @property integer $message
 */
class ContactUs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contactus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sender_name', 'email_address', 'subject', 'message'], 'required'],
            [['sender_name', 'email_address', 'subject', 'message'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sender_name' => 'Sender Name',
            'email_address' => 'Email Address',
            'subject' => 'Subject',
            'message' => 'Message',
        ];
    }
}
