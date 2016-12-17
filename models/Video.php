<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property integer $video_id
 * @property string $video_title
 * @property string $video_description
 * @property string $video_url
 * @property integer $video_added_user_id
 * @property integer $category_id
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['video_title', 'video_description', 'video_url', 'video_added_user_id', 'category_id'], 'required'],
            [['video_added_user_id', 'category_id'], 'integer'],
            [['video_title'], 'string', 'max' => 50],
            [['video_description'], 'string', 'max' => 500],
            [['video_url'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'video_id' => 'Video ID',
            'video_title' => 'Video Title',
            'video_description' => 'Video Description',
            'video_url' => 'Video Url',
            'video_added_user_id' => 'Video Added User ID',
            'category_id' => 'Category ID',
        ];
    }
}
