<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "make".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $status
 */
class Make extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'make';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'status'], 'required'],
            [['title', 'description', 'status'], 'string', 'max' => 11]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'status' => 'Status',
        ];
    }
}
