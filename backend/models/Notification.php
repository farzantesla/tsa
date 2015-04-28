<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "notification".
 *
 * @property string $id
 * @property string $users_id
 * @property string $message
 * @property string $sender
 * @property string $date
 *
 * @property Users $users
 */
class Notification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notification';
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
            [['message', 'sender'], 'string', 'max' => 111]
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
            'message' => 'Message',
            'sender' => 'Sender',
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
