<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Playlists */

$this->title = 'Создание плейлиста';
$this->params['breadcrumbs'][] = ['label' => 'Playlists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>