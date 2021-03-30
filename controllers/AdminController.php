<?php

namespace app\controllers;

use Yii;
use app\models\Channels;
use app\models\ChannelsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Response;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Playlists;
use app\models\Settings;
use yii\web\UploadedFile;

/**
 * AdminController implements the CRUD actions for Channels model.
 */
class AdminController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['get', 'POST'],
                    'logout' => ['get', 'post'],
                ],
            ],
        ];
    }




    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionChannels($playlist_id = NULL, $id = NULL)
    {
        $channels = Channels::find()->orderBy('id')->all();
        $playlists = Playlists::find()->orderBy('id')->all();

        if (Yii::$app->user->isGuest) {
            return $this->redirect('login');
        }

        $model = new Channels;
        $playlist = new Playlists;

        $this->layout = "admin";
        return $this->render('channels', ['channels' => $channels, 'playlists' => $playlists,]);
    }

    public function actionChangePlaylist($playlist_id, $id)
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('login');
        }

        $model = Channels::findOne($id);

        $playlist = Playlists::findOne($playlist_id);

        $model->playlist_id = $playlist->id;
        $model->save();

        if ($model != null) {
            //var_dump($model->playlist_id);
            return $this->redirect('channels');
        }

    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionIndex()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect('channels');
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('channels');
        }

        $model->password = '';
        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    /**
     * Displays a single Channels model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('login');
        }
        $this->layout = "admin";

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Channels model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('login');
        }
        $this->layout = "admin";
        $model = new Channels();


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Channels model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('login');
        }
        $this->layout = "admin";

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Channels model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('login');
        }
        $this->layout = "admin";

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Channels model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Channels the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('login');
        }


        if (($model = Channels::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }





    public function actionPlaylists()
    {

// получаем все строки из таблицы "country" и сортируем их по "name"
        $channels = Channels::find()->orderBy('name')->all();
        $playlists = Playlists::find()->orderBy('id')->all();


        if (Yii::$app->user->isGuest) {
            return $this->redirect('login');
        }
        $this->layout = "admin";
        return $this->render('playlists', ['playlists' => $playlists, 'channels' => $channels,]);
    }


    public function actionMedia()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('login');
        }
        $this->layout = "admin";
        return $this->render('media');
    }


    public function actionSettings()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('login');
        }
        $this->layout = "admin";

        $model = new Settings();
        $settings = Settings::findOne(1);
        $current_image = $settings->fbackground;

        if ($settings->load(Yii::$app->request->post())) {
            $image = UploadedFile::getInstance($settings, 'image');
            if ($image && $image->tempName) {
                $settings->image = $image;
                if ($settings->validate(['image'])) {


                    $dir = Yii::getAlias('media/');
                    $imageName = 'player-background' . '.' . $settings->image->extension;
                    $settings->image->saveAs($dir . $imageName);
                    $settings->image = $imageName; // без этого ошибка
                    $settings->fbackground = '/'.$dir . $imageName;

                }
            }

            if ($settings->save()) {
                return $this->redirect(['settings']);
            }
        }


        return $this->render('settings', ['model' => $model, 'settings' => $settings]);
    }


    public function actionHelp()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('login');
        }
        $this->layout = "admin";
        return $this->render('help');
    }

    public function actionCreatePlaylist()
    {
        $this->layout = "admin";
        return $this->render('create-playlist');
    }

    public function actionDeleteChannel()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('login');
        }
        $this->layout = "admin";

        return $this->goBack();
    }

    public function actionDelimg ($name)
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('login');
        }

        if(file_exists(Yii::getAlias('@webroot'.'/media/'.$name)))
        {
            //удаляем файл
            unlink(Yii::getAlias('@webroot'.'/media/'.$name));
        }

        $this->layout = "admin";
        return $this->redirect('media');
    }


}

