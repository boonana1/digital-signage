<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Channels */
/* @var $form ActiveForm */
/* @var $model app\models\Playlists */
/* @var $model app\models\LoginForm */

$this->title = 'Система управления медиаэкранами';
$this->params['breadcrumbs'][] = $this->title;
?>


<!--
    Титульный лист
-->
<div class="startTitle">
    <div class="<?php switch (\app\models\Settings::findOne(1)->ftheme){
        case 0:
            echo '';
            break;

        case 1:
            echo 'light';
            break;
    }?> acrylic thick dropshadow depth-2">
        <div class="container">
            <div class="row" style="text-align: center;">
                <h2 style="margin: 15px auto;">Веб-ориентированная система работы с медиаэкранами</h2>
            </div>
            <hr>
            <div class="row">
                <p style="text-align: justify;">Мы рады приветствовать вас в веб-ориентированной системе управления медиаэкранами.<br>
                    Эта система должна помочь вам в управлении отображением информации на телевизорах.<br>
                    Она включает в себя: панель администратора для управления отображением информации, плеер.</p>
            </div>
            <div class="row">
                <div class="col" style="display: flex; justify-content: center; align-items: center; line-height: 1;">
                    <span class="glyph" style="font-size: 4em; font-weight: 300;">
                        <i class="mi mi-AddSurfaceHub"></i>
                      </span>
                </div>
                <div class="col" style="text-align: justify;">
                    <p>
                        Разработчик: студент группы 15-ОИ <br>
                        Лопатин Дмитирй Юрьевич<br>
                        Специальность: 09.02.05<br>
                        «Прикладная информатика
                        (по отраслям)»<br>
                        ГБПОУ ПКК «Оникс»
                    </p>
                </div>
            </div>
            <div class="row">

                <?= Html::a('Далее', ['player-auth'], ['class' => 'btn btn-primary titleButton']) ?>
            </div>
            <div class="row">
                <p style="margin: 15px auto;">Пермь, 2020</p>
            </div>
        </div>
    </div>
</div>
<!--
     Конец титульного листа
 -->


