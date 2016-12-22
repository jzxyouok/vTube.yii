<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $comm_id
 * @property string $comm_text
 * @property string $comm_video_id
 * @property string $comm_user_id
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comm_text'], 'string'],
            [['comm_video_id'], 'string', 'max' => 10],
            [['comm_user_id'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'comm_id' => 'Comm ID',
            'comm_text' => 'Comm Text',
            'comm_video_id' => 'Comm Video ID',
            'comm_user_id' => 'Comm User ID',
        ];
    }
}
