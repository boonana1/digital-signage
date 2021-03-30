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

class SiteController extends Controller
{



    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index', [
            'model' => $model,
        ]);

    }

    public function actionPlayer()
    {

        if(\Yii::$app->request->isAjax){

            $model = Channels::findOne($_POST['Channel']);

            $playlist = Playlists::findOne($model->playlist_id);

            return '({"id" : '.$playlist->id.', "media" : "'.$playlist->media.'", "alert" : "'.$playlist->alert.'", "template" : '.$playlist->template.'})';

            return $this->render('player', ['media' => $playlist->id, 'channel' => $model->id]);
        }
        if (isset($_POST['Channels']['id'])) {
            $model = Channels::findOne($_POST['Channels']['id']);

            $playlist = Playlists::findOne($model->playlist_id);

            if ($model != null) {

                return $this->render('player', ['media' => $playlist, 'channel' => $model->id]);
            }
        }

        return $this->redirect(['/player-auth', 'playlist' => $model->id]);
    }

    public function actionPlayerAuth()
    {
        $model = new Channels;


        if ($model->load(Yii::$app->request->post())) {

            $playlist = new Playlists;
            return $this->redirect(['/player', 'id' => $model->id]);

        }
        return $this->render('playerAuth', ['model' => $model,]);
    }

    public function actionError()
    {
        return $this->render('error', ['model' => $model,]);
    }

}
