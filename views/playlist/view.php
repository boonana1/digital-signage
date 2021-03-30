<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Playlists */

$this->title = 'Плейлист: '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'Playlists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="playlists-view col-md-12">


    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот плейлист?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name:ntext',
            'template:ntext',
            'description:ntext',
            //'thumb:ntext',
            [
                'attribute'=>'thumb',
                'value'=>$model->thumb,
                'format' => ['image',['width'=>'auto','height'=>'100']],
            ],
            'media:ntext',
            'alert:ntext',
        ],
    ]) ?>

</div>
