<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "banner".
 *
 * @property integer $id
 * @property string $image
 * @property string $text
 * @property string $url
 * @property integer $order
 * @property string $status
 */
class Banner extends \yii\db\ActiveRecord
{
    
    public $image;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image'], 'file'],
//            [['id'], 'required'],
            [['id', 'order'], 'integer'],
            [['status'], 'string'],
            [['text'], 'string', 'max' => 500],
            [['url'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'text' => 'Text',
            'url' => 'Url',
            'order' => 'Order',
            'status' => 'Status',
        ];
    }
}
