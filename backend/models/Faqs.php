<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "faqs".
 *
 * @property integer $id
 * @property string $question
 * @property string $answer
 * @property integer $status
 * @property string $datetime
 */
class Faqs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faqs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question', 'answer', 'status'], 'required', 'message' => 'Please enter the {attribute}.'],
            
            [['question', 'answer'], 'string', 'max' => 5000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question' => 'Question',
            'answer' => 'Answer',
            'status' => 'Status',
            //'datetime' => 'Datetime',
        ];
    }
}
