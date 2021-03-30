<?php

namespace app\controllers;

class PlaylistsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
