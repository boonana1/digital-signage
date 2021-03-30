<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Playlists */
/* @var $form yii\widgets\ActiveForm */
?>



<div class="col-md-8 col-12 mr-auto ml-auto">
    <!--      Wizard container        -->
    <div class="wizard-container">
        <div class="card card-wizard " data-color="rose" id="wizardProfile">
            <?php $form = ActiveForm::begin([
                'options' => [

                    'enctype' => 'multipart/form-data',
                ]
            ]); ?>
            <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
            <div class="card-header text-center">
                <h3 class="card-title">
                    <?= $this->title; ?>
                </h3>
                <!--<h5 class="card-description">This information will let us know more about you.</h5>-->
            </div>

            <div class="wizard-navigation">
                <ul class="nav nav-pills">
                    <li class="nav-item" style="width: 33.3333%;">
                        <a class="nav-link " href="#general" data-toggle="tab" role="tab">
                            Общее
                        </a>
                    </li>
                    <li class="nav-item" style="width: 33.3333%;">
                        <a class="nav-link" href="#template" data-toggle="tab" role="tab">
                            Шаблон
                        </a>
                    </li>
                    <li class="nav-item" style="width: 33.3333%;">
                        <a class="nav-link" href="#save" data-toggle="tab" role="tab">
                            Медиа
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane " id="general">
                        <div class="row justify-content-center">
                            <div class="col-sm-10">
                                <div class="input-group form-control-lg">
                                    <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">title</i>
                                </span>
                                    </div>
                                    <!--<div class="form-group bmd-form-group has-danger">
                                        <label for="exampleInput1" class="bmd-label-floating">Название плейлиста (обязательно)</label>
                                        <input type="text" class="form-control" id="exampleInput1" name="name" required="" aria-required="true" spellcheck="false" data-ms-editor="true">
                                    </div>-->
                                    <?= $form->field($model, 'name')->textInput()->label('Название плейлиста (обязательно)', ['class' => 'bmd-label-floating']) ?>
                                </div>
                            </div>
                            <div class="col-lg-10 mt-3">
                                <div class="input-group form-control-lg">
                                    <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">description</i>
                                </span>
                                    </div>
                                    <!--<div class="form-group bmd-form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Описание</label>
                                        <input type="text" class="form-control" name="description" >
                                    </div>-->
                                    <?= $form->field($model, 'description')->textarea(['rows' => 6])->label() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="template">
                        <h5 class="info-text"> Выберите подходящий шаблон плеера</h5>
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="choice" data-toggle="wizard-radio">
                                            <?= $form->field($model, 'template')->radio(['value' => 1, 'uncheck' => null])?>
                                            <div class="icon">
                                                <img class="" src="./img/template-1.png" style="max-width: 100%;"></img>
                                            </div>
                                            <h6>1</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="choice" data-toggle="wizard-radio">
                                            <?= $form->field($model, 'template')->radio(['value' => 2, 'uncheck' => null])?>
                                            <div class="icon">
                                                <img class="" src="./img/template-2.png" style="max-width: 100%;"></img>
                                            </div>
                                            <h6>2</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="choice" data-toggle="wizard-radio">
                                            <?= $form->field($model, 'template')->radio(['value' => 3, 'uncheck' => null])?>
                                            <div class="icon">
                                                <img class="" src="./img/template-3.png" style="max-width: 100%;"></img>
                                            </div>
                                            <h6>3</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="tab-pane" id="save">
                        <div class="row justify-content-center">

                            <div class="col-sm-12">
                                <h5 class="info-text"> Здесь вы можете добавить в плейлист видео, плейлист из YouTube и оповещение для бегущей строки плеера. </h5>

                                <?= $form->field($model, 'image')->fileInput()->label('Миниатюра')?>
                                <?php
                                //$form->field($model, 'thumb')->textarea(['rows' => 6])
                                //if(isset($model->thumb) && file_exists(Yii::getAlias('@webroot', $model->thumb)))
                                //{
                                //    echo Html::img($model->thumb, ['class'=>'img-responsive', 'style' => 'max-width: 100%;']);
                                //    echo $form->field($model,'del_img')->checkBox(['class'=>'span-1']);
                                //}

                                if(!empty($model->thumb)){
                                    echo $form->field($model,'del_img', ['template' => '
                              <div class="form-check">
                                  <label class="form-check-label">
                                      {input}
                                      Удалить
                                      <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                  </label>
                              </div>
                            '])->checkBox(['class'=>'form-check-input span-1'], false)->label('Удалить ');
                                    echo Html::img($model->thumb, $options = ['class' => 'postImg', 'style' => ['max-width' => '100%']]);
                                }
                                //Html::a('Загрузить', ['set-image', 'id' => $model->id], ['class' => 'btn btn-success'])
                                ?>


                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Выберите, что будет отображаться в блоке с медиа</h4>
                                        </div>
                                        <div class="card-body">
                                            <div id="accordion" role="tablist">
                                                <div class="card-collapse">
                                                    <div class="card-header" role="tab" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                                                Загрузить видео или баннер
                                                                <i class="material-icons">keyboard_arrow_down</i>
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne" class="collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                                        <div class="card-body">
                                                            <?= $form->field($model, 'video')->fileInput()->label('Медиафайл') ?>
                                                            <?php

                                                            if(!empty($model->media)){
                                                                //echo Html::a('Посмотреть видео', [$model->media], $options = ['class' => 'btn btn-primary btn-round', 'target' => '_blank', 'style' => ['width' => '180px']]);
                                                                echo $form->field($model,'del_video', ['template' => '
                                                          <div class="form-check">
                                                              <label class="form-check-label">
                                                                  {input}
                                                                  Удалить
                                                                  <span class="form-check-sign">
                                                                      <span class="check"></span>
                                                                  </span>
                                                              </label>
                                                          </div>
                                                        '])->checkBox(['class'=>'form-check-input span-1'], false)->label('Удалить ');
                                                                if (end(explode('.', $model->media)) == 'avi' || end(explode('.', $model->media)) == 'mp4')
                                                                {
                                                                    echo '<video class="align-self-center" style="max-width: 100%;" controls muted tabindex="-1"><source src="'.$model->media.'"></video>';
                                                                } elseif (end(explode('.', $model->media)) == 'jpg' || end(explode('.', $model->media)) == 'png' || end(explode('.', $model->media)) == 'gif') {
                                                                    echo '<img class="align-self-center img" src="'.$model->media.'" style="max-width: 100%;" >';
                                                                } else {
                                                                    echo "<iframe width=\"100%\" height=\"100%\" class=\"align-self-center\" src=\"$model->media\" frameborder=\"0\" allow=\"accelerometer; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
                                                                }
                                                            }
                                                            //$form->field($model, 'media')->textarea(['rows' => 6])
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-collapse">
                                                    <div class="card-header" role="tab" id="headingTwo">
                                                        <h5 class="mb-0">
                                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                Вставить с YouTube
                                                                <i class="material-icons">keyboard_arrow_down</i>
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                                        <div class="card-body">

                                                            <h2>Как добавить плейлист</h2>
                                                            <ol>
                                                                <li>Войдите в аккаунт на компьютере.</li>
                                                                <li>Выберите нужный плейлист.</li>
                                                                <li>Скопируйте его идентификатор из URL в адресной строке.
                                                                    <img src="./img/guide-0.png" alt="" style="max-width: 100%"> или <img src="./img/guide-1.png" alt="" style="max-width: 100%">
                                                                </li>
                                                                <li>И вставьте в строку ниже.</li>
                                                            </ol>

                                                            <?= $form->field($model, 'media')->textInput()->label('Идентификатор плейлиста (обязательно)', ['class' => 'bmd-label-floating']) ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <?= $form->field($model, 'alert')->textarea(['rows' => 6]) ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="mr-auto">
                    <input type="button" class="btn btn-previous btn-fill btn-default btn-wd disabled" name="previous" value="Назад">
                </div>
                <div class="ml-auto">
                    <input type="button" class="btn btn-next btn-fill btn-rose btn-wd" name="next" value="Далее">

                    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-finish btn-fill btn-rose btn-wd', 'name' => 'finish',  'style' => 'display: none;']) ?>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
        <!-- wizard container -->
    </div>




