<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "channels".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $playlist_id
 *
 * @property Playlists $playlist
 */
class Channels extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'channels';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'playlist_id'], 'required'],
            [['name', 'description'], 'string'],
            [['playlist_id'], 'integer'],
            [['playlist_id'], 'exist', 'skipOnError' => true, 'targetClass' => Playlists::className(), 'targetAttribute' => ['playlist_id' => 'id']],
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
            'playlist_id' => 'Плейлист',
        ];
    }

    /**
     * Gets query for [[Playlist]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlaylist()
    {
        return $this->hasOne(Playlists::className(), ['id' => 'playlist_id']);
    }
}
