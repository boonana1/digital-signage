<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Playlists;

/* @var $this yii\web\View */
/* @var $model app\models\Channels */
/* @var $model app\models\Playlists */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="channels-form">

    <?php $form = ActiveForm::begin();
    $playlists = Playlists::find()->orderBy('id')->all();
    $items = ArrayHelper::map($playlists,'id','name');

    ?>

    <div class="form-group">
    <?= $form->field($model, 'name')->textarea(['rows' => 3])->label('Введите название канала') ?>
    </div>

        <div class="form-group">
    <?= $form->field($model, 'description')->textarea(['rows' => 3])->label('Введите описание канала') ?>
        </div>

            <div class="form-group">
    <?= $form->field($model, 'playlist_id')->dropDownList($items, ['class'=>'form-control selectpicker'])->label('Выберите плейлист') ?>
            </div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
