<?php

namespace app\controllers;

use Yii;
use app\models\Playlists;
use app\models\PlaylistsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PlaylistController implements the CRUD actions for Playlists model.
 */
class PlaylistController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['get', 'POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Playlists models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('/admin/login');
        }

        $searchModel = new PlaylistsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $this->layout = "admin";

        //return $this->render('index', ['searchModel' => $searchModel, 'dataProvider' => $dataProvider,]);
        return $this->redirect(['admin/playlists']);
    }

    /**
     * Displays a single Playlists model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('/admin/login');
        }
        $this->layout = "admin";

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Playlists model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('/admin/login');
        }
        $this->layout = "admin";

        $model = new Playlists();

        if ($model->load(Yii::$app->request->post())) {
            $image = UploadedFile::getInstance($model, 'image');
            if ($image && $image->tempName) {
                $model->image = $image;
                if ($model->validate(['image'])) {


                    $dir = Yii::getAlias('media/');
                    $imageName = 'thumb_'.$model->image->baseName . '.' . $model->image->extension;
                    $model->image->saveAs($dir . $imageName);
                    $model->image = $imageName; // без этого ошибка
                    $model->thumb = '/'.$dir . $imageName;

                }
            }

            $ext = end(explode('.', $model->media));
            $video = UploadedFile::getInstance($model, 'video');
            if ($video && $video->tempName) {
                $model->video = $video;
                if (end(explode('.', $model->video)) == 'jpg' || end(explode('.', $model->video)) == 'png' || end(explode('.', $model->video)) == 'gif') {


                    $dir = Yii::getAlias('media/');
                    $imageName = 'ban_'.$model->video->baseName . '.' . $model->video->extension;
                    $model->video->saveAs($dir . $imageName);
                    $model->video = $imageName; // без этого ошибка
                    $model->media = '/'.$dir . $imageName;

                } elseif ( $model->validate(['video'])) {

                    $dir = Yii::getAlias('media/');
                    $videoName = 'video_'.$model->video->baseName . '.' . $model->video->extension;
                    $model->video->saveAs($dir . $videoName);
                    $model->video = $videoName; // без этого ошибка
                    $model->media = '/'.$dir . $videoName;

                } else {

                    if (end(explode('&', $model->media)) != 'autoplay=1') {
                        $model->media = 'https://www.youtube.com/embed/videoseries?list=' . $model->media . '&autoplay=1';
                    }

                }
            } else {

                if (end(explode('&', $model->media)) != 'autoplay=1') {
                    $model->media = 'https://www.youtube.com/embed/videoseries?list=' . $model->media . '&autoplay=1';
                }

            }

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Playlists model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('/admin/login');
        }
        $this->layout = "admin";

        $model = $this->findModel($id);
        $current_image = $model->thumb;
        $current_video = $model->media;

        if ($model->load(Yii::$app->request->post())) {
            $image = UploadedFile::getInstance($model, 'image');
            if ($image && $image->tempName) {
                $model->image = $image;
                if ($model->validate(['image'])) {

                    //Если отмечен чекбокс «удалить файл»
                    if($model->del_img)
                    {
                        if(file_exists(Yii::getAlias('@webroot'.$current_image)))
                        {
                            //удаляем файл
                            unlink(Yii::getAlias('@webroot'.$current_image));
                            $model->thumb = '';
                        }
                    }


                    $dir = Yii::getAlias('media/');
                    $imageName = 'thumb_'.$model->image->baseName . '.' . $model->image->extension;
                    $model->image->saveAs($dir . $imageName);
                    $model->image = $imageName; // без этого ошибка
                    $model->thumb = '/'.$dir . $imageName;

                }
            }

            $ext = end(explode('.', $model->media));
            $video = UploadedFile::getInstance($model, 'video');
            if ($video && $video->tempName) {
                $model->video = $video;
                if ($model->validate(['video'])) {

                    //Если отмечен чекбокс «удалить файл»
                    if($model->del_video)
                    {
                        if(file_exists(Yii::getAlias('@webroot'.$current_video)))
                        {
                            //удаляем файл
                            unlink(Yii::getAlias('@webroot'.$current_video));
                            $model->media = '';
                        }
                    }


                    $dir = Yii::getAlias('media/');
                    $videoName = 'video_'.$model->video->baseName . '.' . $model->video->extension;
                    $model->video->saveAs($dir . $videoName);
                    $model->video = $videoName; // без этого ошибка
                    $model->media = '/'.$dir . $videoName;

                } elseif (end(explode('.', $model->video)) == 'jpg' || end(explode('.', $model->video)) == 'png' || end(explode('.', $model->video)) == 'gif') {


                    $dir = Yii::getAlias('media/');
                    $imageName = 'ban_'.$model->video->baseName . '.' . $model->video->extension;
                    $model->video->saveAs($dir . $imageName);
                    $model->video = $imageName; // без этого ошибка
                    $model->media = '/'.$dir . $imageName;

                }


            } elseif ($ext == 'mp4' or $ext == 'avi') {



            } elseif ($ext == 'jpg' || $ext == 'png' || $ext == 'gif') {


            }else {

                if (explode('://', $model->media)[0] != 'https' ) {
                    $model->media = 'https://www.youtube.com/embed/videoseries?list=' . $model->media . '&autoplay=1';
                }

            }

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Playlists model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('/admin/login');
        }

        $this->findModel($id)->delete();

        return $this->redirect(['admin/playlists']);
    }

    /**
     * Finds the Playlists model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Playlists the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Playlists::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }



}
