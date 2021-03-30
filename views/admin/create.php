<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Channels */

$this->title = 'Создание канала';
$this->params['breadcrumbs'][] = ['label' => 'Channels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="col-xl-6 col-md-10 ml-auto mr-auto">
    <div class="card">

        <div class="channels-create">
            <div class="card-header card-header-danger">
            <h2><?= Html::encode($this->title) ?></h2>
            </div>

            <div class="card-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
            </div>

        </div>

    </div>
</div>





