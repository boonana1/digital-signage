<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Playlists */

$this->title = 'Редактирование плейлиста: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Playlists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
