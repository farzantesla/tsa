<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "content".
 *
 * @property string $id
 * @property string $title
 * @property string $content
 * @property string $status
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['title'], 'string', 'max' => 2222],
            [['content'], 'string', 'max' => 2222]
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
            'content' => 'Content',
            'status' => 'Status',
        ];
    }
}
