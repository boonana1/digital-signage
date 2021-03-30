<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int $author_id
 * @property int $date
 * @property int $category_id
 * @property string|null $text
 * @property string $title
 * @property string $abridgment
 * @property int $activity
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author_id', 'date', 'category_id', 'title', 'abridgment'], 'required'],
            [['author_id', 'date', 'category_id', 'activity'], 'integer'],
            [['text', 'title', 'abridgment'], 'string', 'max' => 255],
            [['title'], 'unique'],
            [['text'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Author ID',
            'date' => 'Date',
            'category_id' => 'Category ID',
            'text' => 'Text',
            'title' => 'Title',
            'abridgment' => 'Abridgment',
            'activity' => 'Activity',
        ];
    }
}
