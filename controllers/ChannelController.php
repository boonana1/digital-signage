<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Playlists;
use app\models\Channels;

class ChannelController extends Controller
{

    public function actionDelete()
    {

        if (Yii::$app->user->isGuest) {
            return $this->redirect('../admin/login');
        }

        $id = $_GET['id'];

        $channel = Channels::findOne($id);
        if ($channel->delete()) {
            return $this->redirect(['admin/channels']);
        }

    }

}
