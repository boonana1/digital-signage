<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "settings".
 *
 * @property string $front-background
 * @property int $smini
 * @property int $ftheme
 */
class Settings extends \yii\db\ActiveRecord
{

    public $image;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            [['fbackground'], 'string'],
            [['smini', 'ftheme'], 'integer'],
            [['image'], 'file', 'extensions' => 'png, jpg, gif'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fbackground' => 'Фон плеера',
            'smini' => 'Минимизированное меню панели администратора',
            'ftheme' => 'Тема плеера',
        ];
    }


}
