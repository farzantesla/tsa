<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "terms_and_conditions".
 *
 * @property integer $id
 * @property string $subject
 * @property string $content
 */
class TermsAndConditions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'terms_and_conditions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject', 'content'], 'required', 'message' => 'Please enter the {attribute}.'],
            [['subject'], 'string', 'max' => 1000],
            [['content'], 'string', 'max' => 100000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subject' => 'Subject',
            'content' => 'Content',
        ];
    }
}
