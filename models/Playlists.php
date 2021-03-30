<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "playlists".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $template
 * @property string $thumb
 * @property string $media
 * @property string $alert
 *
 * @property Channels[] $channels
 */
class Playlists extends \yii\db\ActiveRecord
{

    public $image;
    public $video;
    public $del_img;
    public $del_video;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'playlists';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'template', 'thumb', 'media'], 'required'],
            [['name', 'description', 'thumb', 'media', 'alert'], 'string'],
            [['template'], 'integer'],
            [['image'], 'file', 'extensions' => 'png, jpg, gif'],
            [['video'], 'file', 'extensions' => 'mp4, avi'],
            [['del_img'], 'boolean'],
            [['del_video'], 'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Идентификатор',
            'name' => 'Название',
            'description' => 'Описание',
            'template' => 'Шаблон',
            'thumb' => 'Thumb',
            'media' => 'Медиафайл',
            'alert' => 'Текст объявлений',
        ];
    }

    /**
     * Gets query for [[Channels]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChannels()
    {
        return $this->hasMany(Channels::className(), ['playlist_id' => 'id']);
    }
}
