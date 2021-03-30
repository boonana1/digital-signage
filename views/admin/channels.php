<?php

/* @var $this yii\web\View */
/* @var $model app\models\Channels */
/* @var $form ActiveForm */
/* @var $model app\models\Playlists */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Каналы';
?>

              <div class="card">
                <div class="card-header card-header-rose card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <h4 class="card-title"></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                            <th class="text-center">Номер канала</th>
                          <th class="text-center">Название</th>
                          <th class="text-center">Описание</th>
                          <th class="text-center">Плейлист</th>
                          <th class="text-center">Удалить канал</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($channels as $channel): ?>
                        <tr>
                            <td class="text-center"><?= Html::encode("{$channel->id}") ?></td>
                          <td class="text-center"><?= Html::encode("{$channel->name}") ?></td>
                          <td class="text-center">
                            <div class="description">
                                <?= Html::encode("{$channel->description}") ?>
                            </div>
                          </td>
                          <td class="text-center">
                              <!-- Button trigger modal -->
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#selectPlaylists<?= Html::encode("{$channel->id}") ?>">
                                Выбран плейлист: <?= Html::encode("{$channel->playlist_id}") ?>
                              </button>
                          </td>
                          <td class="td-actions text-center">
                            <!--<button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="">
                              <i class="material-icons">person</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                              <i class="material-icons">edit</i>
                            </button>-->
                            <a class="btn btn-danger" data-original-title="" title="" style="color: #fff;" href="<?= Url::toRoute(['channel/delete', 'id' => $channel->id]); ?>">
                              <i class="material-icons">close</i>
                            </a>
                          </td>
                        </tr>
                          <!-- Modal -->
                          <div class="modal fade" id="selectPlaylists<?= Html::encode("{$channel->id}") ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Плейлисты</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">

                                          <a href="<?= Url::to(['playlist/create']); ?>" class="btn btn-rose btn-block" style="display: block;">
                                              Создать новый плейлист
                                              <div class="ripple-container"></div>
                                          </a>


                                          <?php foreach ($playlists as $playlist): ?>
                                              <div class="row list-plst" >
                                                  <div class="title" style="max-width: 25%;"><a href="<?= Url::toRoute(['playlist/view', 'id' => $playlist->id]); ?>"><?= Html::encode("{$playlist->id}") ?>: <?= Html::encode("{$playlist->name}") ?></a></div>
                                                  <div class="description"><?= Html::encode("{$playlist->description}") ?></div>
                                                  <div class="form-group">
                                                  <?php
                                                  $form = ActiveForm::begin([
                                                      'action' =>'admin/channels',
                                                      'method' => 'post',
                                                  ]); ?>

                                                  <div class="form-group">
                                                      <?= Html::a('Выбрать', Url::to(['admin/change-playlist', 'id' => $channel->id, 'playlist_id' => $playlist->id]), ['class'=>'btn btn-primary ', 'data-method' => 'POST']) ?>
                                                  </div>
                                                  <?php ActiveForm::end();?>
                                                  </div>
                                              </div>
                                          <?php endforeach; ?>


                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>

                                      </div>
                                  </div>
                              </div>
                          </div>
                      <?php endforeach; ?>

                          <td colspan="5">
                              <?= Html::a('<i class="material-icons">add</i>Создать новый канал', ['create'], ['class' => 'btn btn-rose btn-block']) ?>

                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>


                  <!--<div class="row list-chnl" style="justify-content: space-around; align-items: center;">
                    <div class="title"><a href="">Название</a></div>
                    <div class="title">Описание</div>
                    <div class="title">Плейлист</div>
                    <div class="title">Действие</div>
                  </div>

                  <div class="row list-chnl" style="justify-content: space-around; align-items: center;">
                    <div class="title"><a href="">Канал 1</a></div>
                    <div class="description">Описание </div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#selectPlaylists">
                      Выбрать плейлист
                    </button>
                    <div class="del">
                      <button type="button" rel="tooltip" class="btn btn-danger btn-link" data-original-title="" title="">
                        <i class="material-icons">close</i>
                      <div class="ripple-container"></div></button>
                    </div>
                  </div>
      
                  <div class="row list-chnl" style="justify-content: space-around; align-items: center;">
                    <div class="title"><a href="">Канал 2</a></div>
                    <div class="description">Описание </div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#selectPlaylists">
                      Выбрать плейлист
                    </button>
                    <div class="del">
                      <button type="button" rel="tooltip" class="btn btn-danger btn-link" data-original-title="" title="">
                        <i class="material-icons">close</i>
                      <div class="ripple-container"></div></button>
                    </div>
                  </div>
      
                  <div class="row list-chnl" style="justify-content: space-around; align-items: center;">
                    <div class="title"><a href="">Канал 3</a></div>
                    <div class="description">Описание </div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#selectPlaylists">
                      Выбрать плейлист
                    </button>
                    <div class="del">
                      <button type="button" rel="tooltip" class="btn btn-danger btn-link" data-original-title="" title="">
                        <i class="material-icons">close</i>
                      <div class="ripple-container"></div></button>
                    </div>
                  </div>

                  <div class="row list-chnl">
                    <button type="submit" class="btn btn-rose btn-block" style="display: block;">
                      <i class="material-icons">add</i>
                      Создать новый канал
                      <div class="ripple-container"></div>
                    </button>
                  </div>-->

                </div>
              </div>

