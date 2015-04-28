<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property string $id
 * @property string $users_id
 * @property string $tiltle
 * @property string $message
 * @property string $status
 * @property string $sender
 * @property string $receiver
 * @property string $date
 *
 * @property Users $users
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['users_id'], 'required'],
            [['users_id'], 'integer'],
            [['date'], 'safe'],
            [['tiltle', 'message', 'status', 'sender', 'receiver'], 'string', 'max' => 111]
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
            'tiltle' => 'Tiltle',
            'message' => 'Message',
            'status' => 'Status',
            'sender' => 'Sender',
            'receiver' => 'Receiver',
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
}
