<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Вход';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--
    Вход в админ-панель
-->

<div class="<?php switch (\app\models\Settings::findOne(1)->ftheme){
    case 0:
        echo '';
        break;

    case 1:
        echo 'light';
        break;
}?> acrylic thick login">
    <div class="form"  style="text-align: center; vertical-align: center;">
                <span class="glyph" style="font-size: 4em;">
                        <i class="mi mi-AddFriend"></i>
                </span>
        <h2>Вход</h2>
        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'fieldConfig' => [
                'template' => "{input}\n<div style=\"color: #E81123;\">{error}</div>",
                'labelOptions' => ['class' => 'col-lg-1 control-label'],
            ],
        ]); ?>

        <?= $form->field($model, 'username')->textInput(array('placeholder' => 'Логин', 'class'=>'form-control text-center', ['autofocus' => true])); ?>

        <?= $form->field($model, 'password')->passwordInput(array('placeholder' => 'Пароль', 'class'=>'form-control text-center')); ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div>{input} {label}</div>\n<div style=\"color: #E81123;\">{error}</div>",
        ])->label('Запомнить меня'); ?>

        <!--<div class="form-group" style="margin: 10px;">
          <input type="email" class="form-control" placeholder="Логин" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group" style="margin: 10px;">
          <input type="password" class="form-control" placeholder="Пароль" id="exampleInputPassword1">
        </div>-->
        <a class="btn btn-link back" href="<?= Url::to(['/']); ?>">← Назад</a>
        <!--<a style="margin: 10px;" class="btn btn-primary" href="<?= Url::to(['admin/channels']); ?>">Войти</a>-->

        <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']); ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>

