<?php

/* @var $this yii\web\View */
/* @var $model app\models\Channels */
/* @var $form ActiveForm */
/* @var $model app\models\Playlists */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\widgets\Pjax;


$this->title = 'Плеер | Система управления медиаэкранами';
$this->params['breadcrumbs'][] = $this->title;
?>

<!--
    Вход в плеер/админ-панель
-->
<div class="<?php switch (\app\models\Settings::findOne(1)->ftheme){
    case 0:
        echo '';
        break;

    case 1:
        echo 'light';
        break;
}?> acrylic thick startLogin" style="display: none;">
    <div class="form"  style="text-align: center; vertical-align: center;">
        <span class="glyph" style="font-size: 4em;">
            <i class="mi mi-AddRemoteDevice"></i>
        </span>
        <h2>Авторизация</h2>


            <?php
            $form = ActiveForm::begin([
                    'action' =>'/player',
                    'method' => 'get, post',
                'fieldConfig' => [
                    'template' => "<div class=\"form-group\" style=\"margin: 10px;\">{input}</div>",
                ],

            ]); ?>

            <?= $form->field($model, 'id', [ 'template' => '
                <div class="form-group" style="margin: 10px; display: flex; flex-direction: row;">
                    {input}
                    <button type="button" class="btn btn-link" data-container="body" data-toggle="popover" data-placement="right" data-content="В поле слева необходимо ввести номер канала, который указан в первом столбце списка каналов в панели администратора.">
                        <i class="material-icons">help_outline</i>
                    </button>
                </div>
            '])->textInput(array('placeholder' => 'Введите номер канала', 'class'=>'form-control text-center', 'type' => 'id', ['autofocus' => true])) ?>

            <div class="form-group">
                <?= Html::submitButton('Войти в плеер', ['class' => 'btn btn-primary ']) ?>
                <a class="btn btn-link "  href="<?= Url::to(['admin/index']); ?>">Войти в панель администратора</a>
            </div>
            <?php ActiveForm::end();?>



    </div>
</div>
</div>

<!--<nav class="navbar navbarLogin navbar-expand-lg navbar-dark bg-dark auth" style="display: none;">
    <div class="collapse navbar-collapse" id="navbarExampleDark">
          <a class="btn btn-primary btn-lg btn-block" href="#">Войти
          </a>
    </div>
  </nav>-->



